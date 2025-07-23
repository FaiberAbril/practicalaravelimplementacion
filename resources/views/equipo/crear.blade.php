@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear un Equipo</h1>
@stop

@section('content')
    
<div class="container">
    <div class="row">
     <div class="col-6">
       <form action="{{ route('equipo.store') }}" method="POST">
       @csrf

       <label for="nombre" class="form-label">Nombre:*</label>
       <input type="text" name="nombre" id="nombre" class="form-control" >

      @error('nombre')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
     
       <label for="ciudad" class="form-label">Ciudad</label>
       <input type="text" name="ciudad" id="ciudad" class="form-control">
      
       @error('ciudad')
          <div class="alert alert-success">{{ $message }}</div>
      @enderror

       <label for="pais" class="form-label">Pais</P></label>
       <input type="text" name="pais" id="pais" class="form-control">

       

       <label for="fundacion" class="form-label">Fundacion</label>
       <input type="text" name="fundacion" id="fundacion" class="form-control">

       <label for="liga" class="form-label">Liga</label>
       <input type="text" name="liga" id="liga" class="form-control">

       <button type="submit" class="btn btn-primary mt-3">Guardar</button>
       <a href="{{ route('equipo.index')}}" class="btn btn-success mt-3">Volver</a>

      </form>
     </div>

   </div>
</div>
    

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop