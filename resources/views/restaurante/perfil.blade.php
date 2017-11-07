@extends('layouts.rest')
<!--Definicao do titulo da pagina-->
@section('titulo')
	Perfil do Restaurante
@endsection
<!--Conteudo do restaurante-->
@section('conteudo')
<br><br><br>

<ol class="breadcrumb">
  <li><a href="#">Dashbord</a></li>
  <li><a href="#">Produtos</a></li>
</ol>
<div class="container-fluid">
    	<p><button class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span>Novo Produto</button>
    	</p>
 		<p>
			<form>
			  <div class="input-group col-xs-6">
			    <input type="text" class="form-control input-lg"  placeholder="Pesquisar...">
			    <div class="input-group-btn">
			      <button class="btn btn-default btn-lg" type="submit">
			        <i class="glyphicon glyphicon-search"></i>
			      </button>
			    </div>
			  </div>
			</form>
		</p>
     <!--Fim da row-->

	<div class="table-responsive">

			 <table class="table table-bordered table-hover">
			    <thead>
			      <tr>
			        <th>produto_id</th>
			        <th>Descricao</th>
			        <th>preco</th>
			        <th>imagem</th>
			        <th colspan="3"><center>Opcoes</center></th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			        <td>1</td>
			        <td>Hamburguer Completo</td>
			        <td>100MT</td>
			        <td>joh.jpg</td>
			        <td><center><a href=""><span class="glyphicon glyphicon-eye-open"></span></a></center></td>
			        <td><center><a href=""><span class="glyphicon glyphicon-pencil"></span></a></center></td>
			        <td><center><a href=""><span class="glyphicon glyphicon-trash"></span></a></center></td>
			      </tr>
			      <tr>
			      	<td>2</td>
			        <td>Sandes de Peixe</td>
			        <td>30MT</td>
			        <td>joh.jpg</td>
			        <td><center><a href=""><span class="glyphicon glyphicon-eye-open"></span></a></center></td>
			        <td><center><a href=""><span class="glyphicon glyphicon-pencil"></span></a></center></td>
			        <td><center><a href=""><span class="glyphicon glyphicon-trash"></span></a></td></center></td>
			      </tr>
			      <tr>
			      	<td>3</td>
			        <td>Pao com badjia</td>
			        <td>20MT</td>
			        <td>joh.jpg</td>
			        <td><center><a href=""><span class="glyphicon glyphicon-eye-open"></span></a></center></td>
			        <td><center><a href="" class="text-center"><span class="glyphicon glyphicon-pencil"></span></a></center></td>
			        <td><center><a href=""><span class="glyphicon glyphicon-trash"></span></a></center></td>
			      </tr>

			      <tr>
			      	<td>3</td>
			        <td>Pao com badjia</td>
			        <td>20MT</td>
			        <td>joh.jpg</td>
			        <td><center><a href=""><span class="glyphicon glyphicon-eye-open"></span></a></center></td>
			        <td><center><a href="" class="text-center"><span class="glyphicon glyphicon-pencil"></span></a></center></td>
			        <td><center><a href=""><span class="glyphicon glyphicon-trash"></span></a></center></td>
			      </tr>

			      <tr>
			      	<td>3</td>
			        <td>Pao com badjia</td>
			        <td>20MT</td>
			        <td>joh.jpg</td>
			        <td><center><a href=""><span class="glyphicon glyphicon-eye-open"></span></a></center></td>
			        <td><center><a href="" class="text-center"><span class="glyphicon glyphicon-pencil"></span></a></center></td>
			        <td><center><a href=""><span class="glyphicon glyphicon-trash"></span></a></center></td>
			      </tr>

			      <tr>
			      	<td>3</td>
			        <td>Pao com badjia</td>
			        <td>20MT</td>
			        <td>joh.jpg</td>
			        <td><center><a href=""><span class="glyphicon glyphicon-eye-open"></span></a></center></td>
			        <td><center><a href="" class="text-center"><span class="glyphicon glyphicon-pencil"></span></a></center></td>
			        <td><center><a href=""><span class="glyphicon glyphicon-trash"></span></a></center></td>
			      </tr>

			      <tr>
			      	<td>3</td>
			        <td>Pao com badjia</td>
			        <td>20MT</td>
			        <td>joh.jpg</td>
			        <td><center><a href=""><span class="glyphicon glyphicon-eye-open"></span></a></center></td>
			        <td><center><a href="" class="text-center"><span class="glyphicon glyphicon-pencil"></span></a></center></td>
			        <td><center><a href=""><span class="glyphicon glyphicon-trash"></span></a></center></td>
			      </tr>
			    </tbody>
			  </table>
  </div>
</div><!--Fim do container fluido-->

<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Editar Perfil</h4>
        </div>
        <div class="modal-body">
         	 <form>
			  <div class="form-group">
			    <label for="email">Nome:</label>
			    <input type="email" class="form-control" id="email">
			  </div>
			  <div class="form-group">
			    <label for="pwd">Logotipo:</label>
			    <input type="password" class="form-control" id="pwd">
			  </div>
			  <div class="form-group">
			    <label for="pwd">Telefone:</label>
			    <input type="password" class="form-control" id="pwd">
			  </div>
			  <div class="form-group">
			    <label for="pwd">Email:</label>
			    <input type="password" class="form-control" id="pwd">
			  </div>
			  <button type="submit" class="btn btn-primary">gravar</button>
			</form>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection