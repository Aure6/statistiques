<?php

namespace Aure\Statistiques\Functions;

class StandardDeviation
{
    public static function calculate(array $array): float
    {
        $n = count($array);
    
        if($n == 0) {
            return 0; // évite la division par zéro 
            //Return Type Mismatch: Dans la fonction standardDeviation, vous retournez null si n est égal à 0. Cependant, le type de retour déclaré pour cette fonction est float. Cette incohérence entraînera une erreur.
        }

        $mean = array_sum($array) / $n;
        $sum_of_squares = 0;

        foreach ($array as $value) {
            $sum_of_squares += pow($value - $mean, 2);
        }

        $variance = $sum_of_squares / $n;

        return sqrt($variance);
    }
}