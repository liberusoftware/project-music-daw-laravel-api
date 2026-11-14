<?php

use App\Providers\MusicModuleIntegrationProvider;
use Liberu\Foundation\ModuleManager\ModuleManagerServiceProvider;

return [
    \App\Providers\ApiHostServiceProvider::class,
    ModuleManagerServiceProvider::class,
    MusicModuleIntegrationProvider::class,
];
