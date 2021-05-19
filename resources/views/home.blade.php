@extends('layouts/base')

@section('title' , 'Home')
    
@section('info')
    <h1>PAGINA MAIN</h1>

    @foreach ($cursos as $item)
        <li>{{ $item->nombre }}</li>
    @endforeach

    {{$cursos->links()}}

@endsection