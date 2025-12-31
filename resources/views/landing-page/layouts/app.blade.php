<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-HEALTH CARE - SIKSIK</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            overflow-x: hidden;
        }

        .bg-custom-blue {
            background-color: #6089d3;
        }

        /* Memastikan container slider memiliki tinggi yang cukup */
        .slider-container {
            min-height: calc(100vh - 80px);
            position: relative;
        }

    </style>
</head>

<body class="bg-white min-h-screen flex flex-col">
@include('landing-page.layouts.navbar')
   @yield('content')

    

</body>
</html>