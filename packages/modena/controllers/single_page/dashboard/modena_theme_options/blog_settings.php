<?php
namespace Concrete\Package\Modena\Controller\SinglePage\Dashboard\ModenaThemeOptions;
use \Concrete\Core\Page\Controller\DashboardPageController;
use Config;
use Package;

class BlogSettings extends DashboardPageController
{
    public function view()
    {
        $pkg = Package::getByHandle('modena');
        $blog_sidebar = $pkg->getConfig()->get('site_front_end.blog_sidebar.blog_sidebar');
        $blog_columns = $pkg->getConfig()->get('site_front_end.blog_columns.blog_columns');

        $this->set('blog_sidebar', $blog_sidebar);
        $this->set('blog_columns', $blog_columns);

    }

    public function updated()
    {
        $this->set('success', t("Your settings were saved successfully."));
        $this->view();
    }

    public function blog_save_settings()
    {
        if ($this->token->validate("blog_save_settings")) {
            if ($this->isPost()) {
                $blog_sidebar = $this->post('blog_sidebar');
                $blog_columns = $this->post('blog_columns');

                $pkg = Package::getByHandle('modena');

                $pkg->getConfig()->save('site_front_end.blog_sidebar.blog_sidebar', $blog_sidebar);
                $pkg->getConfig()->save('site_front_end.blog_columns.blog_columns', $blog_columns);

                $this->redirect('/dashboard/modena_theme_options/blog_settings','updated');
            }
        } else {
            $this->set('error', array($this->token->getErrorMessage()));
        }
    }
}