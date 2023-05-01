<?php

namespace App\Providers;

use App\Http\Services\UserService;
use App\Http\Services\SchoolService;
use App\Http\Services\SchoolServiceInterface;
use App\Http\Services\UserServiceInterface;
use Illuminate\Support\ServiceProvider;

class BasicServiceProvider extends ServiceProvider
{
    public array $bindings = [
        SchoolServiceInterface::class => SchoolService::class,
        UserServiceInterface::class => UserService::class,
    ];
}
