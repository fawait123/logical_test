<?php

function bagi($a, $b)
{
    $hasil = $a / $b;
    $hasil = floor($hasil);
    return $hasil;
}

echo bagi(7, 2);
