<?php

$riel = 2103942;
$kyat = 19092;
$corona = 109;
$lek = 9094;

echo "Rieles camboyanos: $riel\n";
echo "Kyats birmanos: $kyat\n";
echo "Coronas noruegas: $corona\n";
echo "Leks albaneses: $lek\n";

$riel_to_usd = 0.00024;
$kyat_to_usd = 0.00048;
$corona_to_usd = 0.094;
$lek_to_usd = 0.010;

$usd_from_riel = $riel * $riel_to_usd;
$usd_from_kyat = $kyat * $kyat_to_usd;
$usd_from_corona = $corona * $corona_to_usd;
$usd_from_lek = $lek * $lek_to_usd;

echo "USD de riel: $usd_from_riel\n";
echo "USD de kyat: $usd_from_kyat\n";
echo "USD de corona: $usd_from_corona\n";
echo "USD de lek: $usd_from_lek\n";

$total_usd = $usd_from_riel + $usd_from_kyat + $usd_from_corona + $usd_from_lek;
$comision = 4;
$final_usd = $total_usd - $comision;

echo "Total en USD antes de comisión: $total_usd\n";
echo "Comisión total: $comision\n";
echo "USD final después de comisión: $final_usd\n";

echo "USD final después de comisión (formateado): " . number_format($final_usd, 2) . "\n";

