
@extends('adminlte::page')

@section('title', 'Programas')

@section('content_header')
    <h1>Listado de Programas</h1>

@stop

@section('content')
    <div class="d-grid gap-2 d-md-block">
        <a type="button" href="{{route('form_registro_prg')}}"  class="btn btn-danger">adicionar</a>
    </div>
    <br>
    <table class="table" id="table-programs">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Codigo</th>
        <th scope="col">Nombre</th>
        <th scope="col">Facultad</th>
        <th scope="col">Opcion</th>
        </tr>
    </thead>
    <tbody>
        @php 
            $i = 1;
        @endphp

        @foreach($program as $p)
        <tr>
            <th scope="row">{{$i}}</th>
            <td> {{$p->codprograma}} </td>
            <td> {{$p->nomprograma}} </td>
            <td> {{$p->faculties->nomfacultad}} </td>
            <td>
                <div class="d-grid gap-2 d-md-block">
                    <button class="btn btn-success" type="button">Editar</button>
                    <button class="btn btn-danger" type="button">Eliminar</button>
                </div>
            </td>

            @php 
                $i = $i + 1;
            @endphp
        </tr>
        @endforeach
       
    </tbody> 
    </table>




@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
@stop

@section('js')
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
            $('#table-programs').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json"
                }
            });;
        });
    </script>
@stop




