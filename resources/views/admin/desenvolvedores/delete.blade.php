<center> <div style="width:700px;">
 
    <div class="delete-{{$desenvolvedore->id}}">
    <div class="card z-depth-4 registros" >
    <div class="striped ">
    
        <div class="modal-content">
          <h4><i class="material-icons"></i>Remover desenvolvedor</h4>
          <h6><i class="material-icons"></i>Por Favor Consulte a Lista</h6>
    
    
          @foreach($desenvolvedores  as  $desenvolvedore)
            <div class="row">
           
              <p>Tem a Certeza que Deseja Excluir {{$desenvolvedore->nome}}?</p>       
    
            </div> 
           
            <form action="{{route('admin.desen.delete', $desenvolvedore->id)}}" method="POST">
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