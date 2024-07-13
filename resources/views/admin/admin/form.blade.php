@extends('admin.layout')

@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <h1 class="m-0">{{ isset($user) ? 'Ubah' : 'Tambah' }} Admin</h1>
            <a href="/admin/admin" class="btn btn-outline-primary">
                Kembali
            </a>
        </div>
    </div>
</div>
@endsection

@section('content')
    <div class="container-fluid">
        <form action="{{ isset($user) ? "/admin/admin/update/{$user->id}" : '/admin/admin' }}"  enctype="multipart/form-data" method="POST" >
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="name" value="{{ old('name') ?? $user->name ?? ''  }}" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Masukan nama">
                        @error('name')
                        <div class="invalid-feedback">  
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" value="{{ old('username') ?? $user->username ?? '' }}" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Masukan username">
                        @error('username')
                        <div class="invalid-feedback">  
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Masukan password">
                        @error('password')
                        <div class="invalid-feedback">  
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-primary ml-2">Simpan</button>
                </div>
            </div>
        </form>
    </div>
@endsection