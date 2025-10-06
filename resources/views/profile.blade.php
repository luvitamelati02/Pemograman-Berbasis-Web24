<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil Luvi</title>
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #ff9a9e, #fad0c4, #fad0c4, #a1c4fd, #c2e9fb);
      background-size: 400% 400%;
      animation: gradientBG 10s ease infinite;
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

    header img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      border: 5px solid #fff;
      box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    }

    header h1 {
      margin: 1rem 0 0.5rem;
      font-size: 2.2rem;
      color: #fff;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    }

    header p {
      font-size: 1.1rem;
      color: #f9f9f9;
    }

nav {
  display: flex;
  justify-content: center; /* bikin rata tengah horizontal */
  align-items: center;     /* bikin item rata tengah vertical */
  gap: 1rem;               /* jarak antar tombol */
  margin: 1rem auto;
}

nav a {
  text-decoration: none;
  background: rgba(255, 255, 255, 0.9);
  padding: 10px 18px;
  border-radius: 12px;
  color: #333;
  font-weight: bold;
  transition: 0.3s;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

nav a:hover {
  background: #ff6f61;
  color: #fff;
  transform: scale(1.08);
  box-shadow: 0 6px 15px rgba(0,0,0,0.2);
}

nav a.active {
  background: #ff6f61;
  color: #fff;
}


    .container {
      max-width: 800px;
      margin: 2rem auto;
      padding: 1rem;
    }

    .card {
      background: #fff;
      border-radius: 15px;
      padding: 1.5rem;
      margin: 1rem 0;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      transition: transform 0.3s;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card h2 {
      margin-top: 0;
      color: #ff6f61;
    }

    .socials {
      display: flex;
      justify-content: center;
      gap: 1rem;
      margin-top: 1.5rem;
      flex-wrap: wrap;
    }

    .socials a {
      text-decoration: none;
      color: white;
      padding: 10px 15px;
      border-radius: 10px;
      font-weight: bold;
      transition: 0.3s;
      display: inline-block;
    }

    .socials a:nth-child(1) { background: #E1306C; } /* IG */
    .socials a:nth-child(2) { background: #D44638; } /* Email */
    .socials a:nth-child(3) { background: #1DB954; } /* Spotify */
    .socials a:nth-child(4) { background: #333333; } /* GitHub */

    .socials a:hover { opacity: 0.8; transform: scale(1.05); }
  </style>
</head>
<body>
  <header>
    <h1>PROFIL - LUVITA</h1>
    <img src="{{ $foto }}" width="300px" />
  </header>

  <nav>
      <a href="http://localhost:8000/home">Home</a>
      <a href="http://localhost:8000/berita">Berita</a>
      <a href="http://localhost:8000/contact">Kontak</a>
    </nav>
  </header>

  <div class="container">
    <div class="card">
      <h2>Tentang Luvita</h2>
      <p>Halo! Aku adalah Mahasiswi Semester 3 Program Studi S1 Teknologi Informasi
        Universitas Muhammadiyah Semarang. Sering dipanggil Luvita, berasal dari Kota Purwodadi, Jawa Tengah.
      </p>
    </div>

    <div class="card">
      <h2>Hobi & Minat</h2>
      <ul>
        <li>Travelling</li>
        <li>Mempelajari teknologi & basic coding</li>
        <li>Aktif organisasi & kepanitiaan</li>
      </ul>
    </div>

    <div class="card">
      <h2>Penghargaan</h2>
      <ul>
        <li>Juara 2 Samusda Culture Festival Tahun 2024</li>
        <li>Juara 2 Lomba Baca Puisi Ar - Razy Fest Tahun 2025</li>
      </ul>
    </div>

    
  </div>
</body>
</html>
