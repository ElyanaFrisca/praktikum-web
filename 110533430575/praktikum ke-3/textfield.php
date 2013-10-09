<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<head>
<title>Prefilling Text Field</title>
</head>

 <!--Text field berfungsi untuk menerima input dalam satu baris, jika kita attribut value kita beri nilai, 
 maka ini akan menjadi nilai default yang secara otomatis muncul ketika halaman dipanggil.-->  

<body>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Nama
<input type="text" name="nama"
	value="<?php
	echo isset($_POST['nama']) ? $_POST['nama'] : ''; /* digunakan untuk memfilter input/masukan pada form*/
	?>"
/><br />

<input type="submit" value="OK" />
</form>

<?php
if (isset($_POST['nama'])){
	echo $_POST['nama'];
}
?>
</body>
</html>
