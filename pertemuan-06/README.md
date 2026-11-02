# Pertemuan 6 (P6) - PHP Dasar dan Pemrograman Sisi Peladen
Mata Kuliah: Pemrograman Web Dasar (IS205)
Program Studi: Sistem Informasi - ISB Atma Luhur

## A. Identitas Mahasiswa
- NIM: 2622500002
- Nama: Arini
- Kelas: SI 1A
- Profil GitHub: https://github.com/2622500002-hub/2622500002-PWD-SI1A-26270

## B. Posisi P6 dalam Pengembangan PWD
P6 melanjutkan artefak P5 (HTML, CSS, JavaScript) sebagai baseline. Pada P6 halaman utama diubah dari `index.html` menjadi `index.php` agar dapat diproses oleh server (server-side) melalui Laragon. Semua komponen P5 tetap dipertahankan di folder `pertemuan-06/`.

Lokasi Proyek:
Akses localhost: 

## C. Capaian Pembelajaran (Sub-CPMK0822)
1. Menjelaskan cara kerja PHP sebagai bahasa sisi peladen dan menjalankan skrip via peladen lokal
2. Menggunakan sintaks dasar PHP, variabel, konstanta, tipe data, operator untuk keluaran dinamis
3. Menerapkan percabangan if-elseif-else dan switch, serta perulangan for dan while
4. Menguji via localhost, debugging, dan pengelolaan versi Git/GitHub bertahap

Batasan: P6 fokus PHP dasar. Pemrosesan formulir GET/POST, validasi, session, PRG dibahas di P7.

## D. Dasar PHP dan Integrasi HTML
- PHP diproses di server, hasil dikirim sebagai HTML ke browser.
- Tag PHP: `<?php ... ?>`
- File harus berekstensi `.php` agar diproses.
- `echo` dan `print` untuk keluaran. Komentar `//`, `#`, `/* ... */`
- Pengujian: View Page Source (Ctrl+U) memastikan kode PHP tidak terkirim mentah.

Contoh uji yang dijalankan:
```php
<?php echo "PHP berhasil dijalankan."; ?>