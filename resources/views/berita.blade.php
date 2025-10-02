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
      <a href="http://localhost:8000/home">Home</a>
      <a href="http://localhost:8000/profile">Profil</a>
      <a href="http://localhost:8000/contact">Kontak</a>
    </nav>
  </header>

  <div class="container">
    <div class="card">
      <h2>Ketua Panitia MASTA FTIK Tahun 2025</h2>
      <p class="date">11 - 13 September 2025</p>

      <p>Telah menjadi <b>Ketua Panitia Masa Ta’aruf (MASTA) 
        <p>Fakultas Teknik dan Ilmu Komputer Universitas Muhammadiyah Semarang Tahun 2025</p></b>

      <p>Acara ini mengusung jargon: <i>"Satu Teknik, Satu Gerak Solid dalam Aksi, Kritis dalam Pikir. FTIK Berkemajuan!"</i>. 
      Jargon ini menjadi semangat pemersatu seluruh Mahatigra Tahun 2025.</p>

      <p>Dengan harapan, seluruh mahasiswa dapat bersatu tanpa memandang jurusan, sehingga tercipta rasa kebersamaan, identitas yang kuat, dan semangat solidaritas sebagai satu keluarga besar FTIK. Dengan kebersamaan ini, mahasiswa FTIK 2025 bisa menjadi motor penggerak perubahan positif, baik di kampus maupun masyarakat.</p>

      <p>Serta, Mahatigra 2025 agar bisa aktif, peka terhadap masalah sosial, dan berani mengkritisi. Namun, semua dilakukan dengan cara yang elegan dan konstruktif, hingga terbentuk budaya berpikir kritis dan tidak apatis.</p>

      <p>Pada akhirnya, segala bentuk aksi harus selalu didasari pemikiran yang matang dan intelektual. Dengan begitu, Mahatigra 2025 tidak hanya bergerak spontan, tetapi juga memiliki landasan logis dan ilmiah.</p>
    </div>
  </div>

  <div class="container">
    <div class="card">
      <h2>Ketua Pimpinan Daerah Ikatan Pelajar Muhammadiyah Kabupaten Grobogan</h2>
      <p class="date">Periode 2025 - 2027</p>

      <p>Menjabat sebagai <b>Ketua Pimpinan Daerah Ikatan Pelajar Muhammadiyah Kabupaten Grobogan Periode 2025 - 2027</b></p>
      <p>Menjabat sebagai Ketua Umum PD IPM Grobogan periode berjalan, dengan tanggung jawab mengkoordinasikan program kerja, 
        mengelola kaderisasi, serta memastikan peran IPM sebagai organisasi pelajar yang progresif dan bermanfaat bagi masyarakat. 
      <p>Fokus utama adalah mencetak pelajar yang berkarakter, berdaya pikir kritis, dan memiliki kepedulian sosial yang tinggi.</p>
    </div>
  </div>
</body>
</html>