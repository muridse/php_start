<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>
<?php
echo "<H1>Vanilla page</H1>";
echo "Cегодня: " . date('d.m.y') . "<br>"; //Односрочное комментирование
/*
Многострочное комментирование
*/
//Переменные
$var = 10;
echo '$var = ';
echo "$var<br>";
//Массивы
$arr = array(rand(1,$var),rand(1,$var),rand(1,$var),rand(1,$var));
echo "4 rundom nubbers: "."$arr[0] "."$arr[1] "."$arr[2] "."$arr[3] ";
//Многомерные массивы
$arr_v2 = array(
	1 => array(2,2,8),
	"Name" => "<br>Mike",
	"Age" => 19
);
echo $arr_v2["Name"];
//Мат операции
/* + - * /  % */

//Условные операторы if,for,while,foreach (==,!=,>=,<=)
echo "<br>if:  ";
$weather = "good";
if($weather == "good"){
	echo "I think weather is good";
}
else{
	echo "<br>I think weather isn't good";
}

echo "<br>for:  ";
for($i = 0;$i<10;$i++){
	echo "$i ";
}
if($i == 10){echo " It's 10th iteration!";}

echo "<br>while:  ";
while ($a < 10) {
	$a *= $a;
	$a++;
	echo "$a ";
}

echo "<br>foreach:  <br>";
$names = array(
	"Max",
	"Leo",
	"Kate",
	"Mike"
);
foreach ($names as $name) {
	echo "$name<br>";
}
?>
</body>
</html>
