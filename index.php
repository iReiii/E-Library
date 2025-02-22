<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Library SMK Merdeka Bandung</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://unpkg.com/feather-icons"></script>
</head>
<body class="bg-gray-50">

  <nav class="bg-gradient-to-r from-purple-500 to-indigo-600 p-4 shadow-lg">
    <div class="container mx-auto flex justify-between items-center">
      <a href="#" class="text-white text-2xl font-bold">📚 E-Library SMK Merdeka</a>
      <div>
        <a href="auth/login.php" class="text-white px-4 py-2 rounded hover:underline">Sign In</a>
        <a href="auth/register.php" class="bg-white text-indigo-600 px-4 py-2 rounded hover:bg-gray-200 font-semibold">Sign Up</a>
      </div>
    </div>
  </nav>

  <section class="text-white py-24 bg-gradient-to-r from-blue-500 to-purple-600 text-center">
    <div class="container mx-auto">
      <h1 class="text-5xl font-extrabold mb-4">📖 Selamat Datang di E-Library!</h1>
      <p class="text-lg mb-6">Akses ribuan buku dan sumber belajar secara gratis kapan saja, di mana saja.</p>
      <a href="auth/register.php" class="bg-white text-indigo-600 px-8 py-3 rounded-full font-semibold text-lg shadow-md hover:bg-gray-200 transition">Mulai Sekarang</a>
    </div>
  </section>

  <section class="py-16">
    <div class="container mx-auto text-center">
      <h2 class="text-4xl font-extrabold text-gray-800 mb-10">🌟 Kenapa Memilih E-Library?</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="p-6 bg-white rounded-lg shadow-lg transform hover:scale-105 transition">
          <i data-feather="book" class="text-indigo-600 w-12 h-12 mb-4"></i>
          <h3 class="text-xl font-bold mb-2">Koleksi Luas</h3>
          <p>Akses berbagai koleksi buku, jurnal, dan sumber edukasi dari berbagai kategori.</p>
        </div>
        <div class="p-6 bg-white rounded-lg shadow-lg transform hover:scale-105 transition">
          <i data-feather="smartphone" class="text-blue-500 w-12 h-12 mb-4"></i>
          <h3 class="text-xl font-bold mb-2">Akses Mudah</h3>
          <p>Baca kapan saja dan di mana saja dengan platform yang responsif & user-friendly.</p>
        </div>
        <div class="p-6 bg-white rounded-lg shadow-lg transform hover:scale-105 transition">
          <i data-feather="users" class="text-green-500 w-12 h-12 mb-4"></i>
          <h3 class="text-xl font-bold mb-2">Khusus Siswa</h3>
          <p>Dirancang khusus untuk siswa SMK Merdeka Bandung agar belajar lebih mudah.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-gradient-to-r from-indigo-600 to-purple-700 text-white py-16 text-center">
    <div class="container mx-auto">
      <h2 class="text-4xl font-extrabold mb-4">Siap Membaca Buku Favoritmu?</h2>
      <p class="text-lg mb-6">Jelajahi perpustakaan digital kami dan temukan ilmu baru setiap hari.</p>
      <a href="auth/register.php" class="bg-white text-indigo-600 px-8 py-3 rounded-full font-semibold text-lg shadow-md hover:bg-gray-200 transition">Daftar Sekarang</a>
    </div>
  </section>

  <footer class="bg-black text-white py-8">
    <div class="container mx-auto text-center">
      <p>&copy; 2025 E-Library SMK Merdeka Bandung. All rights reserved.</p>
    </div>
  </footer>

  <script>
    feather.replace();
  </script>

</body>
</html>
