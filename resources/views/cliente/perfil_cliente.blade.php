@extends('layouts.user')
@section('titulo')
	Perfil do usuario
@endsection

@section('conteudo')

	<div class="row" style="margin-top:50px">
		<div class="col-sm-4 col-sm-offset-4 text-center" style="margin-bottom:20px;">
			
			<span style="font-size:25px; margin-left: 10px" class="glyphicon glyphicon-map-marker text-success">Minha Localizacao</span>

		</div>
		<div class="col-md-6 col-md-offset-3">
			
			<form>
			<div class="form-group">
			  <select class="form-control input-lg" id="sel1">
			    <option>Provincia</option>
			    <option>Maputo</option>
			    <option>Gaza</option>
			    <option>Inhambane</option>
			  </select>
			</div>
			
			<div class="form-group">
			  <input type="text" class="form-control input-lg" id="usr" placeholder="informe a rua ou bairro,Avenida">
			</div>

			<center>
				<a href="{{url('lista')}}" class=" btn btn-lg btn-success">Localizar</a>
			</center>
		</form>

		</div>
	</div><!--Fim da row-->
@endsection
