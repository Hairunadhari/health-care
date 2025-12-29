<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/bb515311f9.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background: url('/assets-landingpage/img/1.jpg');
            background-position: center;
            background-size: cover;
            backdrop-filter: blur(8px);
            display: flex;
            justify-content: center;
            height: 100vh;
            font-family: 'Monsterrat', sans-serif;
            position: relative;
        }

        ._failed {
            border-bottom: solid 4px red !important;
        }

        ._failed i {
            color: red !important;
        }

        ._success {
            box-shadow: 0 15px 25px #00000019;
            padding: 45px;
            width: 100%;
            text-align: center;
            margin: 40px auto;
            border-bottom: solid 4px #28a745;
        }

        ._success i {
            font-size: 55px;
            color: #28a745;
        }

        ._success h2 {
            margin-bottom: 12px;
            font-size: 40px;
            font-weight: 500;
            line-height: 1.2;
            margin-top: 10px;
        }

        ._success p {
            margin-bottom: 0px;
            font-size: 18px;
            color: #495057;
            font-weight: 500;
        }
        img{
            width: 250px;
            border: 1px solid black
        }
    </style>
</head>

<body>
                <div class="row justify-content-center">
                    <div class="">
                        <div class="message-box _success card">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                            <h2> Pembayaran Anda berhasil </h2>
                            <div class="d-flex justify-content-center p-3">
                            <div>
                                    <img src="https://th.bing.com/th/id/R.7d32af55731422b6f24d40025c015e0b?rik=qYdE%2bEO%2fRbmmuw&riu=http%3a%2f%2f2.bp.blogspot.com%2f-qToihft8kR0%2fVFdAi8tHSvI%2fAAAAAAAAAJg%2ffSKgqQyB7tw%2fs1600%2fqrcode.png&ehk=Zkk6LUAHOWIlyBYxNDmmJZcWsRKUc3aN7lSPhYyY8c0%3d&risl=&pid=ImgRaw&r=0" class="mb-3" alt=""><br>
                                    <a href="/" class="btn btn-secondary" style="width: max-content">Back to Home</a>
                                    <div class="btn btn-danger" style="width: max-content">Download</div>
                                </div>
                            </div>
                                <p> Terima kasih atas pembayaran Anda. <br>
                                    Kami akan
segera hubungi detail lebih lanjut </p>
                        </div>
                    </div>
                </div>
                <hr>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>
