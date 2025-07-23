@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Gestionar Equipos</h1>
@stop

@section('content')
<a href="{{ route('equipo.create')}}" class="btn btn-info">Crear Nuevo Equipo</a>


<div class="col-12">

<table class="table" id="myTable">
    <thead>
        <tr>
            <td>Id </td>
            <td>Nombre </td>
            <td>Ciudad </td>
            <td>Pais </td>
            <td>Fundacion </td>
            <td>Liga </td> 
            <td>Opciones</td>      
        </tr>
        <tbody>
            @foreach ($equipos as $equipo)
            <tr>
                <td>{{$equipo->id}}</td>
                <td>{{$equipo->nombre}}</td>
                <td>{{$equipo->ciudad}}</td>
                <td>{{$equipo->pais}}</td>
                <td>{{$equipo->fundacion}}</td>
                <td>{{$equipo->liga}}</td>
                <td>
                    <a href="{{ route('equipo.edit', 
                    $equipo->id)}}" class="btn btn-success mt-3">Editar</a>

                    <form action="{{ route('equipo.destroy', $equipo->id) }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-danger mt-3" id="eliminar" >Eliminar</button>
                    </form>
                    
                </td>

            </tr>
            @endforeach

        </tbody>
    </thead>
</table>

</div>




@if(session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: '¡Éxito!',
                text: '{{ session('success') }}',
                confirmButtonText: 'Aceptar',
                timer: 3000
            });
        });
    </script>
@endif

    <a href="{{ route('index')}}" class="btn btn-success mt-3">Volver</a>

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script>
        $(document).ready( function () {
                $('#myTable').DataTable();
            } );
    </script>

    <script>
    $('#eliminar').click(function(e) {
        e.preventDefault();
        var form = $(this).closest('form');
        
        Swal.fire({
            title: '¿Estás seguro?',
            text: "¡No podrás revertir esto!",
            icon: 'success',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, eliminar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                button.closest('form').submit();
            }
        });
    });

    </script>



@stop

