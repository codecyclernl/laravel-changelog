<?php

namespace Codecycler\Changelog\Adapters;

use Codecycler\Changelog\Concerns\HasRepo;
use Codecycler\Changelog\Contracts\ReleaseAdapter;
use Github\AuthMethod;
use Github\Client;

class GithubAdapter implements ReleaseAdapter
{
    use HasRepo;

    protected $client;

    public function __construct()
    {
        $this->setRepo(config('changelog.repository'));

        $this->client = new Client();
        $this->client->authenticate(env('RELEASE_GH_API_KEY'), null, AuthMethod::ACCESS_TOKEN);
    }

    public function all()
    {
        return $this->client
            ->api('repo')
            ->releases()
            ->all($this->author, $this->repo);
    }

    public function latest()
    {
        return $this->client
            ->api('repo')
            ->releases()
            ->latest($this->author, $this->repo);
    }

    public function find($tag)
    {
        return $this->client
            ->api('repo')
            ->releases()
            ->tag($this->author, $this->repo, $tag);
    }
}
