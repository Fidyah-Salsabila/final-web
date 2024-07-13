@extends('admin.layout')

@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <h1 class="m-0">Daftar Admin</h1>
            <a href="/admin/admin/create" class="btn btn-primary">
                Tambah Admin
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
                      <th scope="col">Nama</th>
                      <th scope="col">Username</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $i => $item)
                    <tr>
                      <th scope="row">{{ $i+1 }}</th>
                      <td>{{ $item->name }}</td>
                      <td>{{ $item->username }}</td>
                      <td>
                        <a href="/admin/admin/show/{{ $item->id }}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="/admin/admin/delete/{{ $item->id }}" onclick="return confirm('yakin ingin hapus ?')" class="btn btn-sm btn-danger">Hapus</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
              </table>
          </div>
      </div>
    </div>
@endsection