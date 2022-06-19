<?php
	include '../../../database/database.php';

	$ID=$_GET['nik'];
	$sql = "delete from data where nik='$ID'";
	mysqli_query($conn,$sql);

?>

<script type="text/javascript">
	alert("Data Berhasil Dihapus !");
	location.href="../index.php?page=tampilpasien";
</script>