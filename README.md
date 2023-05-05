<h1>Sistem Informasi Rental Buku</h1>
<p>Ini adalah aplikasi Sistem Informasi Rental Buku berbasis web yang dibangun dengan menggunakan framework Laravel versi 9. Aplikasi ini memudahkan pengelolaan buku pada rental buku.</p>

<h2>Fitur</h2>
<p>Aplikasi Sistem Informasi Rental Buku memiliki fitur sebagai berikut:</p> 
  <ol>
    <li>Autentikasi Pengguna.</li>
    <li>Manajemen Buku: Aplikasi ini memungkinkan pengelolaan data buku.</li>
    <li>Melihat Data Buku.</li>
    <li>Mencari Buku.</li>
    <li>Melakukan transaksi peminjaman dan pengembalian buku.</li>
    <li>Melihat riwayat transaksi.</li>
  </ol>

<h2>Teknologi yang Digunakan</h2>
<p>Aplikasi ini dikembangkan menggunakan teknologi sebagai berikut:</p>
<ol>
  <li>Backend: Aplikasi ini menggunakan PHP sebagai bahasa pemrograman backend dengan framework Laravel. Database yang digunakan adalah MySQL.</li>
  <li>Frontend: Aplikasi ini menggunakan Blade sebagai bahasa pemrograman frontend. UI/UX framework yang digunakan adalah Bootstrap.</li>
  <li>Authentication: Aplikasi ini menggunakan Laravel Authentication untuk melakukan otentikasi pengguna.</li>
</ol>

<h2>Instalasi</h2>
<p>Berikut adalah langkah-langkah untuk menginstal Aplikasi Sistem Informasi Rental Buku:</p>

<ol>
  <li>Clone repository ini <a href="https://github.com/aldistate/book-rent.git">https://github.com/aldistate/book-rent.git</a> atau download repository ini dan extract ke dalam folder yang diinginkan.</li>
  <li>Jalankan perintah 'composer install' pada terminal di folder aplikasi.</li>
  <li>Salin file .env.example menjadi .env , jalankan perintah 'cp .env.example .env' pada terminal</li>
  <li>Buat key baru untuk aplikasi, jalankan perintah 'php artisan key:generate' pada terminal</li>
  <li>Buatlah sebuah database baru di MySQL dengan nama 'book_rent'.</li>
  <li>Buka file .env dan ubah konfigurasi database sesuai dengan database yang sudah dibuat.</li>
  <li>Jalankan migrasi database, dengan perintah 'php artisan migrate'</li>
  <li>Jalankan server development, dengan perintah 'php artisan serve'</li>
  <li>Buka web browser dan akses http://localhost:8000 untuk membuka aplikasi.</li>
</ol>

<br>
<p>Demikianlah README.md untuk Aplikasi Sistem Informasi Rental Buku menggunakan Laravel versi 9 dan MySQL, serta bagaimana membuat API dan mengintegrasikannya dengan UI Bootstrap. Jangan ragu untuk mengembangkan aplikasi ini lebih jauh, menambahkan fitur baru, atau memperbaiki kode yang ada untuk meningkatkan performa dan fungsionalitasnya. Terima kasih telah membaca, semoga bermanfaat!</p>