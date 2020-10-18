<?php


namespace App\Service;

use Symfony\Component\Finder\Finder;
use Symfony\Component\Yaml\Yaml;

class Yml
{
    private Finder $finder;

    public function __construct()
    {
        $this->finder = new Finder();
    }

    public function getYML(?string $patterns, ?string $dir = 'data')
    {
        $files = $this->finder->in($dir)->name($patterns . '.yaml');
        foreach ($files as $file) {
            if ($file->isReadable()) {
                return Yaml::parse($file->getContents());
            }
        }
        return FALSE;
    }

    public function getAllYML(?string $patterns, ?string $dir = 'data'): Finder
    {
        return $this->finder->in($dir)->name($patterns . '.yaml');
    }
}
