@extends('layouts.app')


@section('content') 
<h1>Administrador de jugador</h1>
<a href="{{ route('jugador.create')}}" class="btn btn-info">Crear un Jugador</a>

  <table class="table" >
    <thead>
        <tr>
            <td>Id </td>
            <td>Nombre </td>
            <td>Apellido </td>
            <td>FechaNacimiento </td>
            <td>Nacionalidad</td>
            <td>Posicion</td> 
            <td>NumeroCamiseta</td>  
            <td>FechaContratacion</td> 
            <td>Salario</td>
            <td>Opciones</td>   
    
            
        </tr>
        <tbody>
            @foreach ($jugadores as $jugador)
            <tr>
                <td>{{$jugador->id}}</td>
                <td>{{$jugador->nombre}}</td>
                <td>{{$jugador->apellido}}</td>
                <td>{{$jugador->fecha_nacimiento}}</td>
                <td>{{$jugador->nacionalidad}}</td>
                <td>{{$jugador->posicion}}</td>
                <td>{{$jugador->numero_camiseta}}</td>
                <td>{{$jugador->fecha_contratacion}}</td>
                <td>{{$jugador->salario}}</td>
                <td>
                    <a href="{{ route('jugador.edit',  $jugador->id)}}" class="btn btn-success mt-3">Editar</a>
                    <a href="{{ route('jugador.destroy', $jugador->id )}}" class="btn btn-danger mt-3">Eliminar</a>
                </td>

            </tr>
                
            @endforeach
        </tbody>
    </thead>
</table>
  <a href="{{ route('index')}}" class="btn btn-success mt-3">Volver</a>          

@endsection