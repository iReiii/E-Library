<?php
session_start();
include ('../include/db.php');
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
$username = $_SESSION['username'];

$query = "SELECT nama_lengkap FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $nama_lengkap = $row['nama_lengkap'];
} else {
    $nama_lengkap = "";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"mt>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
    <title>E-Library SMK Merdeka Bandung</title>
</head>
<body>  
    <aside id="sidebar" class="fixed top-0 left-0 h-full w-64 bg-gray-800 shadow-lg z-50 p-6 transition-transform transform -translate-x-full md:translate-x-0">
        <h1 class="text-white text-2xl font-extrabold mb-1">E-Library</h1>
        <h3 class="text-white text-lg font-bold mb-4">SMK Merdeka Bandung</h3>
        <p class="text-white text-md font-bold mb-8">Selamat Datang, <?php echo htmlspecialchars($username); ?> !</p>
        <nav class="space-y-4">
            <a href="Dashboard.php" class="flex bg-gray-700 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded-lg items-center space-x-2 transition">
                <i data-feather="home" class="text-white"></i>
                <span>Home</span>
            </a>
            <a href="List.php" class="flex bg-gray-700 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded-lg items-center space-x-2 transition">
                <i data-feather="book" class="text-white"></i>
                <span>List Buku</span>
            </a>
            <a href="Peminjaman.php" class="flex bg-gray-700 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded-lg items-center space-x-2 transition">
                <i data-feather="book-open" class="text-white"></i>
                <span>Peminjaman Buku</span>
            </a>
            <a href="Pengembalian.php" class="flex bg-gray-700 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded-lg items-center space-x-2 transition">
                <i data-feather="rotate-ccw" class="text-white"></i>
                <span>Pengembalian Buku</span>
            </a>
            <a href="History.php" class="flex bg-gray-700 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded-lg items-center space-x-2 transition">
                <i data-feather="clock" class="text-white"></i>
                <span>History Peminjaman</span>
            </a>
        </nav>
    </aside>

    <button id="toggleSidebar" class="fixed top-4 left-4 md:hidden bg-gray-800 text-white p-2 rounded-md">
        ☰
    </button>

    <nav class="flex items-center justify-between bg-gray-700 p-4 shadow-md fixed top-0 left-64 right-0 z-40">
        <div class="flex items-center">
            <span class="text-white text-lg font-bold mx-2">Menu</span>
            <div class="relative w-full max-w-md ml-2">
                <input type="text" placeholder="Search" class="w-96 pl-4 pr-10 py-2 rounded-full bg-gray-100 text-gray-800 focus:outline-none focus:ring focus:border-blue-300" />
                <i data-feather="search" class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-gray-600 transition"></i>
            </div>
        </div>
        <div class="flex items-center space-x-6 pr-4">
            <div class="w-10 h-10 rounded-full overflow-hidden bg-white">
                <a href="profile.php">
                    <img src="" alt="" class="w-full h-full object-cover" />
                </a>
            </div>
            <i data-feather="bell" class="text-white hover:text-gray-300 w-6 h-6 cursor-pointer"></i>
            <a href="../auth/logout.php" id="logout" class="text-white hover:text-gray-300">
                <i data-feather="log-out"></i>
            </a>
        </div>
    </nav>

    <main class="ml-72 p-10 flex justify-center items-center min-h-screen">
        <div class="w-full max-w-lg bg-white shadow-xl rounded-xl p-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Peminjaman Buku</h2>
            <form action="proses_peminjaman.php" method="POST">
                <div class="mb-4">
                    <label for="nama" class="block text-gray-700 font-semibold mb-2">Nama Peminjam</label>
                    <input type="text" id="nama" name="nama" value="<?php echo htmlspecialchars($nama_lengkap); ?>" readonly class="w-full px-4 py-2 border rounded-lg bg-gray-200 focus:outline-none">                </div>
                <div class="mb-4">
                    <label for="judul_buku" class="block text-gray-700 font-semibold mb-2">Judul Buku</label>
                    <input type="text" id="judul_buku" name="judul_buku" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
                <div class="mb-4">
                    <label for="tanggal_pinjam" class="block text-gray-700 font-semibold mb-2">Tanggal Peminjaman</label>
                    <input type="date" id="tanggal_pinjam" name="tanggal_pinjam" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
                <div class="mb-6">
                    <label for="tanggal_kembali" class="block text-gray-700 font-semibold mb-2">Tanggal Pengembalian</label>
                    <input type="date" id="tanggal_kembali" name="tanggal_kembali" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white py-3 px-6 rounded-lg hover:bg-blue-700 transition">Ajukan Peminjaman</button>
            </form>
        </div>
    </main>

    <script>
        feather.replace();
        
        const sidebar = document.getElementById("sidebar");
        const toggleSidebar = document.getElementById("toggleSidebar");

        toggleSidebar.addEventListener("click", () => {
            sidebar.classList.toggle("-translate-x-full");
        });
    </script>
</body>
</html>