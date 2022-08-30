<table border="1px">
<tr>
<?php
//////////////////////BAI 1
echo "Bài 1:";
for($i = 0; $i < 20; $i ++) {
    for($j = (20 - $i); $j < 20; $j ++) {
        echo "*";
    }
    echo "<br>";
}
echo "<br>";

///////////////////////BAI 3
echo "Bài 3: <br>";
$a = 5;
$b = 0;
$c = 10;

function tinhGiaithua($n) {
    $giai_thua = 1;
    if ($n == 0 || $n == 1) {
        return $giai_thua;
    } else {
        for($i = 2; $i <= $n; $i ++) {
            $giai_thua *= $i;
        }
        return $giai_thua;
    }
}
 
echo ("Giai thừa của " . $a . " là: " . tinhGiaithua ( $a ) . "<br>");
echo ("Giai thừa của " . $b . " là: " . tinhGiaithua ( $b ) . "<br>");
echo ("Giai thừa của " . $c . " là: " . tinhGiaithua ( $c ) . "<br>");
echo "<br>";

/////////////////////BAI 4
echo "Bài 4: <br>";
function isPrimeNumber($n) {
    if ($n < 2) {
        return false;
    }

    $squareRoot = sqrt ( $n );
    for($i = 2; $i <= $squareRoot; $i ++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
 
echo ("Các số nguyên tố nhỏ hơn 50 là: <br>");
for($i = 0; $i < 50; $i ++) {
    if (isPrimeNumber ( $i )) {
        echo ($i . " ");
    }
}
echo "<br><br>";

//////////////////////BAI 2
echo "Bài 2: <br>";
for($i = 1; $i < 10; $i ++) {
    echo "<td>";
    for($j = 1; $j <= 10; $j ++) {
        echo "$i x $j = " . ($i * $j);
        echo "<br>";
    }
    echo "</td>";
}
?>
</tr>
</table>