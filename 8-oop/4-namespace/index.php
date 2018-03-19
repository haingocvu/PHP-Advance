<?php
include 'namespace2.php';
include 'namespace.php';
use huong\home as home1;
use huong2\another as home2;


$a = new home2\myObj;
echo "<br>";

$b = new home1\myObj;

echo "<br>";
echo home1\hello();
?>