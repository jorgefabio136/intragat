@extends('home')
@section('titulo', 'sactividades')
@section('conteudo')

<br>
      <div class="row container crud">

                  <div class="row titulo ">              
                  <h3 class="left">Todas as Special Actividades</h3>
                  <span class="right chip">Esta Página Contém {{$satividades->count()}} Subject</span>  
                  </div>


                  <div class="card z-depth-4 registros" >

                  <br>
             <div class="row container">
                               @foreach ($satividades as  $satividade)
                                     <div class="col s12 m3">
                                             <div class="card">
                                                   <div class="card-image">

                                                       <a class="white" href=" {{ route('site.satdetalhes', ['id' => $satividade->id])}}">
                                                       <i class="material-icons"><img src ="{{asset('img/doc2.png')}}"></i></a>      
                                                     </div> 
                                                        
                                                   <div class="card-content">
                                                   <span class="card-title">{{ Str::limit($satividade->nome, 15) }}</span>
                                                   <p>{{ Str::limit($satividade->descricao, 20) }}</p>
                                                   </div>

                                             </div>
                                      </div>

                                      @endforeach

                                   
                                </div>     
                            

                               
                             </div>
                          
                        
       </div>

                           

      
@endsection