@extends('main')

@section('title', 'Data Program Studi')

@section('content')
    <a href="{{route('prodi.create')}}" class="btn btn-primary">Tambah Program Studi</a>
    <table class="table table-border">
        <tr>
            <th>No</th>
            <th>Nama Program Studi</th>
            <th>Singkatan</th>
            <th>Kaprodi</th>
            <th>Fakultas</th>
            <th>Singkatan Fakultas</th>
            <th>Aksi</th>
        </tr>
        @foreach ($prodis as $key => $prodi)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $prodi->nama_prodi }}</td>
                <td>{{ $prodi->singkatan }}</td>
                <td>{{ $prodi->kaprodi }}</td>
                <td>{{ $prodi->fakultas->nama_fakultas ?? '-'}}</td>
                <td>{{ $prodi->fakultas->singkatan ?? '-'}}</td>
                <td>
                    <form method="POST" action="{{ route('fakultas.destroy', $prodi->id) }}">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit" class="btn btn-xs btn-danger btn-rounded show_confirm"
                            data-toggle="tooltip" title='Delete'
                            data-nama='{{ $prodi->nama_prodi }}'>Hapus
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection