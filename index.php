<?php

use App\Helpers\FileValidatorHelper;
use App\Services\ProcessService;

require_once __DIR__ . '/vendor/autoload.php';

try {
    $filename = __DIR__ . '/file.txt';

    FileValidatorHelper::validate($filename);

    $processService = new ProcessService();
    $processService->setFilename($filename);


    print_r($processService->run());
} catch (\Exception $e)  {
    echo 'Erro: ' . $e->getMessage() . PHP_EOL;
}
