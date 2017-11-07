@extends('layouts.app')
@section('titulo')
	Perfil do usuario
@endsection
@section('jumbotron')
<div class="jumbotron jumbotron-dash text-center navbar-fixed-top">
	<div class="container">
		<div class="row">
			<!--Pesquisar-->
			<div class="col-sm-6 col-sm-offset-3" >
				<form>
					<!--Select Cidades-->
				  <div class="form-group">
					  <select class="form-control">
					    <option>Selecione a cidade</option>
					    <option>Maputo</option>
					    <option>Gaza</option>
					    <option>Inhambane</option>
					    <option>Sofala</option>
					    <option>Manica</option>
					    <option>Tete</option>
					    <option>Nampula</option>
					    <option>Cabo Delgado</option>
					    <option>Niassa</option>
					  </select>
					</div>
					<!--Select Distritos-->
				   <div class="form-group">
					  <select class="form-control">
					    <option>Selecione o distrito</option>
					    <option>Kamubukwana</option>
					    <option>Chlamanculo</option>
					    <option>Mavota</option>
					  </select>
					</div>
				</form>
			</div>
		</div>
    </div>
</div>
@endsection

@section('conteudo')
	 <div class="row" style="margin-top:140px">

		 	<div class="col-md-3">
				<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="">Escolher Gastronomia</a></li>
					<li><a>Alema</a></li>
					<li><a>Mediterrania</a></li>
					<li><a>Mocambicana</a></li>
					<li><a>Chinesa</a></li>
					<li><a>Portuguesa</a></li>
					<li><a>Mocambicana</a></li>
					<li><a>Hamburguers</a></li>
					<li><a>Bebidas</a></li>
					<li><a>Sopas</a></li>
					<li><a>Refeicoes</a></li>
					<li><a>Pequeno Almoco</a></li>
					<li><a>Doces</a></li>
					<li><a>Salgados</a></li>
				</div>
		    </div>

			<div class="col-md-9" style="margin-top:15px">
					<div class="panel panel-success">
						<div class="panel-heading">
						 <a href="{{url('lista')}}" data-toggle="tooltip" title="Localizar na lista"><span style="font-size:25px" class="glyphicon glyphicon-list"></span></a>
						 <a href="{{url('mapa')}}" data-toggle="tooltip" title="Localizar no Mapa"><span style="font-size:25px; margin-left: 10px" class="glyphicon glyphicon-map-marker"></span></a>
					</div>
						@yield('mapping')
				
				    </div>
			</div>
	</div>
@endsection
