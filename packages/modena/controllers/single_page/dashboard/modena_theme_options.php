<?php
namespace Concrete\Package\Modena\Controller\SinglePage\Dashboard;
use \Concrete\Core\Page\Controller\DashboardPageController;
use Config;
use Loader;

class ModenaThemeOptions extends DashboardPageController
{
    public function view()
    {
        $this->redirect('/dashboard/modena_theme_options/site_settings');
    }
}
