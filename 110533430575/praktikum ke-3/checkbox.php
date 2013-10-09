<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<title>Data Checkbox</title>
</head>

<!-- Memungkinkan user untuk men-inputkan lebih dari satu pilihan-->
<body>

	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
	Hobby Anda
	<!-- Menampilkan pilihan yang disediakan pada checkbox-->
	<input type="checkbox" name="hobby[]" value="Membaca" />Membaca
	<input type="checkbox" name="hobby[]" value="Olahraga" />Olahraga
	<input type="checkbox" name="hobby[]" value="Menyanyi" />Menyanyi<br />
	
	<input type="submit" value="OK" />
	</form>
	
<?php
// Ekstraksi Nilai
if (isset($_POST['hobby'])){
	foreach ($_POST['hobby'] as $key => $val) // menampilkan semua pilihan/nilai yang telah di masukkan
	{
		echo $key . '->' . $val . '<br />';
	}
}
?>

</body>
</html>

