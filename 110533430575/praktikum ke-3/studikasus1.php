<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">


<head>
<title>Studi Kasus 1 Data Seleksi</title>
</head>

<!--Proses seleksi menggunakan preselecting, dimana prosesnya cek satu-persatu pilihan yang diselect untuk mengetahui apakah item tersebut terpilih -->

<body>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Pekerjaan

<!--Seleksi inputan yang dimasukkan-->
<select name="job">
	<option value="Mahasiswa"
	<?php if($_POST['job']=='Mahasiswa'){
	echo 'selected="selected"';}?> <!--Mengecek apakah Mahasiswa terpilih-->
	>Mahasiswa
	
	<option value="ABRI"
	<?php if($_POST['job']=='ABRI'){
	echo 'selected="selected"';}?> <!--Mengecek apakah ABRI terpilih-->
	>ABRI
	
	<option value="PNS"
	<?php if($_POST['job']=='PNS'){
	echo 'selected="selected"';}?> <!--Mengecek apakah PNS terpilih-->
	>PNS
	
	<option value="Swasta"
	<?php if($_POST['job']=='Swasta'){
	echo 'selected="selected"';}?> <!--Mengecek apakah Swasta terpilih-->
	>Swasta
</select> <br />

	<input type="submit" value="OK" />
</form>

<?php
if (isset($_POST['job'])) {
	echo 'Pekerjaan Anda adalah '.$_POST['job']; /* ketika job diimasukkan maka akan muncul tampilan job yang telah terpilih*/
}
?>
</body>
</html>
