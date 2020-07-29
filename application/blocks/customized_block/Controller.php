<?php

namespace Application\blocks\CustomizedBlock;

use Concrete\Core\Block\BlockController;

/**
 * Class Controller
 * @package Application\blocks
 */
class Controller extends BlockController
{
    protected $btTable = 'btCustomizedBlock';
    protected $btName ='customized_bLock';
    protected $btDescription='This is a customised block here you are not missing this one are we?';

    protected $btInterfaceWidth = 700;
    protected $btInterfaceHeight = 525;

    public function getBlockTypeDescription()
    {
        return t("Creates a customised blocks.");
    }

    public function getBlockTypeName()
    {
        return t("Customized-Block");
    }

}