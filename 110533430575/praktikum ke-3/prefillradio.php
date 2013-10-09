<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<head>
<title>Prefill Data Radio Button</title>
</head>
 <!--menginisialisasi setiap item yang ada, dengan tujuan untuk mengetahui item tersebut dipilih apa tidak-->
 
 
<body>

<form action="<?php $_SERVER['PHP SELF'];?>" method="post">
Jenis Kelamin


<input type="radio" name="sex" value="Pria" checked
<?php
if ($_POST['sex'] == 'Pria'){
	echo 'checked="checked"'; /*proses pengecekan apakah item Pria yang dipilih*/
}
?>/>
Pria


<input type="radio" name="sex" value="Wanita"
<?php
if ($_POST['sex'] == 'Wanita'){
	echo 'checked="checked"';/*proses pengecekan apakah item Wanita yang dipilih*/
}
?>/>
Wanita <br />


<input type="submit" value="OK" />
</form>

<?php
if (isset ($_POST['sex'])) {
	echo $_POST['sex'];
}
?>
</body>
</html>
