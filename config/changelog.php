<?php

return [
    /**
     * The adapter being used by the package to get the releases.
     */
    'releaseAdapter' => \Codecycler\Changelog\Adapters\GithubAdapter::class,

    /**
     * The repository which should be used for release lookup.
     */
    'repository' => 'learnkit-dev/rubricsmaken-site',
];
