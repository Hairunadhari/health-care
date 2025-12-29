<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-HEALTH CARE - SIKSIK</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Background Utama dengan Overlay Biru sesuai Gambar */
        .bg-hero {
            background: linear-gradient(rgba(45, 85, 155, 0.75), rgba(45, 85, 155, 0.75)), 
                        url('https://images.unsplash.com/photo-1584622650111-993a426fbf0a?auto=format&fit=crop&q=80&w=1920');
            background-size: cover;
            background-position: center;
        }
        
        /* Font styling agar lebih mirip */
        body { font-family: 'Arial', sans-serif; }
    </style>
</head>
<body class="bg-hero min-h-screen text-white flex flex-col">
@include('landing-page.layouts.navbar')
   @yield('content')

    

</body>
</html>