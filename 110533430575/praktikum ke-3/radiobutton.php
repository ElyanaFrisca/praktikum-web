<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Data Radio Button</title>
</head>

<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method ="post">
Jenis Kelamin

<!-- Menampilkan pilihan yang bisa diinputkan -->
<input type="radio" name="sex" value="Pria" />Pria
<input type="radio" name="sex" value="Wanita"  /  /> Wanita <br/>
 
 <input type="submit" value="ok" />
 </form>
 

<?php

/*isset() digunakan untuk menyatakan variabel sudah diset/terbentuk(ada) atau tidak. 
Jika variabelnya ada maka variabel akan mengembalikan nilai true, 
dan sebaliknya akan bernilai false.*/
if (isset($_POST['sex']))
 {
	echo $_POST['sex'];

}
?>

</body>
</html>