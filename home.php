<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="tugasstylr.css">
</head>
<body background="colorful-memphis-design-background-vector_53876-81744 - Copy.jpg">
	<header>
		<h1 class="judul">BLOG BEBAS</h1>
		<p class="deskripsi">Blog dengan materi</p>
	</header>
	<div class="wrap">
		<nav class="menu">
			<center>
			<ul>
				<li>
					<a href="tugas.html">Registrasi</a>
				</li>
				<li>
					<a href="home.php">LOGIN</a>
				</li>
				<li>
					<a href="tugas1.html">MATERI KULIAH</a>
				</li>
				<li>
					<a href="tugas2.html">PENCARIAN</a>
				</li>
				<li>
					<a href="tugas4.php">DATA DIRI ANDA</a>
				</li>
			</ul>
		</nav>
		</center>
		</nav>
	</div>	
		<div class="sidebar1">
			<center>
			<script>
        	var pertanyaan = confirm("Apakah anda mencari referensi materi?")

        	var hasil = pertanyaan ? "Silahkan login terlebih dahulu" : "Silahkan mencari referensi lain";
        	document.write(hasil);
    		</script>
    		<center>
			<center>
			<h4><center> Masukkan User name dan password Anda :
		<tr></tr></h4></center>
		<center>

		<form action="tugas.html" method="POST">
			<p><b>Belum punya akun ?</b></p>
			<input type="radio" name="">YA
			<input type="submit">
			<br>
		</form>
		<br>

	<!-- untuk validasi data -->
	<?php
	$Username = $Password = "";
	if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nama"]) && isset($_POST["pass"])) {
 	$Username = $_POST["nama"];
	$Password = $_POST["pass"];
	}
	?>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	User Name: <input type="text" name="nama"><br><br>
	Password : <input type="text" name="pass"><br><br>
	<input type="submit">
	<br><br>
	</form>
    <?php
	if(empty($Username) && empty($Password) ){
	echo "User name dan password tidak boleh kosong!!";
	}
	else if(!empty($Username) && !empty($Password) ){
	echo "<h2>Selamat Datang</h2>";
	echo $Username;
	}


	?>

	</tr>
	</table>
			</center>

		</div>
	</div>

	<div class="footer">

			<font color="white">copy@right wisdahefendi-1800018130</font>
		</div>
	
</body>
</html>