<?php

namespace Codecycler\Changelog;

use Codecycler\Changelog\Contracts\ReleaseAdapter;
use Codecycler\Changelog\Filament\Pages\ChangelogPage;
use Codecycler\Changelog\Filament\Widgets\LatestVersion;
use Codecycler\Changelog\Http\Livewire\ChangelogFrontend;
use Filament\PluginServiceProvider;
use Livewire\Livewire;
use Spatie\LaravelPackageTools\Package;

class ChangelogServiceProvider extends PluginServiceProvider
{
    public static string $name = 'laravel-changelog';

    public function packageConfigured(Package $package): void
    {
        $this->app->bind(ReleaseAdapter::class, function () {
            $adapter = config('changelog.releaseAdapter');

            return new $adapter();
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
