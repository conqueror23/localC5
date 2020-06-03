<?php
namespace Concrete\Package\Modena\Controller\SinglePage\Dashboard\ModenaThemeOptions;
use \Concrete\Core\Page\Controller\DashboardPageController;
use Config;
use Loader;
use Package;

class NavigationSettings extends DashboardPageController
{

    public function view()
    {
        $pkg = Package::getByHandle('modena');
        $sub_nav_width = $pkg->getConfig()->get('site_front_end.sub_nav_width.sub_nav_width', 225);
       

        $this->set('sub_nav_width', $sub_nav_width);
       
    }

    public function updated()
    {
        $this->set('success', t("Your settings were saved successfully."));
        $this->view();
    }

    public function save_nav_settings()
    {
        if ($this->token->validate("save_nav_settings")) {
            if ($this->isPost()) {
                $sub_nav_width = $this->post('sub_nav_width');
                

                $pkg = Package::getByHandle('modena');

                $pkg->getConfig()->save('site_front_end.sub_nav_width.sub_nav_width', $sub_nav_width);
               

                $this->redirect('/dashboard/modena_theme_options/navigation_settings','updated');
            }
        } else {
            $this->set('error', array($this->token->getErrorMessage()));
        }
    }
}