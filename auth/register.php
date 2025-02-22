<?php

include('../include/db.php');

$error_message = "";
$success_message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (Nama_Lengkap, email, username, password) VALUES ('$fullname', '$email', '$username', '$password')";
    if ($conn->query($sql) === TRUE) {
        $success_message = "Account created successfully!";
    } else {
        $error_message = "Error: Account has been registered!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../src/output.css" rel="stylesheet">
    <title>Register E-Library SMK Merdeka Bandung</title>
</head>
<body class="flex items-center justify-center h-screen bg-[url('../img/bg.jpg')] bg-cover bg-center bg-gray-800">
    <div class="bg-white p-6 rounded-xl shadow-lg w-11/12 sm:w-96 lg:w-2/5">
        <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-lg text-center">
                <h1 class="text-2xl font-bold sm:text-3xl">Register Account E-Library</h1>
                <p class="mt-4 text-gray-500">
                    Welcome To Register E-Library SMK Merdeka Bandung
                </p>
            </div>

            <?php if (!empty($success_message)): ?>
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mt-7" role="alert">
                    <span class="block sm:inline"><?php echo $success_message; ?></span>
                </div>
            <?php endif; ?>

            <form action="" method="POST" class="mx-auto mb-0 mt-10 max-w-md space-y-4">
                <div>
                    <label for="fullname" class="sr-only">Nama Lengkap</label>
                    <div class="relative">
                        <input type="text" name="fullname" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-lg" placeholder="Nama Lengkap" required />
                        <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                        </span>
                    </div>
                </div>
                <div>
                    <label for="email" class="sr-only">Email</label>
                    <div class="relative">
                        <input type="email" name="email" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-lg" placeholder="Email" required />
                        <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                        </span>
                    </div>
                </div>
                <div>
                    <label for="username" class="sr-only">Username</label>
                    <div class="relative">
                        <input type="text" name="username" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-lg" placeholder="Username" required />
                        <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                        </span>
                    </div>
                </div>

                <div>
                    <label for="password" class="sr-only">Password</label>
                    <div class="relative">
                        <input type="password" id="password" name="password" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-lg" placeholder="Password" required />
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
                <?php if ($success_message): ?>
                    <p class="text-green-500 text-sm mt-1"><?php echo $success_message; ?></p>
                <?php endif; ?>

                <div class="flex items-center justify-between">
                    <p class="text-sm text-gray-500">
                        Have already an account?
                        <a class="underline hover:text-blue-400" href="../auth/login.php">Sign in</a>
                    </p>

                    <button type="submit" class="inline-block rounded-lg bg-blue-400 px-5 py-3 text-sm font-medium text-white transition-all hover:bg-blue-500">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script src="../js/script.js"></script>
</body>
</html>