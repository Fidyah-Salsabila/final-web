@extends('admin.layout')

@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <h1 class="m-0">{{ isset($tour) ? 'Ubah' : 'Tambah' }} Paket Wisata</h1>
            <a href="/admin/tour" class="btn btn-outline-primary">
                Kembali
            </a>
        </div>
    </div>
</div>
@endsection

@section('content')
    <div class="container-fluid">
        <form action="{{ isset($tour) ? "/admin/tour/update/{$tour->id}" : '/admin/tour' }}"  enctype="multipart/form-data" method="POST" >
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputFile">Gambar</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input @error('image') is-invalid @enderror" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Pilih Gambar</label>
                            </div>
                            @error('image')
                                <div class="invalid-feedback">  
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Nama Paket</label>
                        <input type="text" name="name" value="{{ old('name') ?? $tour->name ?? ''  }}" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Masukan nama">
                        @error('name')
                        <div class="invalid-feedback">  
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="address">Harga</label>
                        <input type="number" name="price" value="{{ old('price') ?? $tour->price ?? '' }}" class="form-control @error('price') is-invalid @enderror" id="price" placeholder="Masukan harga">
                        @error('price')
                        <div class="invalid-feedback">  
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="address">Rating</label>
                        <input type="number" name="rating" value="{{ old('rating') ?? $tour->rating ?? '' }}" class="form-control @error('rating') is-invalid @enderror" id="rating" placeholder="Masukan rating">
                        @error('rating')
                        <div class="invalid-feedback">  
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="location">Lokasi</label>
                        <input type="text" name="location" value="{{ old('location') ?? $tour->location ?? '' }}" class="form-control @error('location') is-invalid @enderror" id="location" placeholder="Masukan lokasi">
                        @error('location')
                        <div class="invalid-feedback">  
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="3" placeholder="Masukan deskripsi">{{ old('description') ?? $tour->description ?? '' }}</textarea>
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