<?php

namespace Codecycler\Changelog;

use Codecycler\Changelog\Commands\ChangelogCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ChangelogServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-changelog')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-changelog_table')
            ->hasCommand(ChangelogCommand::class);
    }
}
