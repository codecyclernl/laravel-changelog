<?php

namespace Codecycler\Changelog;

use Codecycler\Changelog\Http\Livewire\ChangelogFrontend;
use Livewire\Livewire;
use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;
use Codecycler\Changelog\Contracts\ReleaseAdapter;
use Codecycler\Changelog\Filament\Pages\ChangelogPage;
use Codecycler\Changelog\Filament\Widgets\LatestVersion;

class ChangelogServiceProvider extends PluginServiceProvider
{
    public static string $name = 'laravel-changelog';

    public function packageConfigured(Package $package): void
    {
        $this->app->bind(ReleaseAdapter::class, function () {
            $adapter = config('changelog.releaseAdapter');
            return new $adapter;
        });
    }

    public function packageBooted(): void
    {
        Livewire::component('releases-latest-version', LatestVersion::class);
        Livewire::component('latest-version-frontend', ChangelogFrontend::class);
    }

    protected function getPages(): array
    {
        return [
            'changelog' => ChangelogPage::class,
        ];
    }
}
