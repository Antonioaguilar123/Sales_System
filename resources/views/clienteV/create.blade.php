@extends('layouts.app')
@section('content')
<div class="container">
<h1>GENERAR NUEVO DEPORTISTA</h1>
<form action="{{ route('cliente.guardar') }}" method="post">
@csrf
<div>
<label for="">NOMBRE</label>
<input type="text" name="nombre" value="{{ old('nombre') }}">
</div>
<div>
<label for="">NRO CAMISETA</label>
<input type="text" name="ncamiseta" value="{{ old('ncamiseta') }}">
</div>
<div>
<label for="">EQUIPO</label>
<input type="text" name="equipo" value="{{ old('equipo') }}">
</div>
<div>
<label for="">ALTURA</label>
<input type="text" name="altura" value="{{ old('altura') }}">
</div>
<div>
<input type="submit" value="Submit">
</div>
</div>
@endsection