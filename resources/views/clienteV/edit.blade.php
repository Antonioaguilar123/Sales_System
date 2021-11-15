@extends('layouts.app')
@section('content')
<div class="container">
<h1>EDITAR CLIENTE</h1>
<form action="{{ route('cliente.actualizar', $cliente->slug) }}" method="post">
@csrf
@method('patch')
<div class="form-group">
<label for="">Nombres</label>
<input type="text" name="nombres" value="{{ $cliente->nombres }}">
</div>
<div class="form-group">
    <label for="">email</label>
    <input type="email" name="email" value="{{ $cliente->email }}">
    </div>
<div class="form-group">
<label for="">Telefono</label>
<input type="text" name="telefono" value="{{ $cliente->telefono }}">
</div>
<div class="form-group">
    <label for="">Direccion</label>
    <input type="text" name="direccion" value="{{ $cliente->direccion}}">
    </div>
<div class="form-group" style="margin-top: 24px;">
<input type="submit" value="Update">
</div>
</div>
</div>
@endsection