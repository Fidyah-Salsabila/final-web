@extends('admin.layout')

@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <h1 class="m-0">Daftar Paket Wisata</h1>
            <a href="/admin/tour/create" class="btn btn-primary">
                Tambah Paket Wisata
            </a>
        </div>
    </div>
</div>
@endsection

@section('content')
    <div class="container-fluid">
      @session('success')
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endsession
      <div class="card">
          <div class="card-body">
              <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Paket Wisata</th>
                      <th scope="col">Deskripsi</th>
                      <th scope="col">Lokasi</th>
                      <th scope="col">Harga</th>
                      <th scope="col">Rating</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $i => $item)
                    <tr>
                      <th scope="row">{{ $i+1 }}</th>
                      <td>{{ $item->name }}</td>
                      <td>{{ $item->description }}</td>
                      <td>{{ $item->location }}</td>
                      <td>Rp {{ number_format($item->price) }}</td>
                      <td>
                        @for ($i = 1; $i <= $item->rating; $i++)
                        <i class="bi bi-star-fill text-warning"></i>
                        @endfor
                        @for ($i = 1; $i <= 5 - $item->rating; $i++)
                          <i class="bi bi-star text-warning"></i>
                        @endfor
                      </td>
                      <td>
                        <a href="/admin/tour/show/{{ $item->id }}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="/admin/tour/delete/{{ $item->id }}" onclick="return confirm('yakin ingin hapus ?')" class="btn btn-sm btn-danger">Hapus</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
              </table>
          </div>
      </div>
    </div>
@endsection