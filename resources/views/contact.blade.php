<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontak | Luvi</title>
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
      padding: 2.5rem 1rem;
    }

    header h1 {
      margin: 0.5rem 0;
      font-size: 2.5rem;
      color: #fff;
      text-shadow: 2px 2px 6px rgba(0,0,0,0.4);
    }

    nav {
      display: flex;
      justify-content: center;
      gap: 1rem;
      margin-top: 1rem;
    }

    nav a {
      text-decoration: none;
      background: rgba(255,255,255,0.9);
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
      transform: scale(1.05);
    }

    .container {
      max-width: 700px;
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

    form {
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    input, textarea {
      padding: 12px;
      border-radius: 10px;
      border: 1px solid #ccc;
      font-size: 1rem;
      outline: none;
      transition: 0.3s;
    }

    input:focus, textarea:focus {
      border-color: #ff6f61;
      box-shadow: 0 0 8px rgba(255,111,97,0.3);
    }

    button {
      padding: 12px;
      background: #ff6f61;
      color: #fff;
      font-weight: bold;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      transition: 0.3s;
    }

    button:hover {
      background: #e55b4d;
      transform: scale(1.05);
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
    <h1>KONTAK - LUVITA</h1>
    <nav>
      <a href="http://localhost:8000/home">Home</a>
      <a href="http://localhost:8000/profile">Profil</a>
      <a href="http://localhost:8000/berita">Berita</a>
    </nav>
  </header>

  <div class="container">
    <div class="card">
      <h2>Hubungi Luvita</h2>
      <form>
        <input type="text" placeholder="Nama Kamu" required>
        <input type="email" placeholder="Email Kamu" required>
        <textarea rows="5" placeholder="Tulis pesan di sini..." required></textarea>
        <button type="submit">Kirim Pesan</button>
      </form>
    </div>

    <div class="card">
      <h2>Media Sosial</h2>
      <div class="socials">
        <a href="https://www.instagram.com/luvitamelati" target="_blank">Instagram</a>
        <a href="mailto:melatiluvita31@gmail.com">Email</a>
        <a href="https://open.spotify.com/user/31et67hxgg33uuq3a3s4bpbsdtlm" target="_blank">Spotify</a>
        <a href="https://github.com/luvitamelati02" target="_blank">GitHub</a>
      </div>
    </div>
  </div>
</body>
</html>
