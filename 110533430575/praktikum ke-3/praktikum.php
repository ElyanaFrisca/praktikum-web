<html>
<head>

	<title>TUGAS PRAKTIKUM</title>
	<style>
	
/*Bagian yang mengatur tampilan halaman*/
	body{background: pink; padding-top: 150px ;padding-bottom: 50px;
		 border: 8px solid #407997;} /*mengatur tampilan dan warna background dari halaman dasar*/
	
	/*mengatur tampilan dari form tempat penginputan data*/
	form{background: yellow; width: 500px; height: 200px; padding-top: 30px; padding-bottom: 50px;
		 border: 25px solid #407997;}

	/*mengatur font*/
	h1{color: red; border-bottom: 3px dotted yellow; margin-left: 10px; margin-right: 10px; padding-bottom: 15px;}
	.login {
	font-family: Arial Black, Gadget, sans-serif; /*font yang digunakan*/
}
    </style>
	
	<script>
	<!--Merupakan Script utama (Javascript)-->
	function cekinput(){
	var username=document.getElementById("username");
	var password=document.getElementById("password");
	
	if(username.value==''||password.value==''){
		alert('inputan tidak boleh kosong!!');
		}
	}
	</script>
</head>


<body>
<center>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="get" onSubmit="cekinput()"> <!--Memanggil fungsi cekinput() -->
<h1>MASUK</h1>

<!--Memasukkan nama -->
<p><em>Nama Anda : </em>
  <input type="text" name="username" id="username"/>
  <br />
  <br />
  
  <!--Memasukkan password -->
  <em>Password : </em>
  <input type="text" name="password" id="password"/>
</p>
<p>	

<!--menampilkan checbox untuk selalu masuk-->
  <input type="checkbox" name="remember" class="checkbox"/>
  &nbsp;<small>Selalu Masuk</small>
  <br />
  
  <input type="submit" value="MASUK" />
</p>
</form>



<?php

/*menyimpan data dari field username ke variabel $isiusername dan $isipassword untuk menyimpan data password yang dikirim.*/
	if(isset($_GET['username'])){
		$isiusername	=$_GET['username'];
		$isipassword	=$_GET['password'];
		/*kata yang digunakan untuk username dan password*/
		$uname="ferry"; 
		$pass="ferry";
		/*dari contoh di atas dapat kita lihat bahwa yang digunakan sebagai key untuk superglobal array $_GET adalah nilai dari attribut name untuk tiap field. 
		Pada contoh di atas attribute name bernilai username untuk input text, sehingga kita menggunakan $_GET['username'] karena format umum
		dari superglobal array $_GET adalah $_GET['nilai_dari_attribut_name'].*/
		
		
		/* fungsi yang mengatur masukkan hanya berupa huruf*/
		$string = 'abcdefghijklmnopqrstuvwxyz'; /*ketentuan masukkan yang bisa digunakan*/
		if(!preg_match("/^[a-zA-Z]+$/", $isiusername)){ /*fungsi yang mencocokkan anatara inputa dan uss*/
			echo "<br>NAMA DAN PASSWORD HANYA HURUF !!!";
		}
		
		if($isiusername==$uname && $isipassword==$pass){
			echo "<br> HELLO SI, ".$uname; /*ketika pass dan uss benar maka akan menampilakan "Hello si...." ditambah dengan username yg dimasukkan*/
		}else{
			echo "<br>NAMA DAN PASSWORD ANDA SALAH !!! ULANGI LAGI..."; /* ketika pass atau uss salah, maka pernyataan ini akan muncul*/
		}
	}
?>

</center>
</body>
</html>