<?php
namespace Concrete\Package\Modena\Controller\SinglePage\Dashboard\ModenaThemeOptions;
use \Concrete\Core\Page\Controller\DashboardPageController;
use Config;
use Package;

class HeaderSettings extends DashboardPageController
{
    public function view()
    {
        $pkg = Package::getByHandle('modena');
        $static_header = $pkg->getConfig()->get('site_front_end.static_header.static_header', 1);
        $static_header_height = $pkg->getConfig()->get('site_front_end.static_header_height.static_header_height', 100);
        $static_header_height_scroll = $pkg->getConfig()->get('site_front_end.static_header_height_scroll.static_header_height_scroll', 70);
        $disable_search = $pkg->getConfig()->get('site_front_end.disable_search.disable_search');
        $disable_guide_header = $pkg->getConfig()->get('site_front_end.disable_guide_header.disable_guide_header', 1);

        $this->set('static_header', $static_header);
        $this->set('static_header_height', $static_header_height);
        $this->set('static_header_height_scroll', $static_header_height_scroll);
        $this->set('disable_search', $disable_search);
        $this->set('disable_guide_header', $disable_guide_header);
    }

    public function updated()
    {
        $this->set('success', t("Your settings were saved successfully."));
        $this->view();
    }

    public function save_header_settings()
    {
        if ($this->token->validate("save_header_settings")) {
            if ($this->isPost()) {
                $static_header = $this->post('static_header');
                $static_header_height = $this->post('static_header_height');
                $static_header_height_scroll = $this->post('static_header_height_scroll');
                $disable_search = $this->post('disable_search');
                $disable_guide_header = $this->post('disable_guide_header');

                $pkg = Package::getByHandle('modena');

                $pkg->getConfig()->save('site_front_end.static_header.static_header', $static_header);
                $pkg->getConfig()->save('site_front_end.static_header_height.static_header_height', $static_header_height);
                $pkg->getConfig()->save('site_front_end.static_header_height_scroll.static_header_height_scroll', $static_header_height_scroll);
                $pkg->getConfig()->save('site_front_end.disable_search.disable_search', $disable_search);
                $pkg->getConfig()->save('site_front_end.disable_guide_header.disable_guide_header', $disable_guide_header);

                $this->redirect('/dashboard/modena_theme_options/header_settings','updated');
            }
        } else {
            $this->set('error', array($this->token->getErrorMessage()));
        }
    }
}