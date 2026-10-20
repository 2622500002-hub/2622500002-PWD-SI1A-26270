P5 - JavaScript Dasar, DOM, Event, dan Validasi Sisi Klien 
Deskripsi 
Dokumentasi pengembangan halaman web pada P5, meliputi JavaScript, DOM, event listener, interaksi 
navigasi, dan validasi formulir sisi klien. 
Fitur dan Pengembangan 
[Navigasi Active & Smooth Scroll]: [Menambahkan JavaScript pada script.js untuk untuk memberikan class active pada menu saat di-scroll dan efek smooth scroll saat klik navigasi menggunakan DOM querySelector.] 
[Validasi Form Kontak Sisi Klien]: [ Membuat validasi pada form contactForm untuk input email, semester (min 1 max 8), tanggal kunjungan, dan jenis pesan. Jika kosong atau tidak valid, menampilkan pesan error di bawah input menggunakan innerText tanpa reload halaman.] 
Tambahkan entri setiap kali ada perkembangan penting pada proyek. 
Pengujian 
 [Validasi Email dan Semester]: [Diuji dengan memasukkan email tanpa @ dan semester 10. Hasil: Muncul pesan error "Format email tidak valid" dan "Semester maksimal 8". Saat diisi benar, form berhasil submit.]
 [Validasi Tanggal dan Radio Button]: [Diuji dengan tidak memilih Jenis Pesan dan tanggal kosong. Hasil: Sistem mencegah pengiriman dan menampilkan peringatan, setelah dilengkapi data muncul alert "Pesan berhasil dikirim".]
Perbarui bagian ini setelah melakukan pengujian atau debugging yang relevan. 
Riwayat Pengembangan 
Catat perkembangan melalui commit Git yang bermakna. 
 [feat]: [menambahkan script.js untuk navigasi interaktif dan validasi form kontak sisi klien.]
 [fix]: [memperbaiki error git push rejected dengan melakukan pull rebase dari origin main, serta memperbaiki required pada input-form agar validasi berjalan.]