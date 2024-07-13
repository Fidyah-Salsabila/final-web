@extends('admin.layout')

@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <h1 class="m-0">Daftar Destinasi</h1>
            <a href="/admin/destination/create" class="btn btn-primary">
                Tambah Destinasi
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
                      <th scope="col">Gambar</th>
                      <th scope="col">Destinasi</th>
                      <th scope="col">Alamat</th>
                      <th scope="col">Deskripsi</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $i => $item)
                    <tr>
                      <th scope="row">{{ $i+1 }}</th>
                      <td><img src="{{ asset('storage/' . $item->image) }}" alt="" width="100"></td>
                      <td>{{ $item->name }}</td>
                      <td>{{ $item->address }}</td>
                      <td>{{ $item->description }}</td>
                      <td>
                        <a href="/admin/destination/show/{{ $item->id }}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="/admin/destination/delete/{{ $item->id }}" onclick="return confirm('yakin ingin hapus ?')" class="btn btn-sm btn-danger">Hapus</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
              </table>
          </div>
      </div>
    </div>
@endsection