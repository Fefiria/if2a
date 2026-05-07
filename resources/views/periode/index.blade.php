@extends('main')

@section('content')
    <h1>Periode</h1>
    @foreach ($result as $item)
        {{$item->tahun_akademik}} -  {{$item->semester}} <br> 
    @endforeach
@endsection