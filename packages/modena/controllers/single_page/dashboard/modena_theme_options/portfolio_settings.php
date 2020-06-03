<?php
namespace Concrete\Package\Modena\Controller\SinglePage\Dashboard\ModenaThemeOptions;
use \Concrete\Core\Page\Controller\DashboardPageController;
use Config;
use Package;

class PortfolioSettings extends DashboardPageController
{
    public function view()
    {
        $pkg = Package::getByHandle('modena');
        $topic_list_position = $pkg->getConfig()->get('site_front_end.topic_list_position.topic_list_position');
        $portfolio_columns = $pkg->getConfig()->get('site_front_end.portfolio_columns.portfolio_columns');
        $portfolio_margin = $pkg->getConfig()->get('site_front_end.portfolio_margin.portfolio_margin');

        $this->set('topic_list_position', $topic_list_position);
        $this->set('portfolio_columns', $portfolio_columns);
        $this->set('portfolio_margin', $portfolio_margin);
    }

    public function updated()
    {
        $this->set('success', t("Your settings were saved successfully."));
        $this->view();
    }

    public function save_portfolio_settings()
    {
        if ($this->token->validate("save_portfolio_settings")) {
            if ($this->isPost()) {
                $topic_list_position = $this->post('topic_list_position');
                $portfolio_columns = $this->post('portfolio_columns');
                $portfolio_margin = $this->post('portfolio_margin');

                $pkg = Package::getByHandle('modena');

                $pkg->getConfig()->save('site_front_end.topic_list_position.topic_list_position', $topic_list_position);
                $pkg->getConfig()->save('site_front_end.portfolio_columns.portfolio_columns', $portfolio_columns);
                $pkg->getConfig()->save('site_front_end.portfolio_margin.portfolio_margin', $portfolio_margin);

                $this->redirect('/dashboard/modena_theme_options/portfolio_settings','updated');
            }
        } else {
            $this->set('error', array($this->token->getErrorMessage()));
        }
    }
}