has <?php

function weightedrand($min, $max, $gamma) {
    $offset= $max-$min+1;
    return floor($min+pow(lcg_value(), $gamma)*$offset);
}
echo(weightedrand(0, 100000, 1.5));

?> LP.