@extends('layouts.userrestaurantes')
@section('content')
		
   <div class="col-md-12">			
		<div class="panel panel-default">
				<div class="panel-body">
					<div id="map" style="height:630px;width:100%">
						{!! Mapper::render() !!}
					</div>
			    </div>
		</div>
	</div>
    
@endsection