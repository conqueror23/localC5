<?php

namespace Application\blocks\Customized_Block;

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
class Controller extends BlockController
{

    public $collection;
    protected $homePageID;
    protected $btTable = 'btCustomizedBlock';
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


    public function getBlockTypeDescription()
    {
        return t("Creates a customised blocks.");
    }

    public function getBlockTypeName()
    {
        return t("Customized-Block");
    }

}