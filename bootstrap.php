<?php

namespace anon\HelloWorld;

//use Flarum\Foundation\Application;
use Illuminate\Contracts\Events\Dispatcher;

return function (Dispatcher $events) { //literowka dispatcher
    // echo 'Hello, world!';

    $events->subscribe(Listeners\AddAssets::class);

};