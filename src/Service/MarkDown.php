<?php

namespace App\Service;

use Symfony\Component\Finder\Finder;

class MarkDown
{
    private Finder $finder;

    public function __construct()
    {
        $this->finder = new Finder();
    }

    public function getMD(?string $patterns, ?string $dir = 'data')
    {
        $file = $this->finder->files()->in($dir)->path($patterns);
        return $file->hasResults() ? $file->name($patterns . '.md') : FALSE;
    }

    public function getAllMD(?string $patterns, ?string $dir = 'data'): Finder
    {
        // sortbydate
        $files = $this->finder->files()->in($dir)->path($patterns);
        return $files->sortByModifiedTime();
    }
}
