<?php

//Variables
$Item = "Ballpen";
$Quantity = 10;
$PriceItem = 20;                                                        
$FixedDis = 0.1; 
$CustoPaid = 300;

//Computations
$Total = $Quantity * $PriceItem;
$Discount = $FixedDis * $Total;
$DisTotal = $Total - $Discount;
$Change = $CustoPaid - $DisTotal;

//Output
echo "----------------------------------";
echo "<br><b>Purchase Summary</b>";
echo "<br>----------------------------------";
echo "<br>Item: ". $Item;
echo "<br>Quantity: ". $Quantity;
echo "<br>Price per item:₱ ". $PriceItem;
echo "<br>Total before discount:₱ ". $Total;
echo "<br>Discount(10%):₱ ". $Discount;
echo "<br>Total after discount: ". $DisTotal;
echo "<br>Amount paid:". $CustoPaid;
echo "<br>Change:₱ ". $Change;
echo "<br>----------------------------------"; 

?>