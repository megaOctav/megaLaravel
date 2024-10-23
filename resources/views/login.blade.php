<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-b from-[#340505] to-[#FF001C] bg-cover bg-center h-screen flex justify-center items-center text-white" style="background-image: url('/css/hbg.jpg');">
    <form id="loginForm" class="w-72 p-5 bg-[#340505] rounded-lg shadow-lg text-center">
        <div class="mb-4">
            <label for="username" class="block font-bold mb-2 text-white">Username</label>
            <input type="text" name="username" id="username" class="w-full p-2 border border-[#FF001C] rounded bg-[#340505] text-white focus:outline-none focus:ring-2 focus:ring-[#FF001C]">
        </div>
        <div class="mb-4">
            <label for="password" class="block font-bold mb-2 text-white">Password</label>
            <input type="password" name="password" id="password" class="w-full p-2 border border-[#FF001C] rounded bg-[#340505] text-white focus:outline-none focus:ring-2 focus:ring-[#FF001C]">
        </div>
        <button type="submit" class="w-full py-2 bg-[#FF001C] text-white rounded hover:bg-[#340505] hover:text-[#FF001C] transition duration-300">LOGIN</button>
    </form>
    <script src="/asset/script.js"></script>
</body>
</html>
