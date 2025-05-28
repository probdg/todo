<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="tailwind.js"></script>
</head>

<body>

    <?php session_start(); ?>
    <form method="post" action="prosess_login.php" class="max-w-sm mx-auto mt-10 p-6 bg-white rounded shadow">
        <!-- Example Tailwind Login Form -->
        <div class="min-h-screen flex items-center justify-center bg-blue-100">
            <div class="bg-white bg-opacity-50 p-8 rounded-lg shadow-md w-full max-w-sm">
                <div class="flex flex-col items-center mb-6">
                    <div class="w-20 h-20 rounded-full bg-blue-300 flex items-center justify-center mb-2">
                        <svg class="w-12 h-12 text-blue-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                        </svg>
                    </div>
                </div>
                <form>
                    <div class="mb-4">
                        <label class="block text-blue-700 mb-1" for="username">Username</label>
                        <div class="flex items-center border rounded px-3 py-2 bg-blue-50">
                            <svg class="w-5 h-5 text-blue-400 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <input class="bg-transparent outline-none w-full" name="username" type="text" id="username" placeholder="Username" />
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="block text-blue-700 mb-1" for="password">Password</label>
                        <div class="flex items-center border rounded px-3 py-2 bg-blue-50">
                            <svg class="w-5 h-5 text-blue-400 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m0-6a4 4 0 014 4v2a4 4 0 01-8 0v-2a4 4 0 014-4zm0 0V7a4 4 0 118 0v2" />
                            </svg>
                            <input class="bg-transparent outline-none w-full" name="password" type="password" id="password" placeholder="Password" />
                            <svg class="w-5 h-5 text-blue-400 ml-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0zm-6 0a6 6 0 1112 0 6 6 0 01-12 0z" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex items-center justify-between mb-6">
                        <label class="flex items-center text-blue-700 text-sm">
                            <input type="checkbox" class="form-checkbox text-blue-600 mr-2" />
                            Remember me
                        </label>
                        <a href="#" class="text-blue-500 text-sm hover:underline">Forgot password?</a>
                    </div>
                    <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition duration-200">
                        Login
                    </button>
                </form>
            </div>
        </div>
    </form>
    <?php
    if (isset($_SESSION["error"])) {
        echo "<p style='color: red;'>" . $_SESSION["error"] . "</p>";
        unset($_SESSION["error"]);
    }
    session_write_close();
    ?>
</body>

</html>