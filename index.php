<!DOCTYPE html>
<html>
<head>
<title>PHP Store</title>
</head>
<body>

<?php
$name="PHP Store";
$credit=1000;
echo "<h1>Welcome to ".$name."!</h1>";
echo "<h2>You have ".$credit." in your wallet.</h2>";

$products['Computer']=750;
$products['Car']=150000;
$products['iPhone']=1000;
$products['Toaster']=75;

$taxRate=0.0825;

function tax_calc($amount,$tax){
$calculate_tax=$amount*$tax;
$amountWithTax=round($amount+$calculate_tax,2);
return $amountWithTax;
}

foreach($products as $key => $value){
$costWithTax=tax_calc($value,$taxRate);
echo "<p>The ".$key." costs ".$costWithTax." with tax</p>";
}
echo "<h2>Items you can afford</h2>";

foreach($products as $key => $value){
$costWithTax=tax_calc($value,$taxRate);
if($costWithTax <= $credit){
echo "<p>".$key."</p>";
}
}

//$amount=800;
//$taxRate=0.0825;
//$addedTax=$amount*$taxRate;
//echo "<p>".$addedTax."</p>";
//echo tax_Calc(750,0.223);
?>

</body>
</html>