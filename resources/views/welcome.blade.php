@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
@stop

@section('content')
<head>
<style>

#conteudo-left{
  /*Novamente definimos a largura da div*/
  width: 750px;
  /* altura da div */
  height: 50px;
  /* O atributo Float é utilizado para fazermos o nosso bloco(div)
  literalmente flutue e se posicione onde queremos na página,
  quando escolhemos left, dizemos que esse bloco irá se posicionar na
  parte esquerda da página */
  float:left;
  }
#conteudo-right{
  /*Novamente definimos a largura da div*/
  width:300px;
  /* altura da div */
  height:50px;
  /* Pode parecer meio estranho usarmos o mesmo atributo left para o bloco
  em que queremos posicionar na direita, mas como sabemos, o CSS é um estilo
  em cascata, nossa div conteúdo definimos a largura de 1000px e na
  conteudo-left 500px, automaticamente ao definirmos o conteudo-right
  com 500px e à esquerda também, ele ficou à direita do conteudo-left,
  pois o máximo que a div filha poderá ter é 1000px, sendo 500+500=1000px */
  float:left;
  }

</style>
</head>
<body>

<div id="conteudo-left"><input type="text" placeholder="pesquisa"></div>

<div id="conteudo-right">Opções de exportações: <button>PDF</button>  <button>Planilha</button></div>


<table class="table">
                <thead>
                         <tr>
                            <th>Nº do proc.</th>
                            <th>Assunto</th>
                            <th>Proc. Sobrestado?</th>
                            <th>Histórico</th>
                            <th>Motivo</th>
                        </tr>
                </thead>
                <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
            </tbody>
</table>
</body>

@stop
