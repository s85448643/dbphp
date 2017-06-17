<?php

$uname=$_GET["uname"];
$opwd=$_GET["opwd"];
$name=$_GET["name"];
$phone=$_GET["phone"];
$gender=$_GET["gender"];
$music=$_GET["music"];
$list=$_GET["list"];
$word=$_POST['word'];



echo "帳號是:".$uname."<br>";
echo "密碼是:".$opwd."<br>";
echo "姓名是:".$name."<br>";

if(is_numeric($phone)){
		echo $phone."<br>";
	}else{
		echo "please type numbers<br>,請回上一頁重新輸入";
		echo "<a href='a1043303.html'>back</a><br>";
	}

if($gender=="male"){
	echo "性別為男生";
}else{
	echo "性別為女生";
}

if($music=="jazz"){
	echo "興趣是爵士樂";
}else if ($music=="elc") {
	echo "興趣是電音樂";
}else if ($music=="chinese") {
	echo "興趣是中國古典樂";
}else if ($music=="blue") {
	echo "興趣是藍調樂";
}else if ($music=="fashion"){
	echo "興趣是流行樂";
}

if($list=="Taipei"){
	echo "地區是台北";
}else if($list=="New Taipei"){
	echo "地區是新北";
}else if($list=="Taichung"){
	echo "地區是台中";
}else if($list=="Kaoshiung"){
	echo "地區是高雄";
}


echo "給製作單位的建議是：".$word."<br>";


echo "<br>";
?>


