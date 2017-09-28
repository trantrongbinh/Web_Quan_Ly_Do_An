<?php
include ('controller/c_doan.php');
$c_doan = new C_doan();
$doan = $c_doan->upload();
$baocao = $doan['baocao'];
// print_r($baocao);
$document = (array)$baocao;//ep object ve mang
print_r($document);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		 if($baocao) {
			// $id = $baocao->id;
		 // 	$name = $baocao->name;
		 // 	$path = $baocao->path;
			// $idDA = $baocao->idDA;
			$id = $document['id'];
		 	$name = $document['name'];
		 	$path = $document['path'];
			$idDA = $document['idDA'];
		 }
	?>
</body>
</html>