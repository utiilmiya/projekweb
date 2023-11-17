<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Art of Beauty: Makeup Mastery</title>
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="makeup-toolbar.css">
</head>
<body>
    <header>
        <div class="navbar">
            <a href="skincare.html">Skincare</a>
            <a href="makeup.html">Makeup</a>
            <a href="tips.html">Tips</a>
            <a href="contact.html">Contact Us</a>
			<a href="daftar.php">Daftar Member</a>
        </div>
	<head>
    <title>Pendaftaran Member</title>
	</head>
<body>
	<header>
        <h1>Pendaftaran member</h1>
    </header>
<section>
<?php
include "koneksi.php";
$nama=$_POST['nama'];
$no_tlp=$_POST['no_tlp'];
$aksi=mysqli_query($koneksi,"insert into member (id,nama,no_tlp) VALUE
('','$nama','$no_tlp')");	
if($aksi){
echo "<br>Selamat, data kamu akan kami proses secepatnya </br> Tunggu sebentar ya, kami akan menghubungi kamu melalui nomor telepon untuk konfirmasi member";
}else{
echo mysql_error($aksi)."Ada yang salah";
}
?>
</section>
	<footer>
        <p>&copy; 2023 Skincare & Makeup Journey</p>
		<a class="back-button" href="Skincare and Make up.html">Back to Home</a>
    </footer>
</body>