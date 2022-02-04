<?php

namespace Codecycler\Changelog\Http\Livewire;

use Codecycler\Changelog\Contracts\ReleaseAdapter;
use Livewire\Component;

class ChangelogFrontend extends Component
{
    public $version;

    public function mount(ReleaseAdapter $releaseAdapter)
    {
        $this->version = $releaseAdapter->latest();
    }

    public function render()
    {
        return view('changelog::components.changelogfrontend');
    }
}
