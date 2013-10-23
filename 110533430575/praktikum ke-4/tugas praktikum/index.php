<!DOCTYPE html>
<html lang="en">
<head>
<title>Autentikasi Halaman Session</title>
<style type="text/css">
.inner{
margin:200px auto;
padding:20px;
width:240px;
border:3px solid purple;
background-color: orange;
}
</style>
</head>
<body>
<?php
ini_set('display_errors', 1);
define('_VALID', 1);
//include file eksternal
require_once('./autt.php');
init_login();
validate();
?>
<h3>Simulasi Halaman Admin</h3>
<p>
<a href="?m=logout">Logout</a>
<p>
Menu-menu admin ada di sini
</body>
</html>
