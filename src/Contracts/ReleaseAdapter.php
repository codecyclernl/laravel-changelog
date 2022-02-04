<?php

namespace Codecycler\Changelog\Contracts;

interface ReleaseAdapter
{
    public function all();

    public function find(string $tag);

    public function latest();
}
