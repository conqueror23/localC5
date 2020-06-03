<?php
namespace Concrete\Package\Modena\Controller\SinglePage\Dashboard\ModenaThemeOptions;
use \Concrete\Core\Page\Controller\DashboardPageController;
use Config;
use Package;

class SiteSettings extends DashboardPageController
{
    public function view()
    {
        $pkg = Package::getByHandle('modena');
        $site_width = $pkg->getConfig()->get('site_front_end.site_width.site_width', 1240);
        $social_button_shape = $pkg->getConfig()->get('site_front_end.social_button_shape.social_button_shape');
        $disable_preloader = $pkg->getConfig()->get('site_front_end.disable_preloader.disable_preloader');
        $disable_backtotop = $pkg->getConfig()->get('site_front_end.disable_backtotop.disable_backtotop');
        $use_us_date = $pkg->getConfig()->get('site_front_end.use_us_date.use_us_date');

        $this->set('site_width', $site_width);
        $this->set('social_button_shape', $social_button_shape);
        $this->set('disable_preloader', $disable_preloader);
        $this->set('disable_backtotop', $disable_backtotop);
        $this->set('use_us_date', $use_us_date);

    }

    public function updated()
    {
        $this->set('success', t("Your settings were saved successfully."));
        $this->view();
    }

    public function site_save_settings()
    {
        if ($this->token->validate("site_save_settings")) {
            if ($this->isPost()) {
                $site_width = $this->post('site_width');
                $social_button_shape = $this->post('social_button_shape');
                $disable_preloader = $this->post('disable_preloader');
                $disable_backtotop = $this->post('disable_backtotop');
                $use_us_date = $this->post('use_us_date');

                $pkg = Package::getByHandle('modena');

                $pkg->getConfig()->save('site_front_end.site_width.site_width', $site_width);
                $pkg->getConfig()->save('site_front_end.social_button_shape.social_button_shape', $social_button_shape);
                $pkg->getConfig()->save('site_front_end.disable_preloader.disable_preloader', $disable_preloader);
                $pkg->getConfig()->save('site_front_end.disable_backtotop.disable_backtotop', $disable_backtotop);
                $pkg->getConfig()->save('site_front_end.use_us_date.use_us_date', $use_us_date);

                $this->redirect('/dashboard/modena_theme_options/site_settings','updated');
            }
        } else {
            $this->set('error', array($this->token->getErrorMessage()));
        }
    }
}