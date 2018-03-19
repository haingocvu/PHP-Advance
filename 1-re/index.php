<?php
$str = "90 Le Thi Rieng";
/**
 * \w
 * \w+
 * \W
 * \W+
 * \s 
 * .
 * \S
 * \d{1,3}
 * \D
 * Le\s\w+\s
 * 
 */

 $str2 = "$100.000";
 /**
  * \$
  * \.
  * \d?
  * \$\d+\.
  * \000?
  * \000*
  * 000$
  * 
  */

// $str3 = "Learning PHP Advance";
// /**
//  * (Learning|Learn|Learner)\s\w*\s
//  * Learn(ing|er){2,4}\s\w+\s
//  */


//  $str4 = "huongnguyenak96@gmail.com";
//  /**
//   * [a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}
//   * [a-zA-Z0-9._-]{3,50}\@[a-zA-Z0-9]{3,20}\.[a-zA-Z]{2,}
//   */

// $str5 = "https://www.facebook.com";
// if(preg_match('/^http(s){0,1}\:\/\/[w+]{3}\.[a-zA-Z]{3,}\.[a-zA-Z]{2,}$/',$str5)){
//     echo "match";
// }
// else echo "don't match";


// $c = preg_match('/^http(s){0,1}\:\/\/[w+]{3}\.[a-zA-Z]{3,}\.[a-zA-Z]{2,}$/',$str5,$match);
// print_r($match);


// $str = "<div>Luôn luôn lắng nghe lâu lâu mới hiểu.</div>";
// preg_match_all('/luôn/i',$str,$match);
// print_r($match); 

$str = '<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">Well never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password 34</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      Check me out
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>';

// preg_match_all('/for="exampleInputPassword1">(.*)<\/label>/u',$str,$match);
// print_r($match); 


// $str = "Tháng 7 có 31 ngày, tháng 8 có 31 ngày,tháng 11 có 31 ngày. ";
// $newStr = preg_replace('/31/',"30",$str,1,$count);
// echo $newStr;
// echo $count; //số từ bị thay thế


// $str = "Tháng 7 có 31 ngày, tháng 8 có 31 ngày,tháng 11 có 31 ngày. ";
// $newStr = preg_replace('/\d{2}/',"30",$str);
// echo $newStr;

function FirstToUpper($str){
  return strtoupper($str[0]);
}

// $str = "khoa pham training";
// $newStr = preg_replace_callback('/\b\w/',"FirstToUpper",$str);
// // \b: biên giới của 1 từ hoặc là bắt đầu 1 từ 
// echo $newStr;


function StartToUpper($str){
  return strtoupper($str[0]);
}
$str = "khoa pham training";
$newStr = preg_replace_callback('/^\b\w/',"StartToUpper",$str);
echo $newStr;
?>