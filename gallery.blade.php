<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri</title>
    <style>
        body { font-family: Arial; background: #f0fdf4; margin: 0; }
        header, footer { background: #15803d; color: white; text-align: center; padding: 1rem; }
        nav { background: #166534; text-align: center; padding: 0.5rem; }
        nav a { color: white; margin: 10px; text-decoration: none; }
        nav a:hover { text-decoration: underline; }
        main { display: flex; justify-content: center; flex-wrap: wrap; gap: 10px; padding: 20px; }
        img { border-radius: 10px; width: 200px; height: 150px; object-fit: cover; }
    </style>
</head>
<body>
    <header><h1>Galeri Foto</h1></header>
    <nav>
        <a href="/home">Home</a>
        <a href="/about">Tentang</a>
        <a href="/news">Berita</a>
        <a href="/contact">Kontak</a>
    </nav>
    <main>
        <img src="https://picsum.photos/200/150?random=1" alt="">
        <img src="https://picsum.photos/200/150?random=2" alt="">
        <img src="https://picsum.photos/200/150?random=3" alt="">
        <img src="https://picsum.photos/200/150?random=4" alt="">
    </main>
    <footer><p>&copy; 2025 Portal Berita Terkini</p></footer>
</body>
</html>
