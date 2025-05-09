@extends('home')
@section('titulo', 'Upload desenvolveores')
@section('conteudo')
<div class="fixed-action-btn">
    <a  class="btn-floating btn-large bg-gradient-green modal-trigger" href="{{route('admin.desenvolvedores.create')}}">
      <i class="large material-icons">N</i>
    </a>   
  </div>


      <div class="row container crud">
          
              <div class="row titulo ">              
                <h3 class="left">Todos os Desenvolvedores</h3>
                <span class="right chip">{{$desenvolvedores->count()}} Perfis Nesta Pagina</span>  
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
                      <th>especialidade</th>
                      <th>data da criação</th>
                    </tr>
                  </thead>
          
                  <tbody>

                  @foreach ($desenvolvedores as  $desenvolvedore)
                    <tr>
                      <td> <img src="" class="circle "> </td>
                      <td>{{$desenvolvedore->id }}</td>  
                      <td>{{$desenvolvedore->nome}}</td>   
                      <td>{{$desenvolvedore->tipo}}</td>   
                      <td>{{$desenvolvedore->especialidade}}</td>   
                      <td>{{$desenvolvedore->created_at}}</td>                                                          
                        <a href="#delete-{{$desenvolvedore->id}}"><i></i></a></td>                          
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div> 
              </div>    
              @include('admin.desenvolvedores.delete') 
@endsection