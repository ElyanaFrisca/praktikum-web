<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<head>
<title>Identifikasi Metode</title>
</head>

<body>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
Nama
<input type="text" name="nama" /><br />

<input type="submit" value="OK" />
</form>

<?php
if (isset($_REQUEST['nama'])) {
echo 'Metode, '.$_SERVER['REQUEST_METHOD'];
}
?>

</body>
</html>
