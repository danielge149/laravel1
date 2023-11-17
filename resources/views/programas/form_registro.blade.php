@extends('adminlte::page')

@section('title', 'Programas')

@section('content_header')
    <!-- Encabezado del contenido, si es necesario -->
@stop

@section('content')
    <form action="{{ url('/programas/registrar') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="cod_programa" class="form-label">Código de Programa</label>
            <input type="text" class="form-control" id="cod_programa" name="cod_programa">
        </div>
        <div class="mb-3">
            <label for="nom_programa" class="form-label">Nombre de Programa</label>
            <input type="text" class="form-control" id="nom_programa" name="nom_programa">
        </div>
        <div class="mb-3">
            <label for="nom_facultad" class="form-label">Nombre Facultad</label>
            <select class="form-select" id="nom_facultad" name="nom_facultad" >
        <!-- Aquí puedes agregar opciones para cada facultad -->
                <option value="" disabled selected>Seleccione Facultad</option>

                @foreach($faculty as $f)
                    <option value="{{$f->codfacultad }}">{{$f->nomfacultad}}</option>
                @endforeach
        <!-- Puedes agregar más opciones según tus necesidades -->
            </select>
        </div>
        
        <button type="submit" class="btn btn-success">Registrar</button>
    </form>
@stop

@section('css')
    <!-- Estilos adicionales, si es necesario -->
@stop

@section('js')
    <!-- Scripts JavaScript adicionales, si es necesario -->
@stop
