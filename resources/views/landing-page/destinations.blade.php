@extends('landing-page.layouts.app')
@section('content')
<style>
    .image-container {
        position: relative;
        text-align: center;
    }

    .image-container img {
        width: 100%;
        height: auto;
        border-radius: 20px;
    }

    .title-overlay {
        position: absolute;
        bottom: 20px;
        left: 20px;
        color: white;
        font-size: 18px;
        font-weight: bold;
    }
    .icon{
        width: max-content;
        padding: 0px 5px 0px 5px;
        border-radius: 20px;
        border: 1px solid black;
    }
    .price{
        background-color: #1A1A1A;
        width: max-content;
        padding: 10px;
        color: white;
        border-radius: 20px;
    }
</style>

<div class=" p-5" id="destinations">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item">Destination</li>
      </ol>
    <h3 class="mb-3">Destinations</h3>

    @foreach ($data as $item)

    <div class="card mb-3" style="width: 100%;">
        <div class="row">
            <div class="col-5">
                <div class="image-container">
                    <img src="{{ Storage::url('image/' . $item->image) }}" style="height: 20rem; border-radius: 20px"
                        class="card-img-top p-2" alt="...">
                    <h5 class="title-overlay">{{$item->nama_kota}}</h5>
                </div>
            </div>
            <div class="col-7">
                <div class="card-body">
                    <h5 class="card-title">Description</h5>
                    <p class="card-text">{{$item->description}}</p>
                    <div class="price">
                      <p class="card-text"><i class="fa-solid fa-tag"></i> Rp {{ number_format($item->harga, 0, ',', '.') }} <small>/orang</small> </p>
                    </div>
                    <a href="/booking/{{$item->id}}" class="btn w-100 text-white mt-3 fw-bold" style="background-color: #01AAA7; border-radius: 20px">Book Now</a>
                </div>
             
            </div>
        </div>
        
       
    </div>

    @endforeach
</div>

<script>
    var qty = 0;

    function plus() {
        qty += 1;
        document.getElementById("qty").value = qty;
    };

    function min() {
        if (qty > 1 ) {
            qty -= 1;
            document.getElementById("qty").value = qty;
        }
    };
</script>

@endsection
