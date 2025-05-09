@extends('home')
@section('titulo', 'Dashboard')
@section('conteudo')
<br>  
<br>  
<br>  
    <div class="row container">
      <section class="info">

        <div class="col s12 m4">
        <article class="bg-gradient-green card z-depth-4 ">
          <i class="material-icons"><img src="{{asset('img/user.png')}}">usuários</i>
          <p>Número Total de Usuários</p>
          <h3>{{$User}}</h3>       
        </article>
        </div>

        <div class="col s12 m4">
        <article class="bg-gradient-green card z-depth-4 ">
          <i class="material-icons"><img src="{{asset('img/user.png')}}">Desenvolvedores</i>
          <p>Número Total de Desenvolvedores</p>
          <h3>{{$desenvolvedores}}</h3>       
        </article>
        </div>
        <div class="col s12 m4">
          <article class="bg-gradient-green card z-depth-4 ">
            <i class="material-icons"><img src="{{asset('img/user.png')}}">Atividades</i>
            <p>Número Total de Atividades</p>
            <h3>{{$atividades}}</h3>       
          </article>
          </div>
        <br>  
        <br>  
        <br>  
        <br>  
        <br>  
        <br>  
        <br>  
        <br>  
        <br>  
        <br>  
        <br>  
        <br>  
        <br>  
        <br>  
        <br>  
        <br>  
        <br>  
        <br>  
        <br>  
        <br>  
        <br>  
        <br>  
        <br>  
        <br>  
        <br>  
        <br>  
      
      
        @endsection
