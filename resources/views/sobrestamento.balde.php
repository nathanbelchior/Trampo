@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
@stop

@section('content')
<head>
<style>


</style>
</head>
<body>

<p>Informe o Nº do processo: <input type="text" name="pesq_processo"></p>
<h1> Multirecord aqui </h1>

<p>Informe  tema: <input type="text" name="pesq_tema"></p>
<h1>aqui deve aparecer os detelhes do tema , no caso pesquisou aparece embaixo junto das opções</h1>

<select id="motivo">

<option>...</option>

</select>
</body>

@stop
