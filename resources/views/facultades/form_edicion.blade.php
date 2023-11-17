
@extends('adminlte::page')

@section('title', 'Materias')

@section('content_header')
    <!-- resources/views/formulario.blade.php -->


@stop

@section('content')
    
    <form action="{{url('/facultades/editar', $faculty->codfacultad)}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="cod_facultad" class="form-label">Codigo facultad</label>
            <input type="text" class="form-control" id="cod_facultad" name="cod_facultad" value="{{$faculty->codfacultad}}">
        </div>
        <div class="mb-3">
            <label for="nom_facultad" class="form-label">Password</label>
            <input type="text" class="form-control" id="nom_facultad" name="nom_facultad" value="{{$faculty->nomfacultad}}">
        </div>
        
        <button type="submit" class="btn btn-success">Registrar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
       <script> console.log('Hi!'); </script>
@stop
    