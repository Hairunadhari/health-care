@extends('admin-page.layouts.app')
@section('content')
<div class="section-header">
    <h1 style="width:87%">Detail User</h1>
</div>
<div class="section-body">

    <div class="card">
        <div class="card-header">
            <h5>Detail User</h5>
        </div>
        <div class="card-body">
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nama </label>
                    <input type="text" readonly value="Irwansyah Saputra" class="form-control" name="nama_kota">
                </div>
                <div class="form-group">
                    <label>Email </label>
                    <input type="text" readonly value="IrwansyahSaputra@gmail.com" class="form-control" name="nama_kota">
                </div>
                <div class="form-group">
                    <label>No Telp </label>
                    <input type="text" readonly value="081812718271" class="form-control" name="nama_kota">
                </div>
              
               
            </form>
        </div>
    </div>
</div>

@endsection
