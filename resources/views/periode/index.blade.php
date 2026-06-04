@extends('main')

@section('title', 'Periode')

@section('content')
<a href="{{route('periode.create')}}" class="btn btn-primary">Tambah Periode</a>
<table class="table table-border">
    <table class="table table-border">
        <tr>
            <th>No</th>
            <th>Tahun Akademik</th>
            <th>Semester</th>
            <th>Aksi</th>
        </tr>
        @foreach ($result as $item => $periode)
            <tr>
                <td>{{$item + 1 }}</td>
                <td>{{$periode->tahun_akademik}}</td>
                <td>{{$periode->semester}}</td>
                <td>
                    <form method="POST" action="{{ route('periode.destroy', $periode->id) }}">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit" class="btn btn-xs btn-danger btn-rounded show_confirm"
                            data-toggle="tooltip" title='Delete'
                            data-nama='{{ $periode->semester }}'>Hapus
                        </button>
                    </form>
                    <a href="{{ route('periode.edit', $periode->id) }}"
                    class="btn btn-warning btn-sm">
                    Edit
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection