<?php

namespace anon\HelloWorld;

use Illuminate\Contracts\Events\Dispatcher;

return function (Dispatcher $events) {
    // echo 'Hello, world!';

    $events->subscribe(Listeners\AddAssets::class);

};
