<html>
<head>
    <title>Skincare Page</title>
	<link rel="stylesheet" type="text/css" href=" style.css">
</head>
<body>
    <header>
        <h1>Selamat Datang di Halaman Skincare</h1>
    </header>
    
    <section>
        <h2>Skincare Hari Ini</h2>
        <?php
        // Simulasi data skincare hari ini
        $skincareToday = "Gunakan pembersih wajah lembut dan tabir surya SPF 30+.";
        echo "<p>$skincareToday</p>";
        ?>
    </section>
    
    <section>
        <h2>Artikel Terkait</h2>
        <?php
        // Simulasi daftar artikel terkait skincare
        $skincareArticles = array(
            "Cara Memilih Produk Skincare yang Tepat",
            "5 Tahapan Skincare Pagi yang Harus Anda Ikuti",
            "Rahasia Kulit Sehat dan Glowing dengan Skincare Malam"
        );

        // Membuat daftar artikel dalam bentuk tautan
        echo "<ul>";
        foreach ($skincareArticles as $article) {
            echo "<li><a href='#'>$article</a></li>";
        }
        echo "</ul>";
        ?>
    </section>
    
    <footer>
        <p>&copy; 2023 Skincare & Makeup Journey</p>
    </footer>
</body>
</html>