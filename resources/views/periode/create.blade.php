@extends('main')

@section('title', 'Tambah Periode')

@section('content')
<form action="{{route('periode.store')}}" method="post">
    <div class="form-group">
        <label for="tahun_akademik">Tahun Akademik</label> 
        <input type="text" name="tahun_akademik" class="form-control" value="{{ old('tahun_akademik') }}">
    </div>
    @error('tahun_akademik')
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror

    <div class="form-group">
        <label for="semester">Semester</label>
        <input type="text" name="semester" class="form-control" 
        value="{{ old('semester') }}">
    </div>
    @error('semester')
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror

    <button type="submit" class="btn btn-primary mt-2">Simpan</button>
</form>
@endsection