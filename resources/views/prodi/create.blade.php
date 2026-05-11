@extends('main')

@section('title', 'Tambah Prodi')

@section('content')
<form action="{{route('prodi.store')}}" method="post">
    <div class="form-group">
        <label for="nama_prodi">Nama Program Studi</label> 
        <input type="text" name="nama_prodi" class="form-control" value="{{ old('nama_prodi') }}">
    </div>
    @error('nama_prodi')
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror

    <div class="form-group">
        <label for="singkatan">Singkatan</label>
        <input type="text" name="singkatan" class="form-control" 
        value="{{ old('singkatan') }}">
    </div>
    @error('singkatan')
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror
    
    <button type="submit" class="btn btn-primary mt-2">Simpan</button>
</form>
@endsection