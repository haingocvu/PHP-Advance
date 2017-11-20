<?php

/*$pattern = '/^[\d]{4}$/'; //\d:kiểm tra là số
$subject = '1234';
if (preg_match($pattern, $subject)){
    echo 'Năm đúng';
}

preg_match("/\d{1,3}(?=(\d{3})+(?!\d))/", 10000000000,$match);
print_r($match);


*/
$p = '/p(hp)*/';
$s = 'aapádhpa';
var_dump(preg_match($p, $s,$match));
echo '<pre>';
print_r($match);
echo '</pre>';


$ip = "as"; // some IP address
$iparr = preg_match("/[^aaa]/", $ip,$a); 
echo '<pre>';
print_r($a);
echo '</pre>';


?>