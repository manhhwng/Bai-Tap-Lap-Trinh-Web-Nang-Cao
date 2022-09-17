<?php
var_dump($_GET);
echo "<hr/ >";

var_dump($_POST);
echo "<hr/ >";

var_dump($_REQUEST);
echo "<hr/ >";

$a = isset($_POST["a"]) ? (float)trim($_POST["a"]) : '';
$b = isset($_POST["b"]) ? (float)trim($_POST["b"]) : '';
if($a == '' && $b == ''){
    $ketqua = "Bạn chưa nhập số a,b";
}
else if ($a == 0){
    $ketqua = "Số a phải nhập khác 0";
}
else {
    $ketqua = -($b) / $a;
}
?>

<DOCTYPE! html>
<html>
<body>

<h2>GPT Forms</h2>

<form action="" method="POST">
<label for="a">a:</label><br>
<input type="text" id="a" name="a" value=""><br>
<label for="b">b:</label><br>
<input type="text" id="b" name="b" value=""><br>
<input type="submit" value="GPT">
</form>
<div id="ketqua">
    <?=$ketqua?>
</div>
</body>
</html>