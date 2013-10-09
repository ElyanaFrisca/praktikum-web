<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">



<head>
<title>Studi Kasus 2 Data Checkbox</title>
</head>

<!--Proses  Checkbox menggunakan preselecting, dimana prosesnya cek satu-persatu pilihan yang diselect untuk mengetahui apakah item tersebut terpilih -->
<body>

	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
	Hobby Anda
	
	<!-- Pilihan dari hobby-->
	<input type="checkbox" name="hobby1" value="Membaca" 
	<?php
	if ($_POST['hobby1']=='Membaca'){
		echo'checked="checked"'; /*Mengecek apakah Membacaa terpilih*/
	}
	?>
	/>Membaca
	
	
	<input type="checkbox" name="hobby2" value="Olahraga" 
	<?php
	if ($_POST['hobby2']=='Olahraga'){
		echo'checked="checked"'; /*Mengecek apakah Olahraga terpilih*/
	}
	?>
	/>Olahraga
	
	
	<input type="checkbox" name="hobby3" value="Menyanyi" 
	<?php
	if ($_POST['hobby3']=='Menyanyi'){
		echo'checked="checked"'; /*Mengecek apakah Menyanyi terpilih*/
	}
	?>
	/>Menyanyi<br />
	
	
	
	<input type="submit" value="OK" />
	</form>
	
	 <!--Menampilkan pilihan hobby apa saja yang telah dimasukkan, disini bisa memilih lebih dari salah satu pilihan-->
	<?php if(isset($_POST['hobby1'])){
		echo $_POST['hobby1'];} ?><br />
	<?php if(isset($_POST['hobby2'])){
		echo $_POST['hobby2'];} ?><br />
	<?php if(isset($_POST['hobby3'])){
		echo $_POST['hobby3'];} ?><br />
	

</body>
</html>
