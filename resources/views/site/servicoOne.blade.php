@extends('site.master.layout')

@section('content')

<form class="row g-3 py-5 mx-5">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nome</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Número da Ficha</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Telefone</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Telefone Celular</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Endereço</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Comorbidade</label>
    <select id="inputState" class="form-select">
      <option selected>Selecione...</option>
      <option>Hipertensão</option>
      <option>Diabetes</option>
      <option>Doença Renal</option>
      <option>Doença Mental</option>
      <option>Cardiopata</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Estratificação de Risco</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Gravar</button>
  </div>
</form>

@endsection