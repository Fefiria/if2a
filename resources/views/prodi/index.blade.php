@extends('main')

@section('title', 'Data Program Studi')

@section('content')
    <a href="{{route('prodi.create')}}" class="btn btn-primary">Tambah Periode</a>
    <table class="table table-border">
        <tr>
            <th>No</th>
            <th>Nama Program Studi</th>
            <th>Singkatan</th>
            <th>Kaprodi</th>
            <th>Fakultas</th>
            <th>Singkatan Fakultas</th>
        </tr>
        @foreach ($prodis as $key => $prodi)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $prodi->nama_prodi }}</td>
                <td>{{ $prodi->singkatan }}</td>
                <td>{{ $prodi->kaprodi }}</td>
                <td>{{ $prodi->fakultas->nama_fakultas ?? '-'}}</td>
                <td>{{ $prodi->fakultas->singkatan ?? '-'}}</td>
            </tr>
        @endforeach
    </table>
@endsection