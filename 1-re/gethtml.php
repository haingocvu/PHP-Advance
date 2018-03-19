<?php
$link = "https://fptshop.com.vn/apple/mac/macbook-pro";
$content	= file_get_contents($link);
    
//echo $contentSite;
//die;

preg_match('/class="fs-carow fsicteapp viewgrid clearfix">(.*)class="watchedpro fs-icate clearfix">/imsU', $content, $matches);

// Image
preg_match_all('/class="fs-ilap-img".*<img src="(.*)".*>/imsU', $matches[0], $image);
//print_r($image[1]);die;
// name
preg_match_all('/class="fs-ilap-name".*<span>(.*)<\/span>/imsU', $matches[0], $name);

// Price
preg_match_all('/class="fs-ilap-pri">(.*)\s*₫<\/p>/imsU', $matches[0], $price);
print_r($price[1]);die;

?>
