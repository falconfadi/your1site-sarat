<?php

declare(strict_types=1);

use App\Http\Middleware\Admin\AuthAdmin;
use App\Http\Middleware\Admin\GuestAdmin;
use App\Http\Middleware\Localization;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->api(append: [Localization::class]);
        $middleware->web(append: [Localization::class]);
        $middleware->alias([
            'auth.admin' => AuthAdmin::class,
            'guest.admin' => GuestAdmin::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
