<?php

use Aure\Statistiques\Functions\Average;

test('test class average', function () {
    /* $result = sum(2, 3);

    expect($result)->toBe(5); */

    $list = [10, 15, 14, 16, 20];

expect(Average::calculate($list))->toBe(15.0);
});

