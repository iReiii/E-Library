<?php
include('../include/db.php');

session_start();

$error_message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;
            header('Location: ../views/Dashboard.php');
            exit;
        } else {
            $error_message = "Invalid password!";
        }
    } else {
        $error_message = "User not found!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../src/output.css" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
    <title>Login E-Library SMK Merdeka Bandung</title>
</head>
<body class="flex items-center justify-center h-screen bg-[url('../img/bg.jpg')] bg-cover bg-center bg-gray-800">
    <div class="bg-white p-6 rounded-xl shadow-lg w-11/12 sm:w-96 lg:w-2/5">
        <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-lg text-center">
                <h1 class="text-2xl font-bold sm:text-3xl">Login Account E-Library</h1>
                <p class="mt-4 text-gray-500">
                    Welcome To Login E-Library SMK Merdeka Bandung
                </p>
            </div>
            <img src="https://cms.smkmerdekabdg.sch.id/assets/images/login_anim.gif" style="z-index:-100; margin:auto; display:block; width:200px;">
            <form action="" method="POST" class="mx-auto mb-0 mt-8 max-w-md space-y-4">
                <div>
                    <label for="username" class="sr-only">Username</label>
                    <div class="relative">
                        <input type="text" name="username" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-lg" placeholder="Enter Username" required />
                        <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                        </span>
                    </div>
                </div>

                <div>
                    <label for="password" class="sr-only">Password</label>
                    <div class="relative">
                        <input type="password" id="password" name="password" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-lg" placeholder="Enter Password" required />
                        <span class="absolute inset-y-0 end-0 grid place-content-center px-4 cursor-pointer" onclick="togglePassword()">
                            <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" class="size-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </span>
                    </div>
                </div>

                <?php if ($error_message): ?>
                    <p class="text-red-500 text-sm mt-1"><?php echo $error_message; ?></p>
                <?php endif; ?>

                <div class="flex items-center justify-between">
                    <p class="text-sm text-gray-500">
                        No account?
                        <a class="underline hover:text-blue-400" href="../auth/register.php">Sign up</a>
                    </p>

                    <button type="submit" class="flex rounded-lg bg-blue-400 pl-3 pr-5 py-3 text-sm font-medium text-white transition-all hover:bg-blue-500">
                    <i data-feather="log-in" class="mr-2"></i>    
                    Login
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script src="../js/script.js"></script>
    <script>
        feather.replace();
    </script>
</body>
</html>