<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
    <title>E-Library SMK Merdeka Bandung</title>
</head>
<body>  
    <nav id="navbar" class="navbar flex items-center justify-between py-4 px-8 fixed top-0 left-0 right-0 z-50 shadow-lg bg-white bg-opacity-90 transition duration-300 ease-in-out">
        <div class="flex-none">
            <h1 class="text-black text-2xl font-bold mb-1">E-Library</h1>
        </div>

        <div class="flex-grow text-center text-lg">
            <div class="inline-block space-x-4">
                <a href="#home" class="navbar-link font-bold hover:text-gray-400 transition duration-300">Home</a>
                <a href="#about" class="navbar-link font-bold hover:text-gray-400 transition duration-300">About</a>
                <a href="#contact" class="navbar-link font-bold hover:text-gray-400 transition duration-300">Contact</a>
                <a href="#library" class="navbar-link font-bold hover:text-gray-400 transition duration-300">Library</a>
                <a href="#profile" class="navbar-link font-bold hover:text-gray-400 transition duration-300">Profile</a>
            </div>
        </div>

        <div class="flex-none flex items-center space-x-4 text-black">
            <div class="relative">
                <input type="text" placeholder="Search" class="pl-3 pr-10 py-2 rounded-full bg-gray-100 text-gray-800 focus:outline-none focus:ring focus:border-blue-300 w-full sm:w-30 md:w-40 lg:w-60" /> 
                <div class="absolute right-3 top-0 flex items-center h-full">
                    <i data-feather="search" class="text-gray-500 w-5 h-5"></i>
                </div>
            </div>
            <a href="../auth/logout.php" id="logout" class="hover:text-gray-300"><i data-feather="log-out"></i></a>
        </div>
    </nav>
    
    <script>
        feather.replace();
    </script>
</body>
</html>