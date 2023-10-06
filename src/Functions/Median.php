<?php

namespace Aure\Statistiques\Functions;

class Median
{
    public static function calculate(array $tab): float
    {
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