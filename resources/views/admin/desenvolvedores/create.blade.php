@extends('home')
@section('titulo', 'criar desenvolvedores')
@section('conteudo')
<div class="row container crud">                
  <div class="" >
       <div class="striped ">
          <div class="modal-content">

              <h4><i class="material-icons"></i> Cadastrar um novo Desenvolvedor</h4>

              <form class="col s12" action="{{route('admin.desenvolvedores.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{auth()->user()->id}}">
                    
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
                          <span>imagem</span>
                          <input name="imagem" type="file">
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
                            <input name="especialidade" id="repo" placeholder="especialidade" type="text" class="validate">
                            <label for="especialidade"></label>
                          </div>
                      



                    <a href="{{route('admin.desenvolvedores.add')}}" class=" waves-effect waves-green btn red right">Cancelar</a><br>
                    <button  type="submit" class=" waves-effect waves-green btn green right">Cadastrar</button><br>


                </div> 


                                              </form>



          </div>                       
       </div>
   </div>



</div>

@endsection