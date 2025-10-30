<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Berita | Luvi</title>
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

    .date {
      font-size: 0.9rem;
      color: #888;
      margin-bottom: 1rem;
    }
  </style>
</head>
<body>
  <header>
    <h1>BERITA - LUVITA</h1>
    
    <nav>
      <a href="http://localhost:8000/berita1">Berita 1</a>
      <a href="http://localhost:8000/berita2">Berita 2</a>
      <a href="http://localhost:8000/berita3">Berita 3</a>
    </nav>

<nav>
      <a href="http://localhost:8000/profile">Profil</a>
      <a href="http://localhost:8000/berita">Berita</a>
      <a href="http://localhost:8000/contact">Kontak</a>
      <a href="http://localhost:8000/mahasiswa">Data Mahasiswa</a>
    </nav>

  </header>

</body>
</html>