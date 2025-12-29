@extends('landing-page.layouts.app')
@section('content')
<style>
     .icon{
        width: max-content;
        padding: 0px 5px 0px 5px;
        border-radius: 20px;
        border: 1px solid black;
    }
</style>

<div class=" p-5" id="destinations">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home">Home</a></li>
        <li class="breadcrumb-item"><a href="/destinations">Destination</a></li>
        <li class="breadcrumb-item active" aria-current="page">Booking</li>
      </ol>
    <h3 class="mb-3">Booking Destination</h3>

    <div class="mb-3">
        <div class="row d-flex justify-content-center">
           <img style="height: 500px;  border-radius: 1rem"  src="{{ Storage::url('image/' . $data->image) }}" alt="">
        </div>
        <div class="row pt-4">
            <div class="col-8">
                {{$data->description}}
            </div>
            <div class="col-4">
                <div class="p-3" style="border: 2px solid rgb(0, 108, 228); border-radius: 10px">
                <form action="/checkout" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Name</label>
                      <input type="text" name="name" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email</label>
                      <input type="email" name="email" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">No Telp</label>
                      <input type="number" name="no_telp" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No telp">
                      <input type="hidden" name="id" value="{{$data->id}}" class="form-control" >
                    </div>
                    <div class="mb-3">
                      <label  class="form-label">Date</label>
                      <input type="date" name="date" required class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label for="">Jumlah Tiket</label>
                        <div class="d-flex gap-3 mt-2">
                            <div class="icon" id="min" onclick="min()">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <input type="text" required   name="qty" id="qty" readonly value="1" style="color: black; border:none; width: 20px;">
                            <div class="icon" id="plus" onclick="plus()">                                        
                                <i class="fa-solid fa-plus"></i>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" style="padding-inline: 40px" class="btn btn-primary">Booking</button>
                    </div>
                  </form>
                </div>

            </div>
        </div>
       
    </div>

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
