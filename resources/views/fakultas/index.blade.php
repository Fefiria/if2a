@extends('main')

@section('title', 'Fakultas')

@section('content')
<a href="{{route('fakultas.create')}}" class="btn btn-primary">Tambah</a>
<table class="table table-border">
        <tr>
            <th>No</th>
            <th>Nama Fakultas</th>
            <th>Singkatan</th>
        </tr>
        @foreach ($result as $key => $result)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $result->nama_fakultas }}</td>
                <td>{{ $result->singkatan }}</td>
            </tr>
        @endforeach
    </table>
@endsection