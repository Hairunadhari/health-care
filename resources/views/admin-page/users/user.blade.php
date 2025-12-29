@extends('admin-page.layouts.app')
@section('content')
<div class="section-header">
    <h1>Users</h1>
    
</div>
<div class="section-body">
  

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create">
                    <span class="text">+ Create New</span>
                </button>
                    <div class="card-header-form">
                      <form id="filter" action="/admin/users" method="GET">
                        <div class="input-group">
                          <input type="text" class="form-control" id="search" name="search" value="" placeholder="Search">
                        </div>
                      </form>
                      </div>
                    
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped table-md">
                        <tbody>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>No Telp</th>
                                <th>Action</th>
                        </tr>
                        @forelse ($data as $item)
                        <tr>
                          <td>{{ $data->firstItem() + $loop->index }}</td>
                          <td>{{$item->name}}</td>
                          <td>{{$item->email}}</td>
                          <td>{{$item->no_telp}}</td>
                          <td>
                            <form action="/admin/users/delete/{{$item->id}}" method="POST" onsubmit="return confirm('yakin mau hapus?');">
                              <span><button type="button" class="btn btn-warning"data-toggle="modal" data-target="#edit">
                                <i class="far fa-edit"></i>Edit
                                </button></span>
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <input type="hidden" name="_method" value="DELETE">
                              <button class="btn btn-danger" type="submit"><i class="far fa-trash-alt"></i> Hapus</button>
                              </form>
                          </td>
                    </tr>
                           
                       @empty
                       <tr>
                        <td colspan="5" class="align-items-center text-center text-nowrap">Empty</td>
                    </tr>
                       @endforelse
                      </tbody>
                    </table>
                    </div>
                    <div class="float-right">
                      {{ $data->links('pagination::bootstrap-4') }}
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
                <h5 class="modal-title" id="createLabel">Form Input User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/admin/users/submit" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama <span style="color: red">*</span></label>
                        <input name="name" class="form-control" type="text" required>
                    </div>
                    <div class="form-group">
                        <label>Email <span style="color: red">*</span></label>
                        <input name="email" class="form-control" type="email" required>
                    </div>
                    <div class="form-group">
                        <label>No Telp <span style="color: red">*</span></label>
                        <input name="no_telp" class="form-control" type="number" required>
                    </div>
                    <div class="form-group">
                        <label>Password <span style="color: red">*</span></label>
                        <input name="password" class="form-control" type="password" required>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

@foreach ($data as $item)
<!-- Modal EDIT-->

<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="createLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createLabel">Form Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/admin/users/update/{{$item->id}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama <span style="color: red">*</span></label>
                        <input name="name" value="{{$item->name}}" class="form-control" type="text" required>
                    </div>
                    <div class="form-group">
                        <label>Email <span style="color: red">*</span></label>
                        <input name="email" value="{{$item->email}}" class="form-control" type="email" required>
                    </div>
                    <div class="form-group">
                        <label>No Telp <span style="color: red">*</span></label>
                        <input name="no_telp" value="{{$item->no_telp}}" class="form-control" type="text" required>
                    </div>
                    <div class="form-group">
                        <label>Password <span style="color: red">*</span></label>
                        <input name="password" value="{{$item->password}}" class="form-control" type="password" required>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endforeach
@endsection
