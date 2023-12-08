
@extends('adminlte::page')

@section('title', 'Facultades')

@section('content_header')
    <h1>Listado de Facultades</h1>

@stop

@section('content')
    <div class="d-grid gap-2 d-md-block">
        <a type="button" href="{{route('form_registro_fac')}}"  class="btn btn-danger">adicionar</a>
    </div>
    
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Codigo</th>
        <th scope="col">Nombre</th>
        <th scope="col">Opcion</th>
        </tr>
    </thead>
    <tbody>
        @php
            $i = 1;

        @endphp
        @foreach($faculty as $f)
        <tr>
            <th scope="row">{{$i}}</th>
            <td> {{$f->codfacultad}} </td>
            <td> {{$f->nomfacultad}} </td>
            <td>
                <div class="d-grid gap-2 d-md-block">
                    <a href="{{route('editar_fac', $f->codfacultad)}}" class="btn btn-success" >Editar</a>
                    <a href="{{route('eliminar_fac', $f->codfacultad)}}" class="btn btn-danger" >Eliminar</a>
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
@stop




