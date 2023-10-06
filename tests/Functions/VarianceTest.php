<?php

use Aure\Statistiques\Functions\Variance;

test('test class variance', function () {
    /* $result = sum(2, 3);

    expect($result)->toBe(5); */

    $list = [10, 15, 14, 16, 20];

expect(Variance::calculate($list))->toBe(10.4);
});

