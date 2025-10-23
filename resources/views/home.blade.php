<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home | Luvi</title>
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #ff9a9e, #fad0c4, #fbc2eb, #a1c4fd, #c2e9fb);
      background-size: 400% 400%;
      animation: gradientBG 12s ease infinite;
      color: #333;
    }

    @keyframes gradientBG {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    header {
      text-align: center;
      padding: 3rem 1rem;
    }

    header h1 {
      margin: 1rem 0 0.5rem;
      font-size: 2.5rem;
      color: #fff;
      text-shadow: 2px 2px 6px rgba(0,0,0,0.4);
    }

    header p {
      font-size: 1.2rem;
      color: #f5f5f5;
    }

    nav {
      display: flex;
      justify-content: center;
      gap: 1.5rem;
      margin-top: 1rem;
    }

    nav a {
      text-decoration: none;
      background: rgba(255,255,255,0.8);
      padding: 10px 18px;
      border-radius: 12px;
      color: #333;
      font-weight: bold;
      transition: 0.3s;
    }

    nav a:hover {
      background: #ff6f61;
      color: white;
      transform: scale(1.05);
    }

    .container {
      max-width: 900px;
      margin: 2rem auto;
      padding: 1rem;
    }

    .card {
      background: rgba(255,255,255,0.95);
      border-radius: 20px;
      padding: 2rem;
      margin: 1.5rem 0;
      box-shadow: 0 8px 20px rgba(0,0,0,0.15);
      transition: transform 0.4s, box-shadow 0.4s;
    }

    .card:hover {
      transform: translateY(-8px) scale(1.02);
      box-shadow: 0 12px 30px rgba(0,0,0,0.2);
    }

    .card h2 {
      margin-top: 0;
      color: #ff6f61;
    }

    .btn {
      display: inline-block;
      margin-top: 1rem;
      padding: 10px 18px;
      background: linear-gradient(45deg, #ff9a9e, #fbc2eb);
      color: white;
      border-radius: 12px;
      text-decoration: none;
      font-weight: bold;
      transition: 0.3s;
    }

    .btn:hover {
      opacity: 0.9;
      transform: scale(1.05);
    }
  </style>
</head>
<body>
  <header>
    <h1>HOME - LUVITA</h1>
    <nav>
      <a href="http://localhost:8000/profile">Profil</a>
      <a href="http://localhost:8000/berita">Berita</a>
      <a href="http://localhost:8000/contact">Kontak</a>
    </nav>
  </header>

  <div class="container">
    <div class="card">
      <h2>Halo!</h2>
      <p>Website ini berisi beberapa halaman, yaitu Home, Profil, Berita, dan Kontak, yang dirancang dengan tampilan interaktif dan colorful agar lebih menarik. 
        <p>Diharapkan melalui tugas ini, Luvita dapat mengasah kemampuannya, serta memahami bagaimana konsep 
            desain dan fungsionalitas dapat diterapkan dalam pembuatan sebuah website.</p>
            <p>Luvita menyadari bahwa website ini masih jauh dari kata sempurna. Oleh karena itu, kritik dan saran yang membangun 
            sangat diharapkan untuk pengembangan di masa mendatang.</p>
            <p>Semoga tugas ini bermanfaat bagi penulis sendiri, dosen pengampu, maupun 
            teman-teman mahasiswa yang sedang belajar tentang pemrograman berbasis web.</p>
    </div>

    <div class="card">
      <h2>Apa yang Bisa Kamu Temukan?</h2>
      <ul>
        <li>Informasi tentang Luvita</li>
        <li>Hobi dan minat Luvita</li>
        <li>Kontak sosial media dan project</li>
        <li>Berita Karangan AI ^^</li>
      </ul>
    </div>
  </div>
</body>
</html>
