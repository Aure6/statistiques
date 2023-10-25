<?php

namespace Aure\Statistiques\Functions;

class Median
{
    public static function calculate(array $tab): float
    {
        //vérifier que ce sont tous des nombres dans le tableau
        foreach ($tab as $number) {
            if (!is_numeric($number)) {
                throw new \InvalidArgumentException("All elements must be numeric");
            }
        }

        //vérifie qu'il y a au moins un élément dans le tableau
        //if (empty($numbers)) {
        if (count($tab) === 0) {
            throw new \InvalidArgumentException('Array cannot be empty');
        }

      // Tri du tableau
    sort($tab);

    $nbNombres = count($tab);
    
    // Si le nombre de données est impair
    if ($nbNombres % 2) {
        return $tab[floor($nbNombres / 2)];
    } else {
        // Si le nombre de données est pair
        $valeurMilieu1 = $tab[($nbNombres / 2) - 1];
        $valeurMilieu2 = $tab[$nbNombres / 2];
        return ($valeurMilieu1 + $valeurMilieu2) / 2;
    }
    }
}