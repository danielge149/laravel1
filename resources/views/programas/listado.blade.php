
@extends('adminlte::page')

@section('title', 'Programas')

@section('content_header')
    <h1>Listado de programas</h1>
@stop

@section('content')
<div style="text-align: right;">
        <button type="button" class="btn btn-success">Registrar</button>
    </div>
 
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Codigp</th>
                <th scope="col">Programa</th>
                <th scope="col">facultad</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach($program as $p)
                <tr>
                    <th scope="row">{{$i}}</th>
                    <td>{{$p->codprograma}}</td>
                    <td>{{$p->nomprograma}}</td>
                    <td>{{$p->nomfacultad}}</td>
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
    
    