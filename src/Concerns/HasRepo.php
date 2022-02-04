<?php

namespace Codecycler\Changelog\Concerns;

trait HasRepo
{
    public string $name;

    public string $author;

    public string $repo;

    public function setRepo($name): void
    {
        $this->name = $name;

        $expl = explode('/', $name);

        $this->author = $expl[0];
        $this->repo = $expl[1];
    }
}
