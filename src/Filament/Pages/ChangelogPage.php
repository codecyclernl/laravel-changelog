<?php

namespace Codecycler\Changelog\Filament\Pages;

use Codecycler\Changelog\Contracts\ReleaseAdapter;
use Filament\Pages\Page;

class ChangelogPage extends Page
{
    protected static ?string $title = 'Changelog';

    protected static ?string $navigationLabel = 'Changelog';

    protected static string $view = 'changelog::pages.changelog';

    public $releases;

    public function mount(ReleaseAdapter $releaseAdapter)
    {
        $this->releases = $releaseAdapter->all();
    }
}
