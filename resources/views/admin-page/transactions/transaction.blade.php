@extends('admin-page.layouts.app')
@section('content')
<div class="section-header">
    <h1>Transactions</h1>

</div>
<div class="section-body">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Table Transaction</h4>
                    <div class="card-header-form">
                        <form id="filter" action="/admin/transactions" method="GET">
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
                                    <th>Nama</th>
                                    <th>Kota Tujuan</th>
                                    <th>Email</th>
                                    <th>Total Harga</th>
                                    <th>Status Pembayaran</th>
                                    <th>Jumlah Tiket</th>
                                    <th>Action</th>
                                </tr>
                                @forelse ($datas as $item)
                                <tr>
                                    <td>{{ $datas->firstItem() + $loop->index }}</td>
                                    <td>{{$item->nama_pemesan}}</td>
                                    <td>{{$item->kota_tujuan}}</td>
                                    <td>{{$item->email_pemesan}}</td>
                                    <td>Rp {{number_format($item->total_harga, 0, ',', '.')}}</td>
                                    <td><span class="btn btn-outline-success">{{$item->status_pembayaran}}</span></td>
                                    <td>{{$item->jumlah_tiket}}</td>
                                    <td><a href="/admin/transactions/detail/{{$item->id}}"
                                            class="btn btn-info">Detail</a></td>
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
