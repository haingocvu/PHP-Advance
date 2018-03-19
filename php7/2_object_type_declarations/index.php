<?php

/*function parse(array $arr){
	echo json_encode($arr,JSON_PRETTY_PRINT);
}

$arr = ['20.33434',20.34,true,20];

parse($arr);
//parse("Hello");*/

/*function parse(callable $callback){
	echo 'Hello<br>';
	$callback();
}

// $fun = function(){
// 	echo 'This string came from callback function';
// };
parse(function(){
	echo 'This string came from callback function';
})*/

/*interface checker{}

class cake implements checker{}
class fruit implements checker{}

function food (checker $food){
	echo var_dump($food);
}

$f = new fruit;
food($f);
*/


class cake {
	function chocopie(self $thisCake){
		echo var_dump($thisCake);
	}
}

class fruit{}

$cake1 = new cake;
$cake2 = new cake;
$cake1->chocopie($cake2);


?>