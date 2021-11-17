<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
<style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100&family=STIX+Two+Math&display=swap');
body {
  background-image: url(FondoMatricula.jpg);
  
}
button, select {
  text-transform: none;
}
button, input, select {
  font: inherit;
}
#Principal {
  border: solid 5px #000000;
  width: 800px;
  margin:  auto;
  position: relative;
}
#Formulario {
  padding: 37.5px;
  margin: 50px 0;
}
h1 {
  color: #000000;
  font-size: 32px;
  font-weight: 700;
  letter-spacing: 7px;
  text-align: center;
  text-transform: uppercase;
}
.underline {
  border-bottom: solid 5px #000000;
  margin: initial;
  width: 100%;
}
label{
  letter-spacing: 1px;
  font-size: large;
}
input, select{
	background: none;
  border: black;
	border-bottom: solid 2px #000000;
	color: #000000;
  letter-spacing: 1px;
	margin: 0em 0 1.875em 0;
	padding: 0 0 0.875em 0;
  text-transform: uppercase;
	width: 100%;
}
.CInstitucional {
	float: none;
	width: 100%;
}
.CicloI {
	float: none;
	width: 100%;
}
select {
  -webkit-appearance: none;
}

#BotonRegistrar , #BotonActualizar , #BotonOrdenar {
  background: none;
  border: solid 2px #000000;
  color: #000000;
  cursor: pointer;
  display: inline-block;
  font-family: 'Helvetica', Arial, sans-serif;
  font-size: 0.875em;
  font-weight: bold;
  outline: none;
  padding: 20px 35px;
  
}

#BotonRegistrar:hover,#BotonActualizar:hover , #BotonOrdenar:hover {
  background: #000000;
  color: #ffffff;
}
td{
    border: 1px black solid;
}
th{
    border: 1px black solid;
}
.span {
        font-size: 0;
        display: block;
    }
</style>
<body>
@extends('layouts.app')
@section('content')

    <div class="container">
        <h1>CREAR NUEVO CLIENTE</h1>
        <form action="{{ route('cliente.guardar') }}" method="post">
            @csrf
            <div>
                <label for="">NOMBRES</label>
                <input type="text" name="nombre" value="{{ old('nombre') }}">
            </div>
            <div>
                <label for="">EMAIL</label>
                <input type="email" name="email" value="{{ old('email') }}">
            </div>
            <div>
                <label for="">TELEFONO</label>
                <input type="text" name="telefono" value="{{ old('telefono') }}">
            </div>
            <div>
                <label for="">DIRECCION</label>
                <input type="text" name="direccion" value="{{ old('direccion') }}">
            </div>
            <div>
                <input type="submit" value="Submit">
            </div>
    </div>
    </form>
    </body>

    @endsection