@extends('home')
@section('titulo', 'Upload satividades')
@section('conteudo')
<div class="fixed-action-btn">
  <a  class="btn-floating btn-large bg-gradient-green modal-trigger" href="{{route('admin.satividade.create')}}">
      <i class="large material-icons">N</i>
    </a>   
  </div>


      <div class="row container crud">
          
              <div class="row titulo ">              
                <h3 class="left">Todas as Satividades</h3>
                <span class="right chip">{{$satividades->count()}} usuarios Nesta Pagina</span>  
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
                      <th>repo</th>
                      <th>data da criação</th>
                    </tr>
                  </thead>
          
                  <tbody>

                  @foreach ($satividades as  $satividade)
                    <tr>
                      <td> <img src="" class="circle "> </td>
                      <td>{{$satividade->id }}</td>  
                      <td>{{$satividade->nome}}</td>   
                      <td>{{$satividade->tipo}}</td>   
                      <td>{{$satividade->repo}}</td>   
                      <td>{{$satividade->created_at}}</td>                                                          
                        <a href="#delete-{{$satividade->id}}"><i></i></a></td>                          
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div> 
              </div>    
              @include('admin.satividades.delete') 
@endsection