<!DOCTYPE html>
<html>
<head><title>Operator Aritmatika</title></head>
<body bgcolor="yellow">
<h2 align="left">Kalkulator Sederhana </h2>
<form method = "post">
<table>
<tr>

<!--proses memasukkan angka yang ke-1-->
<td><input type = "number" name ="angka01" value ="" placeholder ="Angka ke-1" required></td> 
<!--placeholder disini berfungsi untuk menampilkan teks "Angka ke-1" ketika field form tidak ada value nya (tidak diisi suatu nilai)
Ketika user fokus pada field form itu, maka teks placeholder akan dihapus, Jika user meninggalkan field form itu dalam keadaan kosong, 
maka teks placeholder kembali diciptakan-->

<!--Required Biasa dipakai untuk urusan validasi. Dengan menambahkan atribut ini, tidak perlu menambahkan script untuk mengecek inputan user. Browser akan mengeluarkan peringatan jika user tidak mengisi field ini.-->

<td><select name="operator" required> <!--pilih operator-->
		<option></option>
		<option>+</option>
		<option>-</option>
		<option>*</option>
		<option>/</option>
		</select></td>
        
        <!--proses memasukkan angka yang ke-2-->
<td><input type = "number" name = "angka02" value ="" placeholder = "Angka ke-2" required></td>
<td align="right"><input type="submit" name="submit" value="="> 
</td>

<!--proses aritmatikanya-->
		<?php
		if(isset($_POST['angka01']) or isset($_POST['angka02']) ){
			$angka1 = $_POST['angka01'];
			$angka2 = $_POST['angka02'];
			}else{
			$angka1 = "0";
			$angka2 = "0";
			}
			if(isset($_POST['operator'])){
			$operator =$_POST['operator'];
			}else{
			$operator ="";
			}
			
			$angka1 = '0123456789'; /*ketentuan masukkan yang bisa digunakan*/
		if(!preg_match("/^[0-9]+$/", $angka1)){ /*fungsi yang mencocokkan antara inputa dan uss*/
			echo "<br>NAMA DAN PASSWORD HANYA HURUF !!!";
		}
		
			switch($operator)
			{
				case "+": /*penjumlahan*/
				$hasil = $_POST["angka01"] + $_POST["angka02"];
			break;
			case "-": /*pengurangan*/
				$hasil = $_POST["angka01"] - $_POST["angka02"];
			break;
			case "*": /*perkalian*/
				$hasil = $_POST["angka01"] * $_POST["angka02"];
			break;
			case "/": /*pembagian*/
				$hasil = $_POST["angka01"] / $_POST["angka02"];
			break;
			}
			?>
            
		<td><input type="text" name="hasil" disabled value="<?php echo $hasil;?>"></td>
		<td>&nbsp;</td>
</tr>
</table>
<h2 align="left">Hasil dari penghitungan adalah <?php echo $hasil;?> </h2>
</body>
</html>