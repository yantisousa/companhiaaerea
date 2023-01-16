@extends('layout.menu')
@section('content')
<style>
  body {
    background-color: #c8cfca;
  }
  .conteiner-login {
    height: calc(100vh - 78px) !important;
  }
  .coluna-login {
    height: 100%;
  }
  .form-login {
    margin-top: 100px;
    width: ;
  }
  .btn-login {
  }
  .form-login h4 {
    text-align: center;
    position: relative;
    bottom: 50px;
  }
</style>
<div class="container conteiner-login">
  <div class="row coluna-login">
    <div class="col-md-4 offset-md-4 align-self-center " style="background-color: white; height:400px; border-radius: 10px; box-shadow:0 0px 3px #67736b;" >
  <form action="{{route('cadastro.create')}}" method="POST" class="form-login">
    @csrf
    <h4>Faça seu Cadastro</h4>
    <div class="row">
      <div class="col-12">
        <div class="mb-3">
        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Nome Completo">
      </div>
      <div class="col-12">
        <div class="mb-3">
 
        <input type="date" class="form-control" id="exampleFormControlInput1" name="data" placeholder="Nome Completo">
      </div>
      <div class="col-12">
        <div class="mb-3">
        <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="Email">
      </div>
      </div>
      <div class="col-12">
        <div class="mb-3">
        <input class="form-control" type="password" id="exampleFormControlInput1" name="senha" placeholder="Senha"></input>

      </div>
      </div>
      <div class="d-grid gap-2">
        <button class="btn btn-primary" type="submit">Entrar</button>
      </div>
    </div> 
</form>
    </div>
   
  </div>
</div>
@endsection
