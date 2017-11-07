<!DOCTYPE html>

<html lang="pt">
<head>

  <!--Definicao dos meta Tags-->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sistema de pedidos online para restaurantes">
    <meta name="author" content="Rodrigues Mafumo,Dionisio Macamo, Costa Tangune">
  <!--Definicao do titulo-->
  <title>@yield('titulo','Swakuda Software Development')</title>
  <!--Definicao de Links-->
    <link rel="icon" href="{{asset('img/logokuda1.png')}}">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/workaround.css')}}" rel="stylesheet">
    <link href="{{asset('css/estilo.css')}}" rel="stylesheet">

  </head>

  <body>
    <!--definicao da navegacao-->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{url('/')}}"><img src="{{url('img/logokuda1.png')}}" alt="Swakuda" class="img-responsive img-logo"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
        	  
        		<ul class="nav navbar-nav navbar-right">
        			<li><a href="#">Pedidos <span class="badge">10</span></a></li>
                       <li class="dropdown">
					        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Restaurante Continental
					        <span class="caret"></span></a>
					        <ul class="dropdown-menu">
					          <li><a href="#">Editar Perfil</a></li>
					          <li><a href="#">Registar Categorias</a></li>
					          <li><a href="#">Registar Produtos</a></li>
					          <li><a href="{{url('sair')}}" ><span class="glyphicon glyphicon-log-out"></span>Sair</a></li>
					        </ul>
					    </li>
                  
                </ul>

              </div>
           </div>
      </nav>

    <!--Conteudo-->
    <div class="container">
        @yield('conteudo')
    </div>
    
	  <!--Definicao do footer-->
	 <footer class="container-fluid text-center">
	        <a href="#" title="To Top">
	          <span class="glyphicon glyphicon-chevron-up"></span>
	        </a>
	      <p>Copyright@2017<a href="{{url('/')}}"> www.Swakuda.cdr.com</a></p>
	 </footer>

    <!-- Definicao de scripts -->
    <script src="{{asset('js/emulador.js')}}"></script>
    <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}/"></script>
    <script src="{{asset('js/workaround.js')}}"></script>
    <script type="text/javascript">
    var current_fs, next_fs, previous_fs; 
    var left, opacity, scale; 
    var animating;
     
    $(".next").click(function(){
      if(animating) return false;
      animating = true;
      
      current_fs = $(this).parent();
      next_fs = $(this).parent().next();
      $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

      next_fs.show(); 

      current_fs.animate({opacity: 0}, {
        step: function(now, mx) {
          scale = 1 - (1 - now) * 0.2;
          left = (now * 50)+"%";
          opacity = 1 - now;
          current_fs.css({
            'transform': 'scale('+scale+')',
            'position': 'absolute'
          });
          next_fs.css({'left': left, 'opacity': opacity});
        }, 
        duration: 800, 
        complete: function(){
          current_fs.hide();
          animating = false;
        }, 
        easing: 'easeInOutBack'
      });
    });
     
    $(".previous").click(function(){
      if(animating) return false;
      animating = true;
      
      current_fs = $(this).parent();
      previous_fs = $(this).parent().prev();

      $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
      
      previous_fs.show(); 
      current_fs.animate({opacity: 0}, {
        step: function(now, mx) {
          scale = 0.8 + (1 - now) * 0.2;
          left = ((1-now) * 50)+"%";
          opacity = 1 - now;
          current_fs.css({'left': left});
          previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
        }, 
        duration: 800, 
        complete: function(){
          current_fs.hide();
          animating = false;
        }, 
        easing: 'easeInOutBack'
      });
    });
     
    $(".submit").click(function(){
      return false;
    })
    </script>
</body>
</html>