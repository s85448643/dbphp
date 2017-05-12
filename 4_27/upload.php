<?php
	echo '<meta charset="utf-8">';
	$number=$_GET["number"];
	echo "你要上傳的檔案數量為:".$number."個<br>";
	echo '<form action="" method="post" enctype="multipart/form-data"><br>';
	for ($i=0;$i<$number;$i++) {
		echo '<input type="file" name="upload[]">'."<br>";			
	}
	echo '<input type="submit" name="upload "value="上傳"><br>';
	echo '</form>';
	$number=$_GET["number"];
	if(isset($_FILES["upload"])){
		for($i=0;$i<$number;$i++){
			$name=$_FILES["upload"]["name"][$i];
			$tmp=$_FILES["upload"]["tmp_name"][$i];
			if(!empty($name)){
				copy($tmp,$name);
				echo "檔案上傳成功<br>";
			}else{
				echo "檔案上傳失敗";
			}
		}
	}
?>
