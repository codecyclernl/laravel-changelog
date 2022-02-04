<?php

namespace Codecycler\Changelog\Concerns;

trait HasRepo
{
    public $name;

    public $author;

    public $repo;

    public function setRepo($name)
    {
        $this->name = $name;

        $expl = explode('/', $name);

        $this->author = $expl[0];
        $this->repo = $expl[1];
    }
}