<?php
namespace Concrete\Package\Modena\Controller\SinglePage\Dashboard\ModenaThemeOptions;
use \Concrete\Core\Page\Controller\DashboardPageController;
use Config;
use Loader;
use Package;

class MobileNavigationSettings extends DashboardPageController
{

    public function view()
    {
        $pkg = Package::getByHandle('modena');
        $mobile_nav_width = $pkg->getConfig()->get('site_front_end.mobile_nav_width.mobile_nav_width', 70);
        $mobile_nav_arrow = $pkg->getConfig()->get('site_front_end.mobile_nav_arrow.mobile_nav_arrow', true);
        $mobile_nav_center = $pkg->getConfig()->get('site_front_end.mobile_nav_center.mobile_nav_center');
        $mobile_nav_shadow = $pkg->getConfig()->get('site_front_end.mobile_nav_shadow.mobile_nav_shadow');
       
        $this->set('mobile_nav_width', $mobile_nav_width);
        $this->set('mobile_nav_arrow', $mobile_nav_arrow);
        $this->set('mobile_nav_center', $mobile_nav_center);
        $this->set('mobile_nav_shadow', $mobile_nav_shadow);
    }

    public function updated()
    {
        $this->set('success', t("Your settings were saved successfully."));
        $this->view();
    }

    public function save_mobile_nav_settings()
    {
        if ($this->token->validate("save_mobile_nav_settings")) {
            if ($this->isPost()) {
                $mobile_nav_width = $this->post('mobile_nav_width');
                $mobile_nav_arrow = $this->post('mobile_nav_arrow');
                $mobile_nav_center = $this->post('mobile_nav_center');
                $mobile_nav_shadow = $this->post('mobile_nav_shadow');
                
                $pkg = Package::getByHandle('modena');

                $pkg->getConfig()->save('site_front_end.mobile_nav_width.mobile_nav_width', $mobile_nav_width);
                $pkg->getConfig()->save('site_front_end.mobile_nav_arrow.mobile_nav_arrow', $mobile_nav_arrow);
                $pkg->getConfig()->save('site_front_end.mobile_nav_center.mobile_nav_center', $mobile_nav_center);
                $pkg->getConfig()->save('site_front_end.mobile_nav_shadow.mobile_nav_shadow', $mobile_nav_shadow);
               
                $this->redirect('/dashboard/modena_theme_options/mobile_navigation_settings','updated');
            }
        } else {
            $this->set('error', array($this->token->getErrorMessage()));
        }
    }
}