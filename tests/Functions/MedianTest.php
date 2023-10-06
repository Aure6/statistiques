<?php

use Aure\Statistiques\Functions\Median;

test('test class median', function () {
    /* $result = sum(2, 3);

    expect($result)->toBe(5); */

    $list = [1,3,5];

expect(Median::calculate($list))->toBe(3.0);
});

