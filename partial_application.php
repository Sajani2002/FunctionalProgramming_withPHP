<?php
    $add = fn($x,$y,$z) => $x + $y + $z;

    $add_partial = fn($x) => fn($y) => fn($z) => $add($x,$y,$z);
    $add_5 = $add_partial(5);
    $add_5_6 = $add_5(6);
    $sum = $add_5_6(7);

    echo $sum ."\n";