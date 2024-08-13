<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\XssSanitization;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        api: __DIR__ . '/../routes/api.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //Registramos el middleware XssSanitization que permitirá sanitizar los formularios de cada campo de entrada de texto.
        $middleware->append(XssSanitization::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
