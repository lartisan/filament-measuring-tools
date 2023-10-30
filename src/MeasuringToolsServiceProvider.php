<?php

namespace Lartisan\MeasuringTools;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class MeasuringToolsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-measuring-tools')
            ->hasViews()
        ;
    }
}