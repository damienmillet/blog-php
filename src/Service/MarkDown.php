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
        $files = $this->finder->files()->in($dir)->path($patterns);
        if ($files->hasResults()) {
            foreach ($files as $file) {
                $res = $file;
            }
        }
        return $res ?? FALSE;
    }

    public function getAllMD(?string $dir = 'data'): Finder
    {
        $files = $this->finder->files()->in($dir)->path('');
        return $files->sortByModifiedTime()->reverseSorting();
    }
}
