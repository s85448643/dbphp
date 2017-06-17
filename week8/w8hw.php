<?php
	$Link=@mysqli_connect(
		'localhost',
		'root',
		'start5566b',
		'php2017'
	);
	if($Link){
		echo "DB connected";
	}else{
		echo "DB connection failed<br>";
	}
	$uname=$_GET["uname"];
	$opwd=$_GET["opwd"];
	$name=$_GET["name"];
	$phone=$_GET["phone"];
	$gender=$_GET["gender"];
	$music=$_GET["music"];
	$list=$_GET["list"];
	$word=$_POST['word'];
	$sql="INSERT INTO w8hw (uname,opwd,name,phone,gender,music,list,word) VALUES('$uname','$opwd','$name','$phone','$gender','$music','$list','$word')";
	$result=mysqli_query($Link,$sql);
	$result=mysqli_query($Link,"SELECT*FROM w8hw");
	echo"<table border=1>";
	while($row=mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>";
		echo $row["uname"];
		echo "</td><td>";
		echo $row["opwd"];
		echo "</td><td>";
		echo $row["name"];
		echo "</td><td>";
		echo $row["phone"];
		echo "</td><td>";
		echo $row["gender"];
		echo "</td><td>";
		echo $row["music"];
		echo "</td><td>";
		echo $row["list"];
		echo "</td><td>";
		echo $row["word"];
		echo "</td></tr>";
	
	}
	echo"</table>";
	mysqli_close($Link);
?>