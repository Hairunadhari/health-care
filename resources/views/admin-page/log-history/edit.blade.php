@extends('admin-page.layouts.app')
@section('content')
<div class="section-header">
    <h1 style="width:87%">Edit Destinasi</h1>
</div>
<div class="section-body">

    <div class="card">
        <div class="card-header">
            <h5>Form Edit Destinasi</h5>
        </div>
        <div class="card-body">
            <form action="/admin/destinations/update/{{$data->id}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label>Nama Kota <span style="color: red">*</span></label>
                    <input type="text" value="{{$data->nama_kota}}" class="form-control" name="nama_kota">
                </div>
                <div class="form-group">
                    <label>Description <span style="color: red">*</span></label>
                    <textarea class="form-control" name="description">{{$data->description}}</textarea>
                </div>
                <div class="form-group">
                    <label>Image <span style="color: red">*</span></label><br>
                    <img src="{{ Storage::url('image/' . $data->image) }}" alt="" style="width: 150px; margin-bottom: 10px;">
                    <input type="file"  accept=".jpg, .jpeg, .png" class="form-control" name="image">
                </div>
                <div class="form-group">
                    <label>Harga <span style="color: red">*</span></label>
                    <input type="number" value="{{$data->harga}}" class="form-control" name="harga">
                </div>
                <div class="form-group">
                    <label>No Telp Outlet <span style="color: red">*</span></label>
                    <input type="number" value="{{$data->no_telp_outlet}}" class="form-control" name="no_telp_outlet">
                </div>
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
