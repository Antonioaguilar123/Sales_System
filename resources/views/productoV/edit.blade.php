@extends('layouts.app')
@section('content')
<div class="container">
<h1>EDITAR CLIENTE</h1>
<form action="{{ route('cliente.actualizar', $cliente->slug) }}" method="post">
@csrf
@method('patch')
<div class="form-group">
<label for="">Name</label>
<input type="text" name="nombre" value="{{ $cliente->nombre }}">
</div>
<div class="form-group">
<label for="">Telefono</label>
<input type="telefono" name="telefono" value="{{ $cliente->telefono }}">
</div>
<div class="form-group">
    <label for="">Direccion</label>
    <input type="direccion" name="direccion" value="{{ $cliente->direccion}}">
    </div>
<div class="form-group" style="margin-top: 24px;">
<input type="submit" value="Update">
</div>
</div>
</div>
@endsection