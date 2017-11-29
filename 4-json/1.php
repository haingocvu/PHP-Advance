
<?php 
 
    $json2 = '{"firstName" : "Rahul", "lastName" : "Kumar", "email" : "rahul@gmail.com"}';    
    echo "<pre>";
    print_r(json_decode($json2,true));
    echo "</pre>"; 
    //true nghĩa là object trả về sẽ được chuyển thành array
?>  

