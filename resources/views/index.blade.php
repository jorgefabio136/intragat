<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="{{asset('css/materialize.css')}}">
<link rel="icon" href="{{asset('img/logo2.png')}}">
<title>Bem vindo ao Intra</title>
</head>
<style>
    body{ 
background-image: url("{{asset('img/INTRAGAT2.jpg')}}");
background-repeat: no-repeat;
background-attachment: scroll;
background-position: center-top; 
}
</style>

<body>
   

    <div class="row container crud">
                  
                  <div class="row titulo ">              
                    <h1 class="left"><img src ="{{asset('img/logo.png')}}"></h1>
                  
                  </div>

              


               
                  <div class="" >
                       <div class="striped ">
                          <div class="modal-content">

                              <h4><i class="material-icons"></i></br> Faça Login</h4>
                                                                    <div style="background:red;color:white;">
                                                                       @if($mensagem = Session::get('erro'))
                                                                     
                                                                        {{ $mensagem }}
                                                                       
                                                                        @endif

                                                                        @if($errors->any())
                                                                        @foreach($errors->all() as $error)
                                                                              {{ $error }}</br>
                                                                        @endforeach
                                                                        @endif
                                                                        </div>
                                                                        <form class="col s12" action="{{ route('login.auth')}}" method="POST">
                                                                          @csrf
                                                                         
                                                                          
                                                                    <div class="row">
                                      
                                                                
                                      
                                                                      <div class="input-field col s12">
                                                                        <input name="email" id="email" placeholder=" Email:" type="email" class="validate">
                                                                        <label for="email"></label>
                                                                      </div>
                                      
                                                                      <div class="input-field col s12">
                                                                        <input name="password" id="email" placeholder=" Senha:"  type="password" class="validate">
                                                                        <label for="password"></label>
                                                                      </div>
                                                                                                               <button  type="submit" class=" waves-effect waves-green btn green right">Entrar</button><br>
                                      
                                      
                                                                      </div> 
                                      
                                      
                                                                                                    </form>
                                      


                          </div>                       
                       </div>
                   </div>



  </div>














</body>
</html>