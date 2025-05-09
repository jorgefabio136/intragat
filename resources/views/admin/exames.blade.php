@extends('home')
@section('titulo', 'Upload desenvolveores')
@section('conteudo')
<div class="fixed-action-btn">
    <a  class="btn-floating btn-large bg-gradient-green modal-trigger" href="{{route('admin.exames.create')}}">
      <i class="large material-icons">N</i>
    </a>   
  </div>


      <div class="row container crud">
          
              <div class="row titulo ">              
                <h3 class="left">Todos os Exames </h3>
                <span class="right chip">{{$exames->count()}} Perfis Nesta Pagina</span>  
              </div>

            <nav class="bg-gradient blue">
              <div class="nav-wrapper">
                <form>
                  <div class="input-field">
                 
                  </div>
                </form>
              </div>
            </nav>     

              <div class="card z-depth-4 registros" >
              <table class="striped ">
                  <thead>
                    <tr>
                      <th></th>
                      <th>ID</th>  
                      <th>nome </th>
                      <th>tipo</th>
                      <th>repositório</th>
                      <th>data da criação</th>
                    </tr>
                  </thead>
          
                  <tbody>

                  @foreach ($exames as  $exame)
                    <tr>
                      <td> <img src="" class="circle "> </td>
                      <td>{{$exame->id }}</td>  
                      <td>{{$exame->nome}}</td>   
                      <td>{{$exame->tipo}}</td>   
                      <td>{{$exame->repo}}</td>   
                      <td>{{$exame->created_at}}</td>                                                          
                        <a href="#delete-{{$exame->id}}"><i></i></a></td>                          
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div> 
              </div>    
              @include('admin.exames.delete') 
@endsection