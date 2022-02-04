<?php

namespace Codecycler\Changelog\Filament\Widgets;

use Codecycler\Changelog\Contracts\ReleaseAdapter;
use Filament\Widgets\Widget;

class LatestVersion extends Widget
{
    protected static string $view = 'changelog::widgets.latest';

    public $version;

    public function mount(ReleaseAdapter $releaseAdapter)
    {
        $this->version = $releaseAdapter->latest();
    }
}
