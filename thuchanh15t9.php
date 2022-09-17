<?php
echo"Cau 21 <br>";
function trinary_Test($n){
$r = $n > 30
? "lon hon 30 <br>"
: ($n > 20
? "lon hon 20 <br>"
: ($n >10
? "lon hon 10 <br>"
: "nho hon 10")); 
echo $n." ".$r."\n";
}
trinary_Test(34);
trinary_Test(28);
trinary_Test(14);
trinary_Test(6);


echo"<br><br> Cau 22 <br>";
$full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  echo $full_url."\n";

echo"<br><br> Cau 23 <br>";
if (version_compare(PHP_VERSION, '6.0.0') >= 0) {
        echo '6.0.0 nho hon phien ban hien tai , my version: ' . PHP_VERSION . "\n";
    }
    else if (version_compare(PHP_VERSION, '5.4.1') >= 0) {
        echo '5.4.1 nho hon phien ban hien tai, my version: ' . PHP_VERSION . "\n";
    }

echo"<br><br> Cau 24 <br>";
echo 'Current script owner: ' . get_current_user()."\n";

echo"<br><br> Cau 25 <br>";
$rd = getenv('DOCUMENT_ROOT');
echo $rd."\n";

echo"<br><br> Cau 26 <br>";
echo php_uname()."\n";
echo PHP_OS."\n";
if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') 
{
    echo 'This is a server using Windows!';
}
 else 
{
    echo 'This is a server not using Windows!'."\n";
}

echo"<br><br> Cau 27 <br>";
//phpcredits(CREDITS_ALL - CREDITS_FULLPAGE);

echo"<br><br> Cau 28 <br>";
$temp_file = tempnam(sys_get_temp_dir(), 'Tux');
echo $temp_file."\n";

echo"<br><br> Cau 29 <br>";
print_r(get_extension_funcs("JSON"));
echo "\n";
print_r(get_extension_funcs("XML"))."\n";

echo"<br><br> Cau 30 <br>";
echo "Last modified: " . date ("F d Y H:i:s.", getlastmod())."\n";

echo"<br><br> Cau 31 <br>";
$a = 29;
$b = 01;
 
echo "The number before swapping is: ";
echo "Number a = ".$a." and b= ".$b;

$temp = $a;
$a = $b;
$b = $temp;
 
echo "<br> The number after swapping is: ";
echo "Number a = ".$a." and b = ".$b."\n";

/*echo"<br><br> Cau 32 <br>";
function armstrong_number($num) {
    $sl = strlen($num);
    $sum = 0;
    $num = (string)$num;
    for ($i = 0; $i < $sl; $i++) {
      $sum = $sum + pow((string)$num{$i},$sl);
    }
    if ((string)$sum == (string)$num) {
      return "True";
    } else {
      return "False";
    }
  }
  echo "Is 153 Armstrong number? ".armstrong_number(153);
  echo "\nIs 21 Armstrong number? ".armstrong_number(21);
  echo "\nIs 4587 Armstrong number? ".armstrong_number(4587);"\n";
*/
echo"<br><br> Cau 33 <br>";
function word_digit($word) {
    $warr = explode(';',$word);
    $result = '';
    foreach($warr as $value){
        switch(trim($value)){
            case 'zero':
                $result .= '0';
                break;
            case 'one':
                $result .= '1';
                break;
            case 'two':
                $result .= '2';
                break;
            case 'three':
                $result .= '3';
                break;
            case 'four':
                $result .= '4';
                break;
            case 'five':
                $result .= '5';
                break;
            case 'six':
                $result .= '6';
                break;
            case 'seven':
                $result .= '7';
                break;
            case 'eight':
                $result .= '8';
                break;
            case 'nine':
                $result .= '9';
                break;    
        }
    }
    return $result;
}

echo word_digit("zero;five")."\n";
echo word_digit("eight;two;seven;nine")."\n";
echo word_digit("two;one;two;five")."\n";

echo"<br><br> Cau 34 <br>";
function test_bit_position($num, $pos1, $pos2) {
    $pos1--;
    $pos2--;
    $bin_num = strrev(decbin($num));
    if ($bin_num[$pos1] == $bin_num[$pos2]) {
      return "true";
    } else {
      return "false";
    }
 }
 echo test_bit_position(112,4,5)."\n";

echo"<br><br> Cau 35 <br>";
function remove_duplicates_list($list1) {
    $nums_unique = array_values(array_unique($list1));
    return $nums_unique ;
  }
  $nums = array(1,1,2,2,3,4,5,5,6,7,7,8,8);
  print_r(remove_duplicates_list($nums));

echo"<br><br> Cau 36 <br>";
function str2_in_str1($str1, $str2) {
    $p_len = strlen($str2);
     $w_len = strlen($str1);
     $w_start = $w_len-$p_len-1;
     if (substr($str1, $w_len-$p_len, $p_len) == $str2) {
        return "true";
     } 
     else 
     {
        return "false";
     }
  }
  echo str2_in_str1("Python","on")."\n";
  echo str2_in_str1("JavaScript","php")."\n";

echo"<br><br> Cau 37 <br>";
$primes = array();
$is_prime_no = false;
for ($i = 2; $i<100; $i++) {
     $is_prime_no = true; 
        for ($j = 2; $j<=($i/2); $j++) {
                if ($i%$j==0) {
                          $is_prime_no = false;
                                  break;
                                }
                   }
        if ($is_prime_no) {
               array_push($primes,$i);
                  }
        if (count($primes)==100) {
               break;
                  }
}
echo array_sum($primes)."\n";

echo"<br><br> Cau 38 <br>";
function valid_email($email)
{
  $result = trim($email);
  if (filter_var($result, FILTER_VALIDATE_EMAIL)) 
  {
    return "true";
  } 
  else 
  {
    echo "false";
  }
}
echo valid_email("manhhung123456@hotmail.com")."\n";
echo valid_email("manhhung*gmail.com")."\n";

/*echo"<br><br> Cau 39 <br>";
$myfile = fopen("/home/students/ppp.txt", "w") or die("Unable to open file!");
$txt = "PHP Exercises\n";
fwrite($myfile, $txt);
$txt = "from\n";
fwrite($myfile, $txt);
$txt = "w3resource\n";
fwrite($myfile, $txt);
fclose($myfile);
echo "Size of the file: ".filesize("/home/students/ppp.txt")."\n";*/

echo"<br><br> Cau 40 <br>";
function without_mod($m, $n)
{
   $divides=(int)($m/$n);
   return $m-$n*$divides;
}
echo without_mod(13, 2)."\n";
echo without_mod(81, 3)."\n";
?>