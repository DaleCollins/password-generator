<?php

namespace DaleCollins\PasswordGenerator;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use DaleCollins\PasswordGenerator\Commands\PasswordGeneratorCommand;

class PasswordGeneratorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('password-generator')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_password-generator_table')
            ->hasCommand(PasswordGeneratorCommand::class);
    }
}
