@extends('home')
@section('titulo', 'criar usuario')
@section('conteudo')
<div class="row container crud">                
  <div class="" >
       <div class="striped ">
          <div class="modal-content">

              <h4><i class="material-icons"></i> Cadastrar Novo usuario</h4>

              <form class="col s12" action="{{route('admin.usuario.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                

                    
                    <div class="row">

                      <div class="input-field col s6">
                        <input  name="firstName" placeholder="Primeiro Nome:" id="firstName" type="text" class="validate">
                        <label for="nome"></label>
                      </div>

                      <div class="input-field col s6">
                        <input name="lastName" id="lastName" placeholder="Sobre Nome:" type="text" class="validate">
                        <label for="lastName"></label>
                      </div>

                      <div class="input-field col s12">
                        <input name="email" id="email" placeholder=" Email:" type="email" class="validate">
                        <label for="email"></label>
                      </div>

                      <div class="input-field col s12">
                        <input name="password" id="password" placeholder=" Senha:"  type="password" class="validate">
                        <label for="password"></label>
                      </div>

                      <div class="input-field col s12">
                        <input name="role" id="role" placeholder=" tipo de conta:"  type="text" class="validate">
                        <label for="role"></label>
                      </div>

                      <div class="input-field col s12">
                        <input name="roles" id="roles" placeholder=" tipo de conta previlegios:"  type="text" class="validate">
                        <label for="roles"></label>
                      </div>
                      <div class="input-field col s12">
                        <input name="roless" id="roles" placeholder=" tipo de conta exame:"  type="text" class="validate">
                        <label for="roless"></label>
                      </div>
                      <div class="input-field col s12">
                        <input name="view" id="roles" placeholder=" ver-tudo"  type="text" class="validate">
                        <label for="view"></label>
                      </div>
                      <div class="input-field col s12">
                        <input name="n_bi" id="n_bi" placeholder=" número de BI:"  type="text" class="validate">
                        <label for="n_bi"></label>
                      </div>

                      <div class="input-field col s12">
                        <input name="tel" id="tel" placeholder=" Número Telemovel:"  type="text" class="validate">
                        <label for="tel"></label>
                      </div>





                    <a href="{{route('admin.usuario.add')}}" class=" waves-effect waves-green btn red right">Cancelar</a><br>
                    <button  type="submit" class=" waves-effect waves-green btn green right">Cadastrar</button><br>


                </div> 


                                              </form>



          </div>                       
       </div>
   </div>



</div>

@endsection