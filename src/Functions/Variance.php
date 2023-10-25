<?php

namespace Aure\Statistiques\Functions;

class Variance
{
    public static function calculate(array $arr): float
    {
        //vérifier que ce sont tous des nombres dans le tableau
        foreach ($arr as $number) {
            if (!is_numeric($number)) {
                throw new \InvalidArgumentException("All elements must be numeric");
            }
        }

        //vérifie qu'il y a au moins un élément dans le tableau
        //if (empty($numbers)) {
        if (count($arr) === 0) {
            throw new \InvalidArgumentException('Array cannot be empty');
        }

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