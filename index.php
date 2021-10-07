<?php
$x = (int)readline('Enter number:');
$count = 0;
for ($i = 1; $i < $x; $i++) {
    if ($x % $i == 0) {
        $count = $count + $i;
    }
}
if ($x == $count) {
    echo $x . " is a perfect number";
} else {
    echo $x . " is a not perfect number";
}
