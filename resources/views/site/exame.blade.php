@extends('home')
@section('titulo', 'exame')
@section('conteudo')

<br>
      <div class="row container crud">

                  <div class="row titulo ">              
                  <h3 class="left">Todos os Exames</h3>
                  <span class="right chip">Esta Página Contém {{$exames->count()}} Subject</span>  
                  </div>


                  <div class="card z-depth-4 registros" >

                  <br>
             <div class="row container">
                               @foreach ($exames as  $exame)
                                     <div class="col s12 m3">
                                             <div class="card">
                                                   <div class="card-image">

                                                       <a class="white" href=" {{ route('site.examdetalhes', ['id' => $exame->id])}}">
                                                       <i class="material-icons"><img src ="{{asset('img/exam.png')}}"></i></a>      
                                                     </div> 
                                                        
                                                   <div class="card-content">
                                                   <span class="card-title">{{ Str::limit($exame->nome, 15) }}</span>
                                                   <p>{{ Str::limit($exame->descricao, 20) }}</p>
                                                   </div>

                                             </div>
                                      </div>

                                      @endforeach

                                   
                                </div>     
                            

                               
                             </div>
                          
                        
       </div>

                           

      
@endsection