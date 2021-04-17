@extends('externo')
@section('title', 'Quadro de Avisos da Empresa')
@section('sidebar')
@parent
<p>^ ^ Barra superior adicionada do layout pai/m&atilde;e ^ ^ </p>
@endsection
@section('content')
<p>Quadro de Avisos da Empresa</p>
<p>Ola {{$nome}}</p>

@if($mostrar)
    <small>Vai ter um aviso aqui</small>
@else
    <small>Não vai ter aviso pra ninguem</small>
@endif

<?php$data = date("d/m");?>

@foreach ($avisos as $aviso)
    @if ($aviso['id'] == $data)
        <h3>{{$aviso['aviso']}}</h3>
    @endif    
@endforeach

@endsection