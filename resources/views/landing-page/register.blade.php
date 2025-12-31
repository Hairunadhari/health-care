<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration - SIKSIK</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .bg-medical {
            background: url('/assets-landingpage/img/home.jpeg');
            background-size: cover;
            background-position: center;
        }

        /* Membuat lengkungan di sisi kanan */
        .right-curve {
            background-color: #6D92D0;
            /* Warna biru sesuai gambar */
            border-top-left-radius: 100% 90%;
            border-bottom-left-radius: 100% 90%;
        }

    </style>
</head>

<body class="bg-medical min-h-screen flex items-center justify-center overflow-hidden font-sans">

    <div class="w-full h-screen flex flex-col md:flex-row">

        <div class="w-full md:w-3/5 flex flex-col justify-center px-12 lg:px-24 relative">
            <div class="flex items-center gap-3 mb-10 text-white">
                <i class="fas fa-pills text-4xl"></i>
                <h1 class="text-5xl font-extrabold tracking-tight">Registraion</h1>
            </div>

            <form action="/register" method="POST" class="space-y-6 max-w-md">
                @csrf
                <div class="relative">
                    <input type="text" name="username" placeholder="Username..."
                        class="w-full bg-gray-300/60 placeholder-black text-black py-4 px-6 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-400">
                    <i class="fas fa-user absolute right-6 top-5 text-black text-xl"></i>
                </div>

                <div class="relative">
                    <input type="email" name="email" placeholder="Email..."
                        class="w-full bg-gray-300/60 placeholder-black text-black py-4 px-6 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-400">
                    <i class="fas fa-envelope absolute right-6 top-5 text-black text-xl"></i>
                </div>

                <div class="relative">
                    <input type="password" name="password" placeholder="Password..."
                        class="w-full bg-gray-300/60 placeholder-black text-black py-4 px-6 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-400">
                    <i class="fas fa-lock absolute right-6 top-5 text-black text-xl"></i>
                </div>
            </form>

            <div class="absolute bottom-10 left-24 md:left-32 w-64 h-64 pointer-events-none">
                <i class="fas fa-plus-square absolute left-0 bottom-6 text-white text-6xl opacity-20"></i>
                <i class="fas fa-plus-square absolute left-12 bottom-0 text-white text-5xl opacity-40"></i>
                <i class="fas fa-plus-square absolute left-28 bottom-10 text-white text-4xl opacity-60"></i>

                <i class="fas fa-plus-square absolute left-6 bottom-20 text-white text-7xl opacity-15"></i>
                <i class="fas fa-plus-square absolute left-32 bottom-28 text-white text-6xl opacity-30"></i>
                <i class="fas fa-plus-square absolute left-48 bottom-14 text-white text-5xl opacity-50"></i>
            </div>


        </div>

        <div class="hidden md:flex w-2/5 right-curve flex-col justify-center items-center text-white text-center p-10">
            <h2 class="text-6xl font-bold mb-4 italic">Welcomeback!</h2>
            <p class="text-xl tracking-widest font-semibold mb-8 uppercase">Sudah punya akun?</p>

            <a href="/login"
                class="group flex items-center gap-3 text-2xl font-bold hover:scale-110 transition-transform">
                <i class="far fa-arrow-alt-circle-right text-3xl"></i>
                LOGIN
            </a>

            <div class="w-64 h-1 bg-blue-900/50 mt-2 rounded-full shadow-lg"></div>
        </div>

    </div>

</body>

</html>
