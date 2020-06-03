<?php
namespace Concrete\Package\Modena\Controller\SinglePage\Dashboard\ModenaThemeOptions;
use \Concrete\Core\Page\Controller\DashboardPageController;
use Config;
use Loader;
use Package;

class FooterSettings extends DashboardPageController
{
    public function view()
    {
        $pkg = Package::getByHandle('modena');
        $copyright_notice = $pkg->getConfig()->get('site_front_end.copyright_notice.copyright_notice');
        $copyright_position = $pkg->getConfig()->get('site_front_end.copyright_position.copyright_position');
        $login_link = $pkg->getConfig()->get('site_front_end.login_link.login_link');
        $credit_link = $pkg->getConfig()->get('site_front_end.credit_link.credit_link');
        $footer_columns = $pkg->getConfig()->get('site_front_end.footer_columns.footer_columns');

        $this->set('copyright_notice', $copyright_notice);
        $this->set('copyright_position', $copyright_position);
        $this->set('login_link', $login_link);
        $this->set('credit_link', $credit_link);
        $this->set('footer_columns', $footer_columns);
    }

    public function updated()
    {
        $this->set('success', t("Your settings were saved successfully."));
        $this->view();
    }

    public function save_footer_settings()
    {
        if ($this->token->validate("save_footer_settings")) {
            if ($this->isPost()) {
                $copyright_notice = $this->post('copyright_notice');
                $copyright_position = $this->post('copyright_position');
                $login_link = $this->post('login_link');
                $credit_link = $this->post('credit_link');
                $footer_columns = $this->post('footer_columns');

                $pkg = Package::getByHandle('modena');

                $pkg->getConfig()->save('site_front_end.copyright_notice.copyright_notice', $copyright_notice);
                $pkg->getConfig()->save('site_front_end.copyright_position.copyright_position', $copyright_position);
                $pkg->getConfig()->save('site_front_end.login_link.login_link', $login_link);
                $pkg->getConfig()->save('site_front_end.credit_link.credit_link', $credit_link);
                $pkg->getConfig()->save('site_front_end.footer_columns.footer_columns', $footer_columns);

                $this->redirect('/dashboard/modena_theme_options/footer_settings','updated');
            }
        } else {
            $this->set('error', array($this->token->getErrorMessage()));
        }
    }
}