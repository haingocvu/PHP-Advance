<?php
require '1.php';

        
    function stripUnicode($str){
        if(!$str) return false;
        $unicode = array(
            'a' => 'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ',
            'A' => 'Á|À|Ả|Ã|Ạ|Ă|Á|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'd' => 'đ',
            'D' => 'Đ',
            'e' => 'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
            'E' => 'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'i' => 'í|ì|ỉ|ĩ|ị',
            'I' => 'Í|Ì|Ỉ|Ĩ|Ị',
            'o' => 'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
            'O' => 'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'u' => 'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
            'U' => 'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
            'y' => 'ý|ỳ|ỷ|ỹ|ỵ',
            'Y' => 'Ý|Ỳ|Ỷ|Ỹ|Ỵ'
        );
        foreach($unicode as $khongdau=>$codau){
            $arr = explode("|", $codau);
            $str = str_replace($arr,$khongdau,$str);
        }
        return $str;
    }
    function changeTitle($str){
        $str = trim($str);
        if($str=="") return "";
        $str = str_replace('"', '', $str);
        $str = str_replace("'", '', $str);
        $str = str_replace(".", '', $str);
        $str = str_replace("!", '', $str);
        $str = str_replace("/", '', $str);
        $str = stripUnicode($str);
        $str = mb_convert_case($str, MB_CASE_LOWER,'utf-8');
        $str = str_replace(' ', '-', $str);
        return $str;
    }
function curl_download($url, $saveTo){
    $url = explode('?t=',$url)[0];
    // Mở một file mới với đường dẫn và tên file là tham số $saveTo
    $fp = fopen ($saveTo, 'w+');
     
    // Bắt đầu CURl
    $ch = curl_init($url);
     
    // Thiết lập giả lập trình duyệt
    // nghĩa là giả mạo đang gửi từ trình duyệt nào đó, ở đây tôi dùng Firefox
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0");
     
    // Thiết lập trả kết quả về chứ không print ra
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    // Thời gian timeout
    curl_setopt($ch, CURLOPT_TIMEOUT, 100000);
     
    // Lưu kết quả vào file vừa mở
    curl_setopt($ch, CURLOPT_FILE, $fp);
     
    // Thực hiện download file
    $result = curl_exec($ch);
     
    // Đóng CURL
    curl_close($ch);
     
    return $result;
}

function getImage($url) { 

    $nodes = new DOMDocument();
    $nodes->loadHTML('<?xml encoding="utf-8" ?>' . $url);
    foreach($nodes->getElementsByTagName('img') as $link) { 
        $links[] = [
            'url' => $link->getAttribute('src')
        ];
    } 
    //Return the links 
    return $links; 
}


function getPrice($classname, $url) { 
    $dom = new DomDocument();
    $dom->loadHTML('<?xml encoding="utf-8" ?>' . $url);
    $finder = new DomXPath($dom);
    $nodes = $finder->query("//*[contains(concat(' ', normalize-space(@class), ' '), ' $classname ')]");
    foreach($nodes as $link) { 
        $links[] = [
            'price' => str_replace(".", "", substr($link->textContent,0,-4))
        ];
    } 
    return $links; 
}

function getName($classname, $url) { 
    $dom = new DomDocument();
    $dom->loadHTML('<?xml encoding="utf-8" ?>' . $url);
    $finder = new DomXPath($dom);
    $nodes = $finder->query("//*[contains(concat(' ', normalize-space(@class), ' '), ' $classname ')]");
    foreach($nodes as $link) { 
        $links[] = [
            'name' => $link->textContent
        ];
    } 
    return $links; 
}


$arrImg = getImage($link);
$arrPrice = getPrice('ty-price',$link);
$arrName = getName('product-title',$link);
$arrDetail = getName('fs-lpil-tskt',$link);
$arrPromotion = getName('fs-ilap-ch',$link);
for($i=0;$i<count($arrPrice);$i++){
    $arrPrice[$i]['image'] = $arrImg[$i]['url'];
    $arrPrice[$i]['name'] = $arrName[$i]['name'];
    $arrPrice[$i]['detail'] = $arrDetail[$i]['name'];
    $arrPrice[$i]['promotion'] = $arrPromotion[$i]['name'];
}
// echo "<pre>";
// print_r($arrPrice);
// die;

require 'connect.php';
$db = new DBConnect;

$type = 16;
foreach($arrName as $i=>$name){
    $alias =  changeTitle($name['name']);
    $query = "INSERT INTO page_url(url) VALUES('$alias')";
    $result = $db->executeQuery($query);
    $id_url = $db->getLastId();

    $name = trim($arrPrice[$i]['name']);
    $price =  $arrPrice[$i]['price'];
    $imageName = $alias.'.png';
    // $detail = trim($arrPrice[$i]['detail']);
    // $promotion = trim($arrPrice[$i]['promotion']);

    $detail = '- Bộ xử lý CPU: 3.7 GHz Intel Xeon E5 Quad-Core
    - RAM: 16GB
    - Lưu trữ SSD: 256GB PCIe-based Flash Storage (Option)
    - Đồ họa: Dual AMD FirePro D300 GPUs (2 x 2GB)
    - 6 cổng Thunderbolt 2
    - 4 cổng USB 3.0, 1 cổng HDMI 1.4
    - 802.11a/b/g/n/ac Wi-Fi, Bluetooth 4.0
    - Thiết kế độc đáo, nhỏ gọn
    - Hệ điều hành: Mac OS X 10.10 or 10.11';

    $promotion = '';

    $query = "INSERT INTO products(id_type,id_url,name,detail,promotion,price,image,update_at) 
              VALUES($type,$id_url,'$name','$detail','$promotion',$price,'$imageName','2018-02-16')";
    $result = $db->executeQuery($query);

    curl_download($arrPrice[$i]['image'], "images/$imageName");
}


// $myfile = fopen("result.php", "w") or die("Unable to open file!");
// fwrite($myfile, $valuesInsert);
// fclose($myfile);

echo 'successfully';
