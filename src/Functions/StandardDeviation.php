<?php

namespace Aure\Statistiques\Functions;

class StandardDeviation
{
    public static function calculate(array $array): float
    {
        $n = count($array);
    
        /* if($n == 0) {
            return 0; // évite la division par zéro 
            //Return Type Mismatch: Dans la fonction standardDeviation, vous retournez null si n est égal à 0. Cependant, le type de retour déclaré pour cette fonction est float. Cette incohérence entraînera une erreur.
        } */

        //vérifier que ce sont tous des nombres dans le tableau
        foreach ($array as $number) {
            if (!is_numeric($number)) {
                throw new \InvalidArgumentException("All elements must be numeric");
            }
        }

        //vérifie qu'il y a au moins un élément dans le tableau
        //if (empty($numbers)) {
        if (count($array) === 0) {
            throw new \InvalidArgumentException('Array cannot be empty');
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