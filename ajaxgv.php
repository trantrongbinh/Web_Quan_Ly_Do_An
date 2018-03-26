<?php
include('model/database.class.php');
include('model/class.giangvien.php');

$idBM = $_GET['idBM'];
$giangvien = new giangvien();
$dsgv = $giangvien->layGVByIdBM($idBM);
?>
<option value="">---Select---</option>
<?php
	foreach ($dsgv as $ds) {
		?>
			<option value="<?=$ds['magv']?>"><?php echo $ds['name']?></option>
		<?php
	}
?>
