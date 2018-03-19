<?php

$data = file_get_contents('http://vnexpress.net/rss/tin-moi-nhat.rss');
$xml = new SimpleXMLElement($data);
print_r($xml);


?>