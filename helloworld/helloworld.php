<?php

declare(strict_types=1);


if (!defined('_PS_VERSION_')) {
    exit;
}

class HelloWorld extends Module
{

    public function __construct()
    {
        $this->name = 'helloworld';
        $this->author = 'Rafael Martinez Tomas';
        $this->version = '1.0.0';
        $this->ps_versions_compliancy = ['min' => '1.7.0.0', 'max' => '8.99.99'];

        $this->need_instance = 0;
        $this->bootstrap = true;


        parent::__construct();

        $this->displayName = $this->trans('Hello World', [], 'Modules.Helloworld.Admin');
        $this->description = $this->trans('Just a basic proof of concept', [], 'Modules.Helloworld.Admin');
        $this->confirmUninstall = $this->trans('Are you sure you want to uninstall?', [], 'Modules.Helloworld.Admin');

    }



}
