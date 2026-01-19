@extends('admin-page.layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('library/datatables/media/css/jquery.dataTables.min.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">

<div class="section-header">
    <h1 class="w-100">Aktifitas Penggunaan Obat</h1>
    {{-- <h4 class="w-100">Table Destination</h4> --}}
    
</div>
<div class="section-body">
  

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5>Table Data</h5>
                 
                    {{-- <div class="card-header-form">
                      <form id="filter" action="/admin/destinations" method="GET">
                        <div class="input-group">
                          <input type="text" class="form-control" id="search" name="search" value="" placeholder="Search">
                        </div>
                      </form>
                    </div> --}}
                  </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped table-md" id="table-z">
                        <tbody>
                            <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Jam Minum Obat</th>
                          <th>Tanggal Minum Obat</th>
                        </tr>
                        
                        @foreach($datas as $data)
                        <tr>
                            <td>{{ $datas->firstItem() + $loop->index }}</td>
                            <td >{{$data->user->name ?? '-'}}</td>
                            <td>{{$data->jam ?? '-'}}</td>
                            <td>{{$data->tanggal ?? '-'}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    </div>
                    <div class="float-right">
                        {{ $datas->links('pagination::bootstrap-4') }}
                      </div>
                  </div>
            </div>
        </div>
    </div>

</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById('search').addEventListener('input', function() {
            document.getElementById('filter').submit();
        });
    });
const urlParams = new URLSearchParams(window.location.search);
const searchQuery = urlParams.get('search');

document.addEventListener("DOMContentLoaded", function() {
    const searchInput = document.getElementById('search');

    if (searchQuery) {
        searchInput.value = searchQuery;
    }
});
</script>
@endsection
@section('modal')
<!-- Modal -->

<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="createLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createLabel">Form Input Destinasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/admin/destinations/submit" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Kota <span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="nama_kota" required>
                    </div>
                    <div class="form-group">
                        <label>Description <span style="color: red">*</span></label>
                        <textarea class="form-control" name="description" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Image <span style="color: red">*</span></label>
                        <input type="file" accept=".jpg, .jpeg, .png" class="form-control" name="image" required>
                    </div>
                    <div class="form-group">
                        <label>Harga <span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="harga" required>
                    </div>
                    <div class="form-group">
                        <label>No Telp Outlet <span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="no_telp_outlet" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
