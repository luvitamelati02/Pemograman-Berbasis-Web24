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
    <h1>BERITA - 1</h1>
  </header>

  <nav>
      <a href="http://localhost:8000/berita1">Berita 1</a>
      <a href="http://localhost:8000/berita2">Berita 2</a>
      <a href="http://localhost:8000/berita3">Berita 3</a>
    </nav>

    <nav>
    <a href="http://localhost:8000/home">Home</a>
      <a href="http://localhost:8000/profile">Profil</a>
      <a href="http://localhost:8000/berita">Berita</a>
      <a href="http://localhost:8000/contact">Kontak</a>
    </nav>

  </header>

  <div class="container">
    <div class="card">
      <h2>🚀 AI Baru Bikin Pekerjaan Makin Cepat, Banyak Orang Mulai Ketergantungan!</h2>
      <p>Semarang, 23 Oktober 2025 — Teknologi kecerdasan buatan atau Artificial Intelligence (AI) berkembang makin pesat. Dalam beberapa bulan terakhir,
         berbagai perusahaan teknologi dunia merilis AI generasi terbaru yang mampu membantu manusia menyelesaikan pekerjaan harian, mulai dari 
         menulis, menganalisis data, membuat desain, sampai membantu coding dalam hitungan detik.

<p>Kini, banyak pekerja hingga pelajar merasa “ketagihan” menggunakan AI karena dinilai bisa menghemat waktu, 
meningkatkan produktivitas, dan mengurangi beban kerja. AI modern bahkan bisa membuat ilustrasi, menyusun proposal, 
sampai memberikan solusi bisnis hanya bermodalkan perintah teks yang sangat sederhana.</p>

<p>Seorang pengguna AI, Rafi (20), mengatakan penggunaan AI sudah menjadi rutinitasnya setiap hari saat mengerjakan proyek kuliah. 
“Dulu aku butuh waktu sampai setengah hari buat ngerjain satu laporan. Sekarang pakai AI cuma dalam hitungan menit idenya udah keluar 
dan tinggal aku kembangkan,” ujarnya.</p>

<p>Para pakar teknologi memprediksi bahwa AI akan semakin terintegrasi dengan kehidupan manusia dalam 3–5 tahun ke depan, 
bahkan mungkin menjadi asisten pribadi digital yang bisa berpikir cepat, memahami kebiasaan penggunanya, 
dan memberikan rekomendasi otomatis — seperti sahabat virtual yang selalu siap membantu.</p>

<p>Meski begitu, para ahli tetap mengingatkan bahwa penggunaan AI harus diimbangi dengan kemampuan berpikir kritis. 
Pengguna tetap harus bisa memilah informasi yang benar dan tidak menyerahkan seluruh keputusan hanya pada mesin.</p>
      </p>
    </div>
    
  </div>
</body>
</html>
