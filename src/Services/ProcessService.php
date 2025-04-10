<?php

namespace App\Services;

class ProcessService
{
    private $filename;

    public function run()
    {
        $lines = file($this->filename, FILE_IGNORE_NEW_LINES);
        $cases = (int) array_shift($lines);
        $results = [];

        for ($i = 0; $i < $cases; $i++) {
            array_shift($lines);
            $silhouettes = array_map('intval', explode(' ', array_shift($lines)));

            $results[] = (new SilhouetteService())->calc($silhouettes);
        }

        return $results;
    }

    public function setFilename(string $filename)
    {
        $this->filename = $filename;
    }
}
