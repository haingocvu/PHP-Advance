<?php
//Overloading nạp chồng
class A{

    public function __call($methodName,$arguments) {
        if($methodName =="getA"){
            $count = count($arguments);
            if($count==1){
                echo '2423434';
                return  $arguments;
            }
            else{
                return $arguments[1];
            }
        }
    }

    // function getA($a){
    //     return $a;
    // }
    // function getA($a,$b){
    //     return [$a,$b];
    // }
}

$a = new A;
print_r($a->getA(4,9,4,4,5,5));


//hai pt gọi là overloading khi cùng tên, khác nhau về tham số
// ví dụ trên chuyển đổi sang Java hoặc C ++, nó sẽ hoạt động mà không có bất kỳ lỗi nào. Nhưng nếu chúng ta chạy trên php, nó sẽ lỗi "Cannot redeclare A::getA()"
//Fix: using __call
?>