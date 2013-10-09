<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transiional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Metode GET</title>
</head>

<body>
<!--Nilai atau informasi yang dikirim dengan method GET akan terlihat oleh siapapun karena akan di tampilkan di browser address bar 
dan mempunyai batasan jumlah banyaknya niai yang dikirim-->
<!-- Dengan metode GET ketika kita mengisikan suatu nilai ke submisi form, maka nama variabel beserta nilainya akan ditampilkan di alamat URL-->


<form action="<?php $_SERVER['PHP_SELF'];?>" method ="get"> <!-- $_SERVER['PHP_SELF'] merupakan variabel global yang menyatakan bahwa form 
akan ditangani oleh current script  -->
Nama
<input type="text" name="nama" /> <br/>

<input type="submit" value="OK" />
</form>

<?php
/* $_GET untuk mendapatkan nilai variabel dan untuk mendapatkan nilai dari sebuah form dengan method=”get” */
if (isset($_GET['nama'])) 
{
	echo 'Hallo,' .$_GET['nama'];

}
?>

</body>
</html>