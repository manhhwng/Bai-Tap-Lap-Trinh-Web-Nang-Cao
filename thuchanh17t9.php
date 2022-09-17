<?php
echo"Câu 41: Viết chương trình PHP để in ra bảng cửu chương 6 * 6  <br>";
for ($i = 1; $i < 7; $i++) {
    for ($j = 1; $j < 7; $j++) {
       if ($j == 1) {
         echo str_pad($i*$j, 2, " ", STR_PAD_LEFT);
       } else {
         echo str_pad($i*$j, 4, " ", STR_PAD_LEFT);
       }
    }
    echo "<br>";
}

echo"<br><br> Câu 42: Viết một chương trình PHP để tìm ký tự không lặp lại đầu tiên trong một chuỗi đã cho. <br>";
function find_non_repeat($word) {
    $chr = null;
    for ($i = 0; $i <= strlen($word); $i++) {
       if (substr_count($word, substr($word, $i, 1)) == 1) {
          return substr($word, $i, 1);
       }
    }
  }
  
  echo find_non_repeat("Green")."\n";
  echo find_non_repeat("abcdea")."\n";

echo"<br><br> Câu 43: Viết chương trình PHP nhân các phần tử tương ứng của hai danh sách đã cho <br>";
function multiply_two_lists($x, $y)
  {
    $a = explode(' ',trim($x));
    $b = explode(' ',trim($y));
    foreach($a as $key=>$value){
        $output[$key] = $a[$key]*$b[$key];
    }
    return implode(' ',$output);
}
echo multiply_two_lists(("10 12 3"), ("1 3 3"))."\n";

echo"<br><br> Câu 44: Viết chương trình PHP để in ra tổng các cặp số của một dãy số nguyên dương đã được sắp xếp bằng một số đã cho <br>";
function find_Pairs($nums, $pair_sum) {
    $nums_pairs = "";
    for ($i = 0; $i <= count($nums); $i++) {
       for ($j = $i + 1; $j < count($nums); $j++) {
          if ($nums[$i] + $nums[$j] == (int)$pair_sum) {
             $nums_pairs .= $nums[$i] . "," . $nums[$j] . ";";
          }
       }
    }
    return $nums_pairs;
  }
  $nums = array(0,1,2,3,4,5,6);
  echo find_Pairs($nums, 7)."\n";
  echo find_Pairs($nums, 5)."\n";

echo"<br><br> Câu 45: Viết một chương trình PHP để tính tổng các chữ số của một số <br>";
function sum_of_digits($nums) {
    $digits_sum = 0;
      for ($i = 0; $i < strlen($nums); $i++) {
             $digits_sum += $nums[$i];
               }
      return $digits_sum;
}
echo sum_of_digits("12345")."\n";
echo sum_of_digits("9999")."\n";

echo"<br><br> Câu 46: Viết một chương trình PHP để tìm chiều cao của ba tòa nhà trên cùng theo thứ tự giảm dần từ tám tòa nhà đã cho <br>";
$heights = array();
  while($line = fgets(STDIN)) {
    rtrim($line, "\n");
    array_push($heights, (int)$line);
  }
  rsort($heights);
  print("Heights of the top three buildings:\n");
  echo $heights[0]."\n";
  echo $heights[1]."\n";
  echo $heights[2]."\n";

echo"<br><br> Câu 47: Viết một chương trình PHP để tính số chữ số của tổng của hai số nguyên đã cho <br>";
while(true) {
    $inputs = explode(' ', trim(fgets(STDIN))); 
    if (!is_array($inputs) || count($inputs) < 2) {
        exit;
    } 
    $a = $inputs[0];
    $b = $inputs[1]; 
    $d = numDigits($a + $b);
    echo("Digit number of sum of two given integers: ");
    echo $d . "\n";
} 
function numDigits($n) {
    return (int)(log10($n) + 1);
}

echo"<br><br> Câu 48: Viết chương trình PHP để kiểm tra xem ba độ dài (số nguyên) ba cạnh cho trước có tạo thành tam giác vuông hay không. In 'Có' nếu các cạnh cho trước tạo thành tam giác vuông, nếu không thì in 'Không'. <br>";
$a = 5;
$b = 3;
$c = 4;
$a *= $a;
$b *= $b;
$c *= $c;
if($a + $b == $c || $a + $c == $b || $b + $c == $a){
    echo "YES\n";
}
else
{
    echo "NO\n";
}

echo"<br><br> Câu 49: Viết một chương trình PHP giải phương trình <br>";
function to_f($e) {
    return (float)$e;
  } 
  while($line = fgets(STDIN)) {
    $a = explode(" ", $line);
    $a = array_map("to_f", $a);
    $x = ($a[2]*$a[4]-$a[1]*$a[5])/($a[0]*$a[4]-$a[3]*$a[1]);
    $y = ($a[2]*$a[3]-$a[0]*$a[5])/($a[1]*$a[3]-$a[0]*$a[4]);
    print("Values of x and y:\n");
    printf("%.3f %.3f\n", $x, $y);
}

echo"<br><br> Câu 50: Viết một chương trình PHP để tính số nợ trong n tháng. Số tiền vay là 100.000 đô la và khoản vay cộng thêm 5% lãi suất của khoản nợ và làm tròn đến 1.000 ở trên theo tháng. <br>";
fscanf(STDIN, '%d', $n);
$debt = 100000;
 
for($i=0; $i<$n; $i++){
  $debt = ceil(($debt * 1.05)/1000) * 1000;
}
echo "\nAmount of debt: ";
echo $debt. PHP_EOL;

echo"<br><br> Câu 51: Viết một chương trình PHP đọc một số nguyên n và tìm số kết hợp của a, b, c và d (0 ≤ a, b, c, d ≤ 9) trong đó (a + b + c + d) sẽ bằng N. <br>";
while (($input = trim(fgets(STDIN))) !== '') {
    $input = intval($input);
    $count = 0;
    for ($i=0; $i < 10; $i++) { 
        for ($j=0; $j < 10; $j++) { 
            for ($k=0; $k < 10; $k++) { 
                for ($l=0; $l < 10; $l++) { 
                    if ($i + $j + $k +$l === $input) {
                        $count++;
                    }
                }
            }
        }
    }
    echo "\nNumber of combinations of a,b,c and d: ";
    echo $count."\n";
}

echo"<br><br> Câu 52: Viết chương trình PHP để in ra một số các số nguyên tố nhỏ hơn hoặc bằng một số nguyên cho trước. <br>";
$a = array_fill(0, 1000000, true);
$a[0] = $a[1] = false;
 
for($i = 2; $i * $i < 1000000; $i++){
    if(!$a[$i]) continue;
    for($j = $i * $i; $j < 1000000; $j += $i){
        $a[$j] = false;
    }
}
 
$sum = array_fill(0, 1000000, 0);
 
for($i = 1; $i < 1000000; $i++){
    $sum[$i] += $sum[$i - 1];
    if($a[$i]) $sum[$i]++;
}
 
while(fscanf(STDIN, "%d", $n)){
    echo "Number of prime numbers which are less than or equal to n: ";
    echo $sum[$n] . "\n";
}

echo"<br><br> Câu 53: Viết chương trình PHP để tính bán kính và tọa độ trọng tâm (x, y) của một đường tròn được tạo bởi ba điểm cho trước trên mặt phẳng <br>";
$x1 = 0; $y1 = 0; $x2 = 2; $y2 = 0; $x3 = 2; $y3 = 2;
 $a1 = 2 * ($x2 - $x1);
 $b1 = 2 * ($y2 - $y1);
 $c1 = $x1 * $x1 - $x2 * $x2 + $y1 *$y1 - $y2 * $y2;
 $a2 = 2 * ($x3 - $x1);
 $b2 = 2 * ($y3 - $y1);
 $c2 = $x1 * $x1 - $x3 * $x3 + $y1 *$y1 - $y3 * $y3;
 $x = ($b1 * $c2 - $b2 * $c1) / ($a1 * $b2 - $a2 * $b1);
 $y = ($c1 * $a2 - $c2 * $a1) / ($a1 * $b2 - $a2 * $b1);
 $r = sqrt(($x - $x1) * ($x - $x1) + ($y - $y1) * ($y - $y1));
 printf("Central coordinate(x,y) and radius of the circle:\n");
 printf("(%.3f %.3f) %.3f\n", $x, $y, $r);
 
echo"<br><br> Câu 54: Viết một chương trình PHP để tính và in ra tổng của hai số nguyên đã cho (lớn hơn hoặc bằng 0). Nếu số nguyên đã cho hoặc tổng có nhiều hơn 80 chữ số, hãy in 'tràn' <br>";
fscanf(STDIN, '%d', $N);
for ($i = 0; $i < $N; $i++) {
    fscanf(STDIN, '%s', $a);
    fscanf(STDIN, '%s', $b);
    if (max(strlen($a), strlen($b)) > 80) {
        echo "overflow\n";
        continue;
    }
    $arr = array_fill(0, 81, 0);
    $a = sprintf('%081s', $a);
    $b = sprintf('%081s', $b);
    for ($j = 80; $j > 0; $j--) {
        $n = $arr[$j] + $a[$j] + $b[$j];
        if ($n >= 10) {
            $arr[$j] = substr($n, 1);
            $arr[$j - 1] += 1;
        } else {
            $arr[$j] = $n;
        }
    }
    $result = preg_replace('/^0+(\d+)$/', '$1', implode('', $arr));
    if (strlen($result) > 80) {
        echo "overflow\n";
    } else {
        echo $result, PHP_EOL;
    }
}

echo"<br><br> Câu 55: Viết một chương trình PHP chấp nhận sáu số làm đầu vào và sắp xếp chúng theo thứ tự giảm dần <br>";
$stdin = trim(fgets(STDIN));
$nums = explode(" ", $stdin);
rsort($nums);
print("After sorting the said integers:\n");
echo implode(' ', $nums);

echo"<br><br> Câu 56: Viết chương trình PHP để kiểm tra xem hai đường thẳng PQ và RS có song song với nhau hay không. <br>";
fscanf(STDIN, '%d', $n); 
for ($i = 0; $i < $n; $i++) {
    fscanf(STDIN, '%f %f %f %f %f %f %f %f', $x1, $y1, $x2, $y2, $x3, $y3, $x4, $y4);
    $pq = INF;
    if ($x2 - $x1 !== 0.0) {
        $pq = ($y2 - $y1) / ($x2 - $x1);
    }
    $rs = INF;
    if ($x4 - $x3 !== 0.0) {
        $rs = ($y4 - $y3) / ($x4 - $x3);
    } 
    echo $pq === $rs ? 'PQ and RS are parallel.' : 'PQ and RS are not parallel.';
    echo PHP_EOL;
}

echo"<br><br> Câu 57: Viết chương trình PHP để tìm tổng lớn nhất của dãy con liền kề từ một dãy số a1, a2, a3, ... an đã cho. Một dãy con của một phần tử cũng là một dãy con liên tục <br>";
while($line = fgets(STDIN)){
	$n = intval($line);
	if($n == 0){
		break;
	}	
	$arr = array();
	$max_val = array();
	for($i = 0; $i < $n; $i++){
		$x = intval(fgets(STDIN));
		$arr[$i] = 0;
		$max_val[$i] = -1000000;
		for($j = 0; $j <= $i; $j++){
			$arr[$j] += $x;
			if($max_val[$j] < $arr[$j]){
				$max_val[$j] = $arr[$j];
			}
		}
	}
	
	echo max($max_val)."\n";
}

echo"<br><br> Câu 58: Có hai đường tròn C1 với bán kính r1, tọa độ trung tâm (x1, y1) và C2 với bán kính r2 và tọa độ trung tâm (x2, y2)
Viết một chương trình PHP để kiểm tra những điều sau -
'C2 ở C1' nếu C2 ở C1
' C1 nằm trong C2 ' nếu C1 nằm trong C2
' Chu vi C1 và C2 cắt nhau ' nếu chu vi C1 và C2 cắt nhau và 'C1 và C2 không trùng nhau' nếu C1 và C2 không trùng nhau. <br>";
$n = intval(fgets(STDIN));
for($i = 0; $i < $n; $i++){
    fscanf(STDIN, "%lf %lf %lf %lf %lf %lf", $xa, $ya, $ra, $xb, $yb, $rb);
     
    $r = sqrt(($xb - $xa)*($xb - $xa) + ($yb - $ya)*($yb - $ya));
    if($r + $ra < $rb){
        echo "C1  is in C2\n";
        continue;
    }
    if($r + $rb < $ra){
        echo "C2  is in C1.\n";
        continue;
    }
     
    if($r <= $ra + $rb){
        echo "Circumference of C1  and C2  intersect.";
        continue;
    }
    echo "C1 and C2 do not overlap.\n";
}

echo"<br><br> Câu 59: Viết một chương trình PHP để đọc một ngày (từ 2004/1/1 đến 2004/12/31) và in ngày của ngày đó. Ngày 1 tháng 1 năm 2004, là Thứ Sáu. Lưu ý rằng năm 2004 là một năm nhuận.
Hai số nguyên m và d cách nhau một khoảng trắng trên dòng, m, d biểu thị tháng và ngày. <br>";
$days = explode(',', '0,31,60,91,121,152,182,213,244,274,305,335');
$format = explode(',', 'Wednesday,Thursday,Friday,Saturday,Sunday,Monday,Tuesday');
while (($line = trim(fgets(STDIN))) !== '') {
    sscanf($line, '%d %d', $m, $d);
    if ($m === 0) {
        break;
    }
    $n = $days[$m - 1] + $d;
    $today = $format[$n % 7];
    echo "The day is: ".$today, PHP_EOL;
}

echo"<br><br> Câu 60: Viết một chương trình PHP để in các giá trị chế độ từ một dãy số nguyên cho trước. Giá trị chế độ là yếu tố xảy ra thường xuyên nhất. Nếu có một số giá trị chế độ, hãy in chúng theo thứ tự tăng dần <br>";
$hoge=array();
while($hoge[]=trim(fgets(STDIN))){}
$hage=array_count_values($hoge);
$max = max($hage);
$koge= array_keys($hage,$max);
echo "Mode values (in ascending order):\n";
sort($koge,SORT_ASC);
foreach ($koge as $val) {
    echo $val.PHP_EOL;
}
?>
