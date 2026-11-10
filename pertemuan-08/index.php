<!DOCTYPE html>
<html>
<head>
    <title>Profil Arini Ramen</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>

    <header>
        <h1>Web Kuliner Arini Ramen</h1>
        <img src="ramen1.png" width=100 alt="logo ramen">
    </header>

    <nav> 
        <ul> 
          <li><a href="#home">Home</a></li> 
          <li><a href="#profile">Profil</a></li> 
          <li><a href="#registration">Registrasi</a></li> 
        </ul> 
    </nav>
    

        <section id="home">
            <h3>SELAMAT DATANG DI ARINI RAMEN BELINYU</h3>
            <p>Ramen Halal Gurihnya BelinyuArini Ramen adalah usaha kuliner ramen rumahan dari Belinyu yang buka sejak 2024. Kita pakai kuah kaldu ayam asli, tanpa MSG berlebihan, topping melimpah, harga ramah pelajar.Buka Setiap Hari: 10.00 - 21.00 WIB
            Lokasi: Belinyu, Bangka</p>
            <h3>MENU FAVORIT</h3>
            <h4>Original Chicken Ramen - Rp 18.000</h4>
<p>Kuah kaldu ayam original khas Belinyu, isian ayam suwir, telur rebus, nori, dan daun bawang. Rasa gurih ringan, cocok buat yang baru pertama coba ramen.Spicy Beef Ramen - Rp 22.000
Best seller! Daging sapi iris, kuah pedas level 1-3 pakai cabai asli Belinyu. Pedasnya nampol tapi nagih.Seafood Ramen - Rp 25.000
Isinya udang, cumi, bakso ikan, kuah seafood segar. Wangi dan gurih.Miso Ramen - Rp 20.000
Kuah miso Jepang mix bumbu lokal, plus telur setengah matang yang lumer.Curry Ramen - Rp 21.000
Kuah kari kental, ayam katsu crispy di atasnya. Favorit anak muda Belinyu.Mini Ramen Kids - Rp 12.000
Porsi kecil, tidak pedas, ada sosis dan ayam. Buat anak-anak.</p>
</section>

        <section id="profile">
         <h3>Biodata Diri</h3>
         <img src="foto profil.jpg" style="width: 150px;">
            <p style="font-size: 14px;line-height: 25px;">
                Nama : Arini Ramen<br>
                Tempat Tgl Lahir : Belinyu 10 - September - 2007<br>
                Jenis Usaha : Kuliner Ramen<br>
                Program Studi: Sistem Informasi<br>
                Alamat : Belinyu<br>
            </p>
        </section>
 <section id="registrasi">
    <h3 style="text-align:center;">Form Registrasi Pelanggan Arini Ramen</h3>
    <p style="text-align:center; font-size:13px;">Daftar jadi member Belinyu biar dapat promo beli 2 gratis es teh</p>

    <form id="formRegistrasi" action="buku_tamu.html" method="get" style="max-width:400px; margin:auto;">

        <label>Nama Lengkap:</label><br>
        <input type="text" name="nama" placeholder="Contoh: Arini" required style="width:100%; padding:6px;"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" placeholder="arini@email.com" required style="width:100%; padding:6px;"><br><br>

        <label>No HP / WA:</label><br>
        <input type="text" name="hp" placeholder="0821xxxx" required style="width:100%; padding:6px;"><br><br>

        <label>Alamat di Belinyu:</label><br>
        <input type="text" name="alamat" placeholder="Jl. Belinyu..." style="width:100%; padding:6px;"><br><br>

        <label>Menu Favorit:</label><br>
        <select name="menu" style="width:100%; padding:6px;">
            <option value="">-- Pilih Menu --</option>
            <option value="original">Original Chicken Ramen - 18k</option>
            <option value="spicy">Spicy Beef Ramen - 22k</option>
            <option value="seafood">Seafood Ramen - 25k</option>
            <option value="miso">Miso Ramen - 20k</option>
        </select><br><br>

        <label>Level Pedas:</label><br>
        <input type="radio" name="level" value="0"> Tidak Pedas
        <input type="radio" name="level" value="1"> Level 1
        <input type="radio" name="level" value="2"> Level 2
        <input type="radio" name="level" value="3"> Level 3 Pedas<br><br>

        <input type="checkbox" name="setuju" required> Saya setuju jadi member Arini Ramen<br><br>

        
            <button type="submit" style="background:#c2b5d9; padding:8px 20px; border:none; font-weight:bold; cursor:pointer;">Daftar Sekarang</button>
            <button type="reset" style="padding:8px 20px;">Batal</button>
        

    </form>
</section>


    <footer>
        <p>&copy; 2026 Arini Ramen. All Rights Reserved.</p>
    </footer>
</body>