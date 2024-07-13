@extends('admin.layout')

@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <h1 class="m-0">{{ isset($destination) ? 'Ubah' : 'Tambah' }} Destinasi</h1>
            <a href="/admin/destination" class="btn btn-outline-primary">
                Kembali
            </a>
        </div>
    </div>
</div>
@endsection

@section('content')
    <div class="container-fluid">
        <form action="{{ isset($destination) ? "/admin/destination/update/{$destination->id}" : '/admin/destination' }}" enctype="multipart/form-data" method="POST" >
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputFile">Gambar</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input @error('image') is-invalid @enderror" id="image">
                                <label class="custom-file-label" for="image">Pilih Gambar</label>
                            </div>
                            @error('image')
                            <div class="invalid-feedback">  
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Nama Destinasi</label>
                        <input type="text" name="name" value="{{ old('name') ?? $destination->name ?? '' }}" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Masukan nama">
                        @error('name')
                        <div class="invalid-feedback">  
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="address">Alamat Destinasi</label>
                        <input type="text" name="address" value="{{ old('address') ?? $destination->address ?? '' }}" class="form-control @error('address') is-invalid @enderror" id="address" placeholder="Masukan alamat">
                        @error('address')
                        <div class="invalid-feedback">  
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="3" placeholder="Masukan deskripsi">{{ old('description') ?? $destination->description ?? '' }}</textarea>
                        @error('description')
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