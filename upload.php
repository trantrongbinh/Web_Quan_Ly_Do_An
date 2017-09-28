<?php
include('file.php');
if(isset($_POST['submit'])){
	$doc_name = $_POST['doc_name'];

	$name = $_FILES['myfile']['name'];
	$tmp_name = $_FILES['myfile']['tmp_name'];

	if($name && $doc_name){
		$location ="documents/$name";
		move_uploaded_file($tmp_name, $location);
		$query = mysql_query("INSERT INTO baocao (name,path) VALUES ('$doc_name', '$location') ");
		header('Location:file.php?id_doan=1');

	}else{
		die("Failed Upload");
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Upload Document</title>
</head>
<body>
	<form method="post" action="upload.php?id_doan=1" enctype="multipart/form-data">
		<!-- upload file<input type="file" name="f" /></br>
		name:<input type="text" name="t"></br> -->
		<label>Document Name</label>
		<input type="text" name="doc_name">
		<input type="file" name="myfile">
		</br>
		<input type="submit" name="submitl" value="Upload">
	</form>
	<!-- <a href="upload.php">Add new Document</a> -->
</body>
</html>