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
    protected $btInterfaceHeight = 525;
    protected $btCacheBlockRecord = true;
    protected $btCacheBlockOutput = true;
    protected $btCacheBlockOutputOnPost = true;
    protected $btCacheBlockOutputForRegisteredUsers = false;
    protected $btCacheBlockOutputLifetime = 300;
    protected $helpers = ['form', 'validation/token'];
    protected $btWrapperClass = 'cusBlock-ui';
    protected $btExportPageColumns = array('displayPagesCID');
    protected $includeParentItem;

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



}