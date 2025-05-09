@extends('home')
@section('titulo', 'criar atividades')
@section('conteudo')
<div class="row container crud">                
  <div class="" >
       <div class="striped ">
          <div class="modal-content">

              <h4><i class="material-icons"></i> Cadastrar Nova atividade</h4>

              <form class="col s12" action="{{route('admin.atividade.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id_user" value="{{auth()->user()->id}}">
                    
                    <div class="row">

                      <div class="input-field col s6">
                        <input  name="nome" placeholder="nome:" id="nome" type="text" class="validate">
                        <label for="nome"></label>
                      </div>

                    

                      <div class="input-field col s12">
                        <input name="tipo" id="tipo" placeholder=" tipo:" type="text" class="validate">
                        <label for="tipo"></label>
                      </div>

                      <div class="file-field input-field col s12">
                        <div class="btn">
                          <span>PDF</span>
                          <input name="pdf" type="file">
                        </div>
                        <div class="file-path-wrapper">
                          <input  class="file-path validate" type="text">
                        </div>
                        </div>

                        <div class="input-field col s12">
                            <input name="descricao" id="descricao" placeholder="Descricao" type="text" class="validate">
                            <label for="descricao"></label>
                          </div>

                          <div class="input-field col s6">
                            <input name="data_de_lancamento" id="data_de_lancamento" placeholder="data de lancamento" type="text" class="validate">
                            <label for="data-de-lancamento"></label>
                          </div>

                          <div class="input-field col s6">
                            <input name="repo" id="repo" placeholder="repo" type="text" class="validate">
                            <label for="repo"></label>
                          </div>
                      



                    <a href="{{route('admin.atividades.add')}}" class=" waves-effect waves-green btn red right">Cancelar</a><br>
                    <button  type="submit" class=" waves-effect waves-green btn green right">Cadastrar</button><br>


                </div> 


                                              </form>



          </div>                       
       </div>
   </div>



</div>

@endsection