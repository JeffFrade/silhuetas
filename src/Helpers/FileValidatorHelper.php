<?php

namespace App\Helpers;

use App\Exceptions\FileInvalidException;

class FileValidatorHelper
{
    public static function validate(string $path = '')
    {
        if (empty($path)) {
            throw new FileInvalidException('Caminho de arquivo vazio.');
        }

        $lines = file($path, FILE_IGNORE_NEW_LINES);
        if (!$lines || !is_numeric($lines[0])) {
            throw new FileInvalidException('Arquivo inválido (Arquivo vazio).');
        }

        $numCases = (int) array_shift($lines);
        if ($numCases < 1 || $numCases > 100) {
            throw new FileInvalidException('Arquivo inválido (Número de casos inferior a 1 ou superior a 100).');
        }
    }
}
