<?php

namespace ProcessWire;

class PwModuleSkeleton extends WireData implements Module
{

    public static function getModuleInfo()
    {
        return [
            'title' => 'PW Module Skeleton',
            'version' => '0.1.0',
            'summary' => 'A basic skeleton for ProcessWire modules',
            'author' => 'Your Name',
            'href' => 'https://yourwebsite.com',
            'icon' => 'cube',
            'autoload' => true,
            'singular' => true,
            'requires' => ['ProcessWire>=3.0.0', 'PHP>=7.0.0'],
            'permissions' => ['pw-module-skeleton' => 'Use PW Module Skeleton'],
            'page' => [
                'name' => 'pw-module-skeleton',
                'parent' => 'setup',
                'title' => 'PW Module Skeleton'
            ],
        ];
    }

    public function init()
    {
        // Add hooks here
        $this->addHook('Page::demoHook', $this, 'demoHookFunction');
    }

    public function install()
    {
        // Perform installation tasks here
    }

    public function uninstall()
    {
        // Perform uninstallation tasks here
    }

    public function demoHookFunction(HookEvent $event)
    {
        $page = $event->object;
        $event->return = "This is a demo hook function for page {$page->title}";
    }

    // Add more custom methods here
}
