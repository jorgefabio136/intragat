@extends('home')
@section('titulo', 'Upload usuarios')
@section('conteudo')

        <div class="fixed-action-btn">
            <a  class="btn-floating btn-large bg-gradient-green modal-trigger" href=" {{route('admin.usuario.create')}}">
              <i class="large material-icons">N</i>
            </a>   
          </div>
       

              <div class="row container crud">
                  
                      <div class="row titulo ">              
                        <h3 class="left">Todos os usuarios</h3>
                        <span class="right chip">{{$users->count()}} usuarios Nesta Pagina</span>  
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
                              <th>usuario intra</th>
                              <th>tipo da conta</th>
                              <th>previlegios da conta</th>
                              <th>conta Exame</th>
                              <th>conta livre</th>
                              <th>Telemovél</th>
                              <th>Data de criacão</th>
                            </tr>
                          </thead>
                  
                          <tbody>

                          @foreach ($users as  $user)
                            <tr>
                              <td> <img src="" class="circle "> </td>
                              <td>{{$user->id }}</td>  
                              <td>{{$user->email}}</td>   
                              <td>{{$user->role}}</td>  
                              <td>{{$user->roles}}</td>  
                              <td>{{$user->roless}}</td>  
                              <td>{{$user->view}}</td>  
                              <td>{{$user->tel}}</td>  
                              <td>{{$user->created_at}}</td>                                                          
                                <a href="#delete-{{$user->id}}"><i></i></a></td>                          
                              </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div> 
                      </div>     
                                                

 @include('admin.usuario.delete')
    @endsection
