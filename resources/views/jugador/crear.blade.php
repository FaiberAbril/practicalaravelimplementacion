@extends('layouts.app')


@section('content')
<h1>Crear un Jugador</h1>

<div class="container">
    <div class="row">
     <div class="col-6">
       <form action="{{ route('jugador.store') }}" method="POST">
       @csrf

       <label for="idequipo" class="form-label">Equipo:</label>
       <select name="idequipo" id="idequipo" class="form-select">
        @foreach($equipos as $equipo)
          <option value="{{ $equipo->id}}">{{$equipo->nombre}} </option>
        @endforeach
       </select>

       <label for="nombre" class="form-label">Nombre</label>
       <input type="text" name="nombre" id="nombre" class="form-control">
     
       <label for="apellido" class="form-label">Apellido:</label>
       <input type="text" name="apellido" id="apellido" class="form-control">

       <label for="fecha_nacimiento" class="form-label">FechaNacimiento:</P></label>
       <input type="text" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control">

       <label for="nacionalidad" class="form-label">Nacionalidad:</label>
       <input type="text" name="nacionalidad" id="nacionalidad" class="form-control">

       <label for="posicion" class="form-label">Posicion:</label>
       <input type="text" name="posicion" id="posicion" class="form-control">

       <label for="numero_camiseta" class="form-label">NumeroCamiseta:</label>
       <input type="number" name="numero_camiseta" id="numero_camiseta" class="form-control">

       <label for="fecha_contratacion" class="form-label">FechaContratacion:</label>
       <input type="text" name="fecha_contratacion" id="fecha_contratacion" class="form-control">

       <label for="salario" class="form-label">Salario:</label>
       <input type="number" name="salario" id="salario" class="form-control">

       <button type="submit" class="btn btn-primary mt-3">Guardar</button>
       
       </form>
       <a href="{{ route('jugador.index')}}" class="btn btn-success mt-3">Volver</a>
     </div>
     <div class="col-6">
      <img src="{{URL::asset('img/futbol3.png')}}" alt="" style="height: 700px">
     </div>
   </div>
</div>
    

@endsection