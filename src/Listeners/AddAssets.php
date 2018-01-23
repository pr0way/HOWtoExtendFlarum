<?php

namespace anon\HelloWorld\Listeners;

use DirectoryIterator;
use Flarum\Event\ConfigureWebApp;
use Flarum\Event\ConfigureLocales;
use Illuminate\Contracts\Events\Dispatcher;

class AddAssets {

    // Register listeners
    public function subscribe(Dispatcher $events)
    {
        $events->listen(ConfigureWebApp::class, [$this, 'addForumAssets']);
    }

    // Add assets for forum view
    public function addForumAssets(ConfigureWebApp $event)
    {
        if ($event->isForum()) {
            $event->addAssets([
                __DIR__ . '/../../less/forum/hello.less',
                __DIR__ . '/../../js/forum/dist/extension.js'
            ]);

            // Add js scripts / UI
            $event->addBootstrapper('anon/hello-world/main');
        }
    }
    
}