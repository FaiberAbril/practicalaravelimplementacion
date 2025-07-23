@extends('layouts.app')


@section('content')
 <div class="container">
    <div class="row">
        <div class="col-6">
            <h1>Actualizar  un Jugador</h1>

    <form action="{{ route('jugador.update', $jugador->id)}}" method="POST">
        @csrf
                <input type="hidden" name="id" id="id" value="{{ $jugador->id}}">
                
                <label for="idequipo" class="form-label">Equipos:</label>
                <select name="idequipo" id="idequipo" class="form-select">
                    @foreach($equipos as $equipo)
                    <option value="{{$equipo->id}}"

                        @if ($equipo->id == $jugador->idequipo)
                          selected                  
                            
                        @endif
                        >
                        {{ $equipo->nombre}}
                    </option>
                    @endforeach
                </select>
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $jugador->nombre}}">
                 
                <label for="apellido" class="form-label">Apellido:</label>
                <input type="text" name="apellido" id="apellido" class="form-control" value="{{ $jugador->apellido}}">

                <label for="fecha_nacimiento" class="form-label">FechaNacimiento:</label>
                <input type="text" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" value="{{ $jugador->fecha_nacimiento}}">

                <label for="nacionalidad" class="form-label">Nacionalidad:</label>
                <input type="text" name="nacionalidad" id="nacionalidad" class="form-control" value="{{ $jugador->nacionalidad}}">

                <label for="posicion" class="form-label">Posicion:</label>
                <input type="text" name="posicion" id="posicion" class="form-control" value="{{ $jugador->posicion}}">
                 

                <label for="numero_camiseta" class="form-label">NumeroCamiseta:</label>
                <input type="number" name="numero_camiseta" id="numero_camiseta" class="form-control" value="{{ $jugador->numero_camiseta}}">
                
                <label for="fecha_contratacion" class="form-label">FechaContratacion:</label>
                <input type="text" name="fecha_contratacion" id="fecha_contratacion" class="form-control" value="{{ $jugador->fecha_contratacion}}">

                <label for="salario" class="form-label">Salario:</label>
                <input type="number" name="salario" id="salario" class="form-control" value="{{ $jugador->salario}}">


                <button type="submit" class="btn btn-primary mt-3">Guardar</button>
                        

    </form>
                <a href="{{ route('jugador.index')}}" class="btn btn-success mt-3">Volver</a>        
        </div>
    </div>
 </div>

@endsection
