<?php

namespace App\Services;

class SilhouetteService
{

    public function calc(array $silhouettes)
    {
        $high = max($silhouettes);
        $filling = 0;
        $ref = $silhouettes[0];

        foreach ($silhouettes as $idx => $vlx) {
            if ($vlx > $ref) {
                $ref = $vlx;
            } 
            
            if ($high == $ref) {
                $high = max(array_slice($silhouettes, $idx));
                $ref = $high;
            }

            if ($vlx < $ref) {
                $filling += $ref - $vlx;
            }
        }

        return $filling;
    }
}
