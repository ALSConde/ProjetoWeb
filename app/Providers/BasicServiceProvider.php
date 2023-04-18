<?php

namespace App\Providers;

use App\Http\Services\BasicAbstractService;
use App\Http\Services\BasicServiceInterface;
use App\Http\Services\SchoolService;
use Illuminate\Support\ServiceProvider;

class BasicServiceProvider extends ServiceProvider
{
    public array $bindings = [
        BasicServiceInterface::class => SchoolService::class,
    ];
}
