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
              @if (Session::has('login'))
                         <center>
                            <li class="dropdown"  class="divider"><span class="sms">Seja bem vindo(a),{{session('nome')}}</span>
                              <a data-toggle="dropdown" class="dropdown-toggle"><img   src="{{url('img/user.png')}}" class="img-resposinve img-circle  img-user" ></a>

                            <ul class="dropdown-menu col-md-offset-4">
                                <li><a href="#">Buscar Restaurantes</a></li>
                                <li role="presentation" class="divider"></li>
                                <li><a href="#">Meus Pedidos</a></li>
                                <li role="presentation" class="divider"></li>
                                <li><a href="#">Editar Perfil</a></li>
                                <li role="presentation" class="divider"></li>
                                <li><a href="{{url('sair')}}" >Sair</a></li>
                            </ul>
                           </li>
                       </center>
                    @else
                          <li><a href="{{url('form_registar_restaurante')}}"><span class="glyphicon glyphicon-home"></span>Registe seu restaurante</a></li>
                          <li><a href="{{url('form_registar_cliente')}}"><span class="glyphicon glyphicon-user"></span>Registe-se</a></li>
                          <li><a href="{{url('form_login')}}"><span class="glyphicon glyphicon-log-in"></span>Entrar</a></li>

              @endif
          </ul>
        </div><!--/.nav-collapse -->
     </div>
</nav>