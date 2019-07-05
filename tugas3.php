<!DOCTYPE html>
<html>
<head>
	<title>Biodata</title>
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

		<form method="post">
        <fieldset>
        <legend><h3 align="center">TERIMA KASIH TELAH MENDAFTAR</h3></legend>
        <center>


        <!-- untuk akses file ke file.txt -->
        <?php
		$fp = fopen("datadiri.txt","a+");

		$nama = $_POST['nama'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		fputs($fp,"$nama|$username|$email|$password|$jeniskelamin|$agama|$biografi\n");
		fclose($fp);
		echo "SILAHKAN LOGIN UNTUK MELIHAT LEBIH<br>";
		?>
	</center>
	
    	
        </fieldset>
    </form>
    <center>
    <form action="home.php">
    	 <input type="submit" name="submit" value="LOGIN" />
    	</center>
    </form>

		</div>
	</div>

	<div class="footer">

		<font color="white">copy@right wisdahefendi-1800018130</font>
	</div>
	

</body>
</html>