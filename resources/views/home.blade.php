<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="{{asset('css/materialize.css')}}">
<link rel="stylesheet" href="{{asset('css/style.css')}}"> 
<link rel="icon" href="{{asset('img/logo2.png')}}">
<title>home</title>
</head>
</head>

<body>
    <div id="viewport">
    <div class="player-container">
       
     
             <nav class="white" role="navigation">
              <div class="nav-wrapper container ">

                <a id="logo-container" href="#" class="brand-logo"><img src ="{{asset('img/logo3.png')}}"></a>

                <ul class="right hide-on-med-and-down blue">
                  @can('acess')  
                      <li><a href="{{ route('site.menuone')}}">Home</a></li>
                      <li><a href="{{ route('site.menutwo')}}">Desenvolvedores</a></li>
                      <li><a href="{{ route('site.menutree')}}">Atividades</a></li>    
                      @endcan 
                      @can('acess-satividades')   
                      <li><a href="{{ route('site.menufour')}}">Satividades</a></li>                     
                      @endcan     

                      
                    
                  @can('acess-exames')   
                  <li><a href="{{ route('site.menufive')}}">Exame</a></li>      
                  @endcan  
                  
                      <li><a class="login" href="{{ route('login.logout')}}">Sair</a></li>
                    
                </ul>




        
                <ul id="nav-mobile" class="sidenav">
                  <a id="logo-container" href="#" class="brand-logo"><img src ="{{asset('img/logo4.png')}}"></a>
                   <br>
                   @can('acess')  
                  <li><a href="{{ route('site.menuone')}}">Home</a></li>
                  <li><a href="{{ route('site.menutwo')}}">Desenvolvedores</a></li>
                  <li><a href="{{ route('site.menutree')}}">Atividades</a></li> 
                  @endcan  
                  @can('acess-satividades')   
                  <li><a href="{{ route('site.menufour')}}">Satividades</a></li>                     
                  @endcan     


                  @can('acess-exames')   
                  <li><a href="{{ route('site.menufive')}}">Exame</a></li>      
                  @endcan  

                  <li><a class="login" href="{{ route('login.logout')}}">Sair</a></li>
                </ul>
                <a href="#" data-target="nav-mobile" class="sidenav-trigger">
                 
                    <img src ="{{asset('img/menut.png')}}">
                  </a>
            
              </div>

            </nav>

  @yield('conteudo')    

 
  @can('acess-dashboard')   
  <br>
  <nav class="blue" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" class="brand-logo">Dashboard</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="{{route('admin.dashboard')}}">Painel-Dashboard</a></li>
        <li><a href="{{route('admin.usuario.add')}}">Adicionar Usuario</a></li>
        <li><a href="{{route('admin.atividades.add')}}">Adicionar Atividades</a></li>
        <li><a href="{{route('admin.desenvolvedores.add')}}">Adicionar Desenvolvedores</a></li>  
        <li><a href="{{route('admin.satividades.add')}}">Adicionar satividades</a></li>  
        <li><a href="{{route('admin.exame.add')}}">Adicionar Exame</a></li>  
      </ul>
  
      <ul id="nav-mobile2" class="sidenav">
        <a id="logo-container" href="#" class="brand-logo"><img src ="{{asset('img/logo4.png')}}"></a>
        <br>
        <li><a href="{{route('admin.dashboard')}}">Painel-Dashboard</a></li>
        <li><a href="{{route('admin.usuario.add')}}">Adicionar Usuario</a></li>
        <li><a href="{{route('admin.atividades.add')}}">Adicionar Atividades</a></li>
        <li><a href="{{route('admin.desenvolvedores.add')}}">Adicionar Desenvolvedores</a></li>  
        <li><a href="{{route('admin.satividades.add')}}">Adicionar satividades</a></li> 
        <li><a href="{{route('admin.exame.add')}}">Adicionar Exame</a></li>    
      </ul>
      <a href="#" data-target="nav-mobile2" class="sidenav-trigger">
        <img src ="{{asset('img/menut2.png')}}">
      </a>
    </div>
  </nav>
  @endcan
  <script src="{{asset('js/materialize.min.js')}}"></script> 
  <script>
document.addEventListener('DOMContentLoaded', function(){
var elems = document.querySelectorAll('.sidenav');
var instances = M.Sidenav.init(elems);
});

    </script> 
</body>
</html>