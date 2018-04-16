@extends('layouts.app')

@section('content')
<div class="container">
<form action="/produtos" method="get"> <input type="submit" value="Editar Produtos"/></form><br>
<input type="button" value="Voltar" onClick="history.go(-1)"><br> 
<input type="button" value="Avançar" onCLick="history.forward()"><br> 
<input type="button" value="Atualizar" onClick="history.go(0)"> <br>

</div>
@endsection
