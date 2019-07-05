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
		<fieldset>
        <legend><h3>DATA DIRI</h3></legend>
		
        <!-- menampilkan data diri -->
		<?php
		echo "<head><title>DATA PRIBADI</title></head>";
		$fp = fopen("datadiri.txt","r");
		echo "<table border=0>";
		while ($isi = fgets($fp,80))
		{
		$pisah = explode("|",$isi);
		echo "<tr><td>Nama </td><td>: $pisah[0]</td></tr>";
		echo "<tr><td>Username </td><td>: $pisah[1]</td></tr>";
		echo "<tr><td>Email</td><td>: $pisah[2]</td></tr>";
		echo "<tr><td>password</td><td>: $pisah[3]</td></tr>
		<tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
		}
		?>
		</fieldset>
	</div>
	</div>

	<div class="footer">

		<font color="white">copy@right wisdahefendi-1800018130</font>
	</div>
	

</body>
</html>