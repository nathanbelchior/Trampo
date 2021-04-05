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

<p>Informe o Nº do processo ou o tema: <input type="text" name="pesq_processo" placeholder="Processo"> 
 <input type="text" name="pesq_tema" placeholder="Tema">
<button>pesquisar</button>
</p>

<h1>Aqui aparece os processos que foram pesquisados</h1>

<select id="motivo">

<option>...</option>

</select>
</body>

@stop
