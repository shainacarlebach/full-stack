<?php
require 'calculator.php';

$sum = new calculator(10,20);

echo $sum->add();
echo"<br>";
echo $sum->minus();
echo"<br>";
echo $sum->multiply();
echo"<br>";
echo $sum->divide();
echo"<br>";
echo $sum->modulus();
echo"<br>";
?>
