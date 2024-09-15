<?php

use App\Http\Middleware\ValidUser;
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
        $middleware->alias([
            'IsValidUser' => ValidUser::class,
        ]);   
        //renaming the middleware now we can use only IsValidUser

        // $middleware->appendToGroup('ok-user',[
        //     ValidUser::class,
        //     // TestUser::class
        // ]);   //we can use the Ok-use middleware which is group wise

        // $middleware->append(Testuser::class);  //no need to set middleware on routes this will set to the all routes
        
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
