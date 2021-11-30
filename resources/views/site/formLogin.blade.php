@extends('site.master.layout')

@section('content')
<title>Login</title>
<form class="form-signin" method="post" action="">
    @csrf
    <label for="email" class="sr-only">Endereço de email</label>
    <input type="email" name="email" id="email" class="form-controll" placeholder="Seu email" require>

    <label for="password" class="sr-only">Senha</label>
    <input type="password" name="password" id="password" class="form-controll" placeholder="Senha" require>

    <button class="btn btn-lg btn-primary btn block" type="submit">Login</button>
</form>
@endsection