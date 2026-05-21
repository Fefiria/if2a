@extends('main')

@section('title', 'Fakultas')

@section('content')
<a href="{{route('fakultas.create')}}" class="btn btn-primary">Tambah</a>
<table class="table table-border">
        <tr>
            <th>No</th>
            <th>Nama Fakultas</th>
            <th>Singkatan</th>
            <th>Aksi</th>
        </tr>
        @foreach ($result as $key => $result)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $result->nama_fakultas }}</td>
                <td>{{ $result->singkatan }}</td>
                <td>
                    <form method="POST" action="{{ route('fakultas.destroy', $result->id) }}"
                        class="d-inline">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit" class="btn btn-xs btn-danger btn-rounded show_confirm"
                            data-toggle="tooltip" title='Delete'
                            data-nama='{{ $result->nama_fakultas }}'>Hapus
                        </button>
                        
                    </form>
                    <a href="{{ route('fakultas.edit', $result->id) }}"
                        class="btn btn-warning btn-rounded">
                        Edit
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection