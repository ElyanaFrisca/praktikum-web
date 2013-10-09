<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<head>
<title>Latihan Kecil Metode GET dan POST</title>
</head>

<body>
<!-- Fungsi $ _REQUEST dapat menampung informasi atau data yang dikirim dari formulir yang menggunakan metode $ _POST dan $ _GET-->

<form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
Nama
<input type="text" name="nama"/><br />

<input type="submit" value="OK" />
</form>

<?php
/* $_REQUEST disini menggantikan fungsi dari $_GET*/
if (isset($_REQUEST['nama'])) {
echo 'Hallo, ' .$_REQUEST['nama'];
}
?>
</body>
</html>
