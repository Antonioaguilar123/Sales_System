@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>CREAR NUEVO PRODUCTO</h1>
        <form action="{{ route('cliente.guardar') }}" method="post">
            @csrf
            <div>
                <label for="">NOMBRES</label>
                <input type="text" name="nombre" value="{{ old('nombre') }}">
            </div>
            <div>
                <label for="">TELEFONO</label>
                <input type="telefono" name="telefono" value="{{ old('telefono') }}">
            </div>
            <div>
                <label for="">DIRECCION</label>
                <input type="direccion" name="direccion" value="{{ old('direccion') }}">
            </div>
            <div>
                <input type="submit" value="Submit">
            </div>
    </div>
    @endsection