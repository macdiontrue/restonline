<form method="post" action="/maps">
	{{ csrf_field() }}
	<input type="text" name="address">
	<button type="submit">Localizar</button>

</form>