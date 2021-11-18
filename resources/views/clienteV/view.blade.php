@extends('layouts.app')
@section('content')
<div class="container">
<h1>VISTA DE DEPORTISTA</h1>
<div >
<label for="">NOMBRE</label>
<input type="text" name="nombre" value="{{ $cliente->nombre }}" readonly>
</div>
<div>
<label for="">NRO CAMISETA :</label>
<input type="text" name="NCamiseta" value="{{ $cliente->ncamiseta }}" readonly>
</div>
<div>
<label for="">EQUIPO :</label>
<input type="text" name="Equipo" value="{{ $cliente->equipo }}" readonly>
</div>
<label for="">ALTURA</label>
<input type="text" name="Altura" value="{{ $cliente->altura }}" readonly>
</div>
<div>
<a href="{{ route('cliente.listar') }}"> Back</a>
</div>
</div>
@endsection