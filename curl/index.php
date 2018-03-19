<?php
require './1.php';
function curl_download($url, $saveTo){
    // Mở một file mới với đường dẫn và tên file là tham số $saveTo
    $fp = fopen ($saveTo, 'w+');
     
    // Bắt đầu CURl
    $ch = curl_init($url);
     
    // Thiết lập giả lập trình duyệt
    // nghĩa là giả mạo đang gửi từ trình duyệt nào đó, ở đây tôi dùng Firefox
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0");
     
    // Thiết lập trả kết quả về chứ không print ra
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  
    // Thời gian timeout
    curl_setopt($ch, CURLOPT_TIMEOUT, 1000);
     
    // Lưu kết quả vào file vừa mở
    curl_setopt($ch, CURLOPT_FILE, $fp);
     
    // Thực hiện download file
    $result = curl_exec($ch);
     
    // Đóng CURL
    curl_close($ch);
     
    return $result;
}

function get_img($url) { 

    $nodes = new DOMDocument();
    $nodes->loadHTML('<?xml encoding="utf-8" ?>' . $url);
    $i=0;
    foreach($nodes->getElementsByTagName('img') as $link) { 
        $links[] = [
            'url' => $link->getAttribute('src')
        ];
        $i++;
        if($i==12) break;
    } 
    
    //Return the links 
    return $links; 
}
function get_price($url) { 

    $nodes = new DOMDocument();
    $nodes->loadHTML('<?xml encoding="utf-8" ?>' . $url);
    
    $i=0;
    foreach($nodes->getElementsByTagName('a') as $tag) { 
        if($tag->getAttribute('data-price')>0 && $i%2==0){
            $links[] =[
                'price'=> $tag->getAttribute('data-price'),
                'name' => $tag->getAttribute('title')
            ];
        }
        $i++;
       
    } 
    return $links; 
}
$arrImg = get_img($link);
$arrPrice = get_price($link);
for($i=0;$i<count($arrPrice);$i++){
    $arrPrice[$i]['url'] = $arrImg[$i]['url'];
}

// print_r($arrPrice);
// die;
$type = 1;
$valuesInsert = '';
for($i=0;$i<count($arrPrice);$i++){
    $name = $arrPrice[$i]['name'];
    $price =  $arrPrice[$i]['price'];
    $imageName = explode('/',$arrPrice[$i]['url'])[9];;
    $valuesInsert .= "($type, '$name','$price','$imageName'),";

    //curl_download($arrPrice[$i]['url'], "images/$imageName");
}

$myfile = fopen("result1.php", "w") or die("Unable to open file!");
fwrite($myfile, $valuesInsert);
fclose($myfile);

echo 'successfully';

?>