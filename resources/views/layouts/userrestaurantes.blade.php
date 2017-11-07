@extends('layouts.user')
@section('conteudo')

		<div class="row">
			<div class="col-md-1">
				<a href="{{url('lista')}}" class="text-success" data-toggle="tooltip" title="Visualizar restaurantes em lista"><span style="font-size:25px; " class="glyphicon glyphicon-list text-success"></span></a>

				<a href="{{url('vermapa')}}" class="text-success " data-toggle="tooltip" title="Visualizar Restaurantes no Mapa"><span style="font-size:25px; margin-left: 10px" class="glyphicon glyphicon-map-marker text-success"></span></a>

			</div>

			<div class="col-md-7 col-md-offset-4">
				
				<div class="form-group">
				  <select class="form-control input-lg" id="sel1">
			 	  	 <option>Escolher a Gastronomia</option>
			  		 <option>Chinesa</option>
				     <option>Japonesa</option>
				     <option>Mocambicana</option>
				     <option>Braseleira</option>
				     <option>Portuguesa</option>
				     <option>Inglesa</option>
				  </select>
				</div>
			</div>

	    </div>
		
	 
	    <div class="row">
	    	@yield('content')
        </div>

    
@endsection
