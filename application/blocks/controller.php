<?php

namespace Application\blocks;

use Concrete\Core\Block\BlockController;
use Core;
use Database;
use Page;
use Permissions;
use Concrete\Core\Error\UserMessageException;
use Concrete\Core\Block\View\BlockView;
use Concrete\Core\Http\ResponseFactoryInterface;
use Concrete\Core\Entity\Block\BlockType\BlockType;
use Doctrine\ORM\EntityManagerInterface;

/**
 * Class Controller
 * @package Application\blocks
 */

class Controller extends BlockController{

    public $collection;
    protected $homePageID;
    protected $btTable = 'btNavigation';
    protected $btInterfaceWidth = 700;
    public $cParentIDArray = array();
    protected $btInterfaceHeight = 525;
    protected $btCacheBlockRecord = true;
    protected $btCacheBlockOutput = true;
    public $displayPages, $displayPagesCID, $displayPagesIncludeSelf, $displaySubPages, $displaySubPageLevels, $displaySubPageLevelsNum, $orderBy, $displayUnavailablePages;
    protected $btCacheBlockOutputOnPost = true;
    protected $btCacheBlockOutputForRegisteredUsers = false;
    protected $btCacheBlockOutputLifetime = 300;
    protected $helpers = ['form', 'validation/token'];
    protected $btWrapperClass = 'cusBlock-ui';
    protected $btExportPageColumns = array('displayPagesCID');
    protected $includeParentItem;

    /**
     * Controller constructor.
     * @param null $obj
     */
    public function __construct($obj = null)
    {
        if (is_object($obj)) {
            switch (strtolower(get_class($obj))) {
                case "blocktype":
                    // instantiating autonav on a particular collection page, instead of adding
                    // it through the block interface
                    $this->bID = null;
                    break;
                case "block": // block
                    // standard block object
                    $this->bID = $obj->bID;
                    break;
            }
        }
        $c = Page::getCurrentPage();
        if (is_object($c)) {
            if ($c->getCollectionPointerOriginalID() > 0) {
                $this->cID = $c->getCollectionPointerOriginalID();
            } else {
                $this->cID = $c->getCollectionID();
            }
            $this->cParentID = $c->getCollectionParentID();
            $this->homePageID = $c->getSiteHomePageID();
        } else {
            $this->homePageID = Page::getHomePageID();
        }

        parent::__construct($obj);

    }

    public function getBlockTypeDescription()
    {
        return t("Creates a customised blocks.");
    }

    public function getBlockTypeName()
    {
        return t("Customized-Block");
    }

    public function getContent()
    {
        /* our templates expect a variable not an object */
        $con = array();
        foreach ($this as $key => $value) {
            $con[$key] = $value;
        }

        return $con;
    }

    /**
     * @param $c
     * @return array
     */
    public function getChildPages($c)
    {

        // a quickie
        $db = Database::connection();
        $r = $db->query(
            "select cID from Pages where cParentID = ? order by cDisplayOrder asc",
            array($c->getCollectionID()));
        $pages = array();
        while ($row = $r->fetchRow()) {
            $pages[] = Page::getByID($row['cID'], 'ACTIVE');
        }

        return $pages;
    }

    /**
     * @return int
     */
    public function getParentParentID()
    {
        // this has to be the stupidest name of a function I've ever created. sigh
        $cParentID = Page::getCollectionParentIDFromChildID($this->cParentID);

        return ($cParentID) ? $cParentID : 0;
    }

    /**
     * @param $level
     * @return mixed|null
     */

    public function getParentAtLevel($level)
    {
        // this function works in the following way
        // we go from the current collection up to the top level. Then we find the parent Id at the particular level specified, and begin our
        // autonav from that point

        $this->populateParentIDArray($this->cID);

        $idArray = array_reverse($this->cParentIDArray);
        $this->cParentIDArray = array();
        if ($level - count($idArray) == 0) {
            // This means that the parent ID array is one less than the item
            // we're trying to grab - so we return our CURRENT page as the item to get
            // things under
            return $this->cID;
        }

        if (isset($idArray[$level])) {
            return $idArray[$level];
        } else {
            return null;
        }
    }

    public function populateParentIDArray($cID)
    {
        // returns an array of collection IDs going from the top level to the current item
        $cParentID = Page::getCollectionParentIDFromChildID($cID);
        if (is_numeric($cParentID)) {
            if (!in_array($cParentID, $this->cParentIDArray, true)) {
                $this->cParentIDArray[] = $cParentID;
            }
            if ($cParentID > 0) {
                $this->populateParentIDArray($cParentID);
            }
        }
    }

    protected function displayPage($tc)
    {
        $tcv = $tc->getVersionObject();
        if ((!is_object($tcv)) || (!$tcv->isApprovedNow() && !$this->displayUnapproved)) {
            return false;
        }

        if ($this->displayUnavailablePages == false) {
            $tcp = new Permissions($tc);
            if (!$tcp->canRead()) {
                return false;
            }
        }

        return true;
    }


}