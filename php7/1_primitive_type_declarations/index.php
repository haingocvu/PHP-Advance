<?php

function parse(string ...$ints){
	echo json_encode($ints,JSON_PRETTY_PRINT);
}

parse('20.33434',20.34,true,20);


?>