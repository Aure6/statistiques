<?php

use Aure\Statistiques\Functions\StandardDeviation;

test('test class standarddeviation', function () {
    $donnees = array(1, 3);

expect(StandardDeviation::calculate($donnees))->toBe(1.0);
});