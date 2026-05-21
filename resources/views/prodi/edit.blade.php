@extends('main')

@section('title', 'Edit Prodi')

@section('content')
<form action="{{route('prodi.update', $prodi->id)}}" method="POST">
    @method('PUT')
    <div class="form-group">
        <label for="nama_prodi">Nama Program Studi</label> 
        <input type="text" name="nama_prodi" class="form-control" value="{{ old('nama_prodi')  ?? $prodi->nama_prodi}}">
    </div>
    @error('nama_prodi')
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror

    <div class="form-group">
        <label for="singkatan">Singkatan</label>
        <input type="text" name="singkatan" class="form-control" 
        value="{{ old('singkatan')  ?? $prodi->singkatan}}">
    </div>
    @error('singkatan')
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror

    <div class="form-group mb-3">
        <label for="kaprodi">Nama Kaprodi</label>
        <input type="text" name="kaprodi" class="form-control" value="{{ old('kaprodi') ?? $prodi->kaprodi}}">
    </div>
    @error('kaprodi')
        <div class="text-danger small mt-1">{{ $message }}</div>
    @enderror

    <div class="form-group mb-3">
        <label for="fakultas_id">Fakultas</label>
        <select name="fakultas_id" class="form-control">
            <option value="">-- Pilih Fakultas --</option>
            @foreach ($fakultas as $f)
                <option value="{{ $f->id }}" {{ (old('fakultas_id') == $f->id ? 'selected' : ($prodi->fakultas_id == $f->id ? 'selected' : ""))}}>
                    {{ $f->nama_fakultas }}
                </option>
            @endforeach
        </select>
    </div>
    @error('fakultas_id')
        <div class="text-danger small mt-1">{{ $message }}</div>
    @enderror
    
    <button type="submit" class="btn btn-primary mt-2">Simpan</button>
</form>
@endsection