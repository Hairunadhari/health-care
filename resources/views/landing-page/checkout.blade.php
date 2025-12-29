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
    <title>Checkout</title>
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
            padding: 2rem 0;
        }

        .price {
            text-align: end;
        }

        td {
            color: #64645f !important;
        }

    </style>
</head>

<body>
    <div class="checkout-container card w-50 mt-5" style="height: max-content">
        <div class="right-side card-body">
            <div class="receipt">
                <h4 class="receipt-heading">Detail Pesanan</h4>
                <div>
                    <table class="table table-borderless" style="border-bottom: 1px solid black;">
                        <tr>
                            <td>{{$data['dest']->nama_kota}}</td>
                            <td class="price">Rp {{number_format($data['dest']->harga, 0, ',', '.')}}</td>
                        </tr>
                        <tr>
                            <td>Jumlah Tiket</td>
                            <td class="price">x {{$data['data_pemesan']['qty']}}</td>
                        </tr>
                        <tr>
                            <td>Subtotal</td>
                            <td class="price">Rp {{number_format($data['dest']->harga * $data['data_pemesan']['qty'], 0, ',', '.')}}</td>
                        </tr>
                        <tr class="total" style="font-weight: 700;">
                            <td>Total</td>
                            <td class="price">Rp {{number_format($data['dest']->harga * $data['data_pemesan']['qty'], 0, ',', '.')}}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="payment-info">
                <h4 class="payment-heading">Detail Pembayaran</h4>
                <form class="form-box" action="/checkout/submit" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="full-name">Nama :</label>
                        <input id="full-name" name="name" value="{{$data['data_pemesan']['name']}}" required type="text"
                            class="form-control" />
                            <input type="hidden" name="jumlah_tiket" value="{{$data['data_pemesan']['qty']}}">
                            <input type="hidden" name="date" value="{{$data['data_pemesan']['date']}}">
                            <input type="hidden" name="kota_tujuan" value="{{$data['dest']->nama_kota}}">
                            <input type="hidden" name="no_telp" value="{{$data['data_pemesan']['no_telp']}}">
                            <input type="hidden" name="email" value="{{$data['data_pemesan']['email']}}">
                            <input type="hidden" name="total_harga" value="{{$data['dest']->harga * $data['data_pemesan']['qty']}}">
                    </div>

                    <div class="mb-3">
                        <label for="credit-card-num">Metode Pembayaran :
                        </label>
                        <div class="row m-auto">

                        <div class="form-check col-3 d-flex align-items-center gap-1">
                            <input class="form-check-input" type="radio" value="OVO" name="metode_bayar" id="flexRadioDefault1" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                                <img src="https://1.bp.blogspot.com/-rmLjPMKtx7k/XnK070LoSRI/AAAAAAAASbs/i2kIFlIzh0MUpnLZzeFoXgYN-a0EpZRvwCLcBGAsYHQ/s1600/OVO.png" style="width: 70px; " alt="">
                            </label>
                          </div>
                          <div class="form-check col-3 d-flex align-items-center gap-1">
                            <input class="form-check-input" type="radio" value="DANA" name="metode_bayar" id="flexRadioDefault2" >
                            <label class="form-check-label" for="flexRadioDefault2">
                                <img src="https://logos-download.com/wp-content/uploads/2022/01/Dana_Logo-2048x597.png" style="width: 70px; " alt="">
                            </label>
                          </div>
                          <div class="form-check col-3 d-flex align-items-center gap-1">
                            <input class="form-check-input" type="radio" value="MANDIRI" name="metode_bayar" id="flexRadioDefault3" >
                            <label class="form-check-label" for="flexRadioDefault3">
                                <img src="https://logos-download.com/wp-content/uploads/2016/06/Bank_Mandiri_logo_white_bg.png" style="width: 70px; " alt="">
                            </label>
                          </div>
                          <div class="form-check col-3 d-flex align-items-center gap-1">
                            <input class="form-check-input" type="radio" value="BCA" name="metode_bayar" id="flexRadioDefault4" >
                            <label class="form-check-label" for="flexRadioDefault4">
                                <img src="https://logos-download.com/wp-content/uploads/2017/03/BCA_logo_Bank_Central_Asia.png" style="width: 70px; " alt="">
                            </label>
                          </div>
                        </div>
                    </div>
                        <button type="submit" class="btn w-100  btn-outline-success ">
                            <i class="fa-solid fa-lock"></i> Bayar Sekarang
                        </button>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>
