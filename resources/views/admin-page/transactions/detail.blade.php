@extends('admin-page.layouts.app')
@section('content')
<div class="section-header">
    <h1 style="width:87%">Detail Transaksi</h1>
</div>
<div class="section-body">

    <div class="card">
        <div class="card-header">
            <h5>Detail Transaksi</h5>
        </div>
        <div class="card-body">
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nama Pemesan </label>
                    <input type="text" readonly value="{{$data->nama_pemesan}}" class="form-control" name="nama_kota">
                </div>
                <div class="form-group">
                    <label>Kota Tujuan </label>
                    <input type="text" readonly value="{{$data->kota_tujuan}}" class="form-control" name="harga">
                </div>
                <div class="form-group">
                    <label>Email Pemesan </label>
                    <input type="text" readonly value="{{$data->email_pemesan}}" class="form-control" name="nama_kota">
                </div>
                <div class="form-group">
                    <label>No Telp Pemesan </label>
                    <input type="text" readonly value="0{{$data->no_telp_pemesan}}" class="form-control" name="nama_kota">
                </div>
                <div class="form-group">
                    <label>Total Harga </label>
                    <input type="text" readonly value="{{number_format($data->total_harga, 0, ',', '.')}}" class="form-control" name="harga">
                </div>
                <div class="form-group">
                    <label>Status Pembayaran </label>
                    <input type="text" readonly value="{{$data->status_pembayaran}}" class="form-control " name="harga">
                </div>
                <div class="form-group">
                    <label>Jumlah Tiket </label>
                    <input type="text" readonly value="{{$data->jumlah_tiket}}" class="form-control" name="harga">
                </div>
                <div class="form-group">
                    <label>Metode Pembayaran </label>
                    <input type="text" readonly value="{{$data->metode_bayar}}" class="form-control" name="harga">
                </div>
                <div class="form-group">
                    <label>Tanggal Keberangkatan </label>
                    <input type="datetime" readonly value="{{ date('d F Y', strtotime($data->tanggal_keberangkatan)) }}" class="form-control" name="harga">
                </div>
               
               
            </form>
        </div>
    </div>
</div>

@endsection
