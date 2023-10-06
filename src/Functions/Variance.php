<?php

namespace Aure\Statistiques\Functions;

class Variance
{
    public static function calculate(array $arr): float
    {
        $n = count($arr);
    
        if($n <= 1) {
            return 0;
        }

        // Calcule la moyenne
        $moyenne = array_sum($arr) / $n;

        // Calcule la somme des carrés des écarts à la moyenne
        $sommeDesCarres = 0;
        foreach ($arr as $valeur) {
            $sommeDesCarres += pow($valeur - $moyenne, 2);
        }

        // Retourne la variance
        return $sommeDesCarres / $n;
    }
}