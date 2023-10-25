<?php

namespace Aure\Statistiques\Functions;

class Average
{
    public static function calculate(array $numbers): float
    {
        //vérifier que ce sont tous des nombres dans le tableau
        foreach ($numbers as $number) {
            if (!is_numeric($number)) {
                throw new \InvalidArgumentException("All elements must be numeric");
            }
        }

        //vérifie qu'il y a au moins un élément dans le tableau
        //if (empty($numbers)) {
        if (count($numbers) === 0) {
            throw new \InvalidArgumentException('Array cannot be empty');
        }
        
        //return array_sum($numbers)/count($numbers);
        $sum = array_sum($numbers);
        $count = count($numbers);

        return $sum / $count;
    }
}