<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transiional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Metode POST</title>
</head>
<!--Nilai atau informasi yang dikirim dengan method POST tidak akan terlihat oleh siapapun karena tidak akan di tampilkan di browser address bar 
dan tidak mempunyai batasan jumlah banyaknya niai yang dikirim.-->
<!-- Metode POST digunakan ketika mengirimkan nilai yang rahasia karena tidak ditampilkan di dalam URL, Method ini dapat mengirimkan nilai yang tidak terbatas 
jumlahnya, Method ini tidak bisa di bookmark halaman.-->

<body>

<form action="<?php $_SERVER['PHP_SELF'];?>" method ="post">
Nama
<input type="text" name="nama" /> <br/>

<input type="submit" value="OK" />
</form>

<?php
/*Fungsi $_POST adalah untuk mendapatkan nilai dari sebuah form dengan method=”post”.*/
if (isset($_POST['nama'])) {
	echo 'Hallo,' .$_POST['nama'];

}
?>

</body>
</html>