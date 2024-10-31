<?php
$v =15/100;
$amount = 25000;

$vat = $v*$amount;
echo $vat . "<br>";
echo "Total Amount (including VAT):  = " . $amount + $vat;

?>