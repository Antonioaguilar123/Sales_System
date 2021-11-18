@extends('layouts.app')
@section('content')
<div class="container">
<h1>EDITAR DEPORTISTA</h1>
<form action="{{ route('cliente.actualizar', $cliente->slug) }}" method="post">
@csrf
@method('patch')
<div class="form-group">
<label for="">NOMBRE</label>
<input type="text" name="nombre" value="{{ $cliente->nombre }}">
</div>
<div class="form-group">
<label for="">NRO CAMISETA</label>
<input type="text" name="ncamiseta" value="{{ $cliente->ncamiseta }}">
</div>
<div class="form-group">
<label for="">EQUIPO</label>
<input type="text" name="equipo" value="{{ $cliente->equipo }}">
</div>
<div class="form-group">
<label for="">ALTURA</label>
<input type="text" name="altura" value="{{ $cliente->altura }}">
</div>
<div class="form-group" style="margin-top: 24px;">
<input type="submit" value="Update">
</div>
</div>
</div>
@endsection