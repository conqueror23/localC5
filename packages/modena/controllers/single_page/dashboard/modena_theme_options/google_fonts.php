<?php
namespace Concrete\Package\Modena\Controller\SinglePage\Dashboard\ModenaThemeOptions;
use \Concrete\Core\Page\Controller\DashboardPageController;
use Config;
use Package;

class GoogleFonts extends DashboardPageController
{
    public function view()
    {
        $this->requireAsset('javascript', 'modena_google_fonts');
        $this->requireAsset('javascript', 'main_modena_google_fonts');
        $pkg = Package::getByHandle('modena');
        $use_google_font = $pkg->getConfig()->get('site_front_end.use_google_font.use_google_font');
        $main_google_font = $pkg->getConfig()->get('site_front_end.main_google_font.main_google_font');
        $heading_google_font = $pkg->getConfig()->get('site_front_end.heading_google_font.heading_google_font');
        $nav_google_font = $pkg->getConfig()->get('site_front_end.nav_google_font.nav_google_font');

        $this->set('use_google_font', $use_google_font);
        $this->set('main_google_font', $main_google_font);
        $this->set('heading_google_font', $heading_google_font);
        $this->set('nav_google_font', $nav_google_font);
    }

    public function updated()
    {
        $this->set('success', t("Your settings were saved successfully."));
        $this->view();
    }

    public function google_fonts_save_settings()
    {
        if ($this->token->validate("google_fonts_save_settings")) {
            if ($this->isPost()) {
                $use_google_font = $this->post('use_google_font');
                $main_google_font = $this->post('main_google_font');
                $heading_google_font = $this->post('heading_google_font');
                $nav_google_font = $this->post('nav_google_font');

                $pkg = Package::getByHandle('modena');

                $pkg->getConfig()->save('site_front_end.main_google_font.main_google_font', $main_google_font);
                $pkg->getConfig()->save('site_front_end.use_google_font.use_google_font', $use_google_font);
                $pkg->getConfig()->save('site_front_end.heading_google_font.heading_google_font', $heading_google_font);
                $pkg->getConfig()->save('site_front_end.nav_google_font.nav_google_font', $nav_google_font);

                $this->redirect('/dashboard/modena_theme_options/google_fonts','updated');
            }
        } else {
            $this->set('error', array($this->token->getErrorMessage()));
        }
    }
}