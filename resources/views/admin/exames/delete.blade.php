<center> <div style="width:700px;">
 
    <div class="delete-{{$exame->id}}">
    <div class="card z-depth-4 registros" >
    <div class="striped ">
    
        <div class="modal-content">
          <h4><i class="material-icons"></i>Remover Atividades</h4>
          <h6><i class="material-icons"></i>Por Favor Consulte a Lista</h6>
    
    
          @foreach($exames  as  $exame)
            <div class="row">
           
              <p>Tem a Certeza que Deseja Excluir {{$exame->nome}}?</p>       
    
            </div> 
           
            <form action="{{route('admin.exam.delete', $exame->id)}}" method="POST">
            @method('delete')
            @csrf
            <input value="Excluir" type="submit" class="waves-effect waves-green btn red right"><br>
            <br>
            <br>
            </form>
            @endforeach
    
    
    
    
    
    
        </div>
        
        </div>
        </div>
       
        </div></center>