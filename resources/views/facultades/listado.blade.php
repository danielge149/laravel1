
@extends('adminlte::page')

@section('title', 'Facultades')

@section('content_header')
    <h1>Listado de facultades </h1>
   
    @stop

@section('content')

    <div class="d-grid gap-2 d-md-block">
        <a class="btn btn-primary" href="/facultades/registrar" type="button">Agregar</a> 
    </div>
 
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Codigp</th>
                <th scope="col">Nombre</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach($faculty as $f)
                <tr>
                    <th scope="row">{{$i}}</th>
                    <td>{{$f->codfacultad}}</td>
                    <td>{{$f->nomfacultad}}</td>
                    <td>
                        <button type="button" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></button>
                        <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                    </td>
                    @php
                        $i=$i+1;
                    @endphp
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
       <script> console.log('Hi!'); </script>
@stop
    
    