<?php
$ping_grezzi[
    45, 120, -1, 32, 210, 85, -1, 18, 95,
    310, 45, 60, -1, 150, 28, 240, 18, 72
];

array_push($ping_grezzi, 55, 190, 12);

$ping_validi = [];

$pacchetti_persi = 0;

foreach ($ping_grezzi as $ping) {

    if ($ping == -1) {
        $pacchetti_persi++;
    } 
    elseif ($ping > 0) {
        $ping_validi[] = $ping;
    }
}

$somma = 0;
$ping_minimo = $ping_validi[0];
$ping_massimo = $ping_validi[0];

$ping_critici = [];

?>

