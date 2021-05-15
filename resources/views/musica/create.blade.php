@extends('musica.parent')

@section('main')
@if($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
<div align="right">
	<a href="{{ route('musica.index') }}" class="btn btn-default">Voltar</a>
</div>

<form method="post" action="{{ route('musica.store') }}" enctype="multipart/form-data">

	@csrf
	<div class="form-group">
		<label class="col-md-4 text-right">Artista:</label>
		<div class="col-md-8">
			<input type="text" name="artista" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Titulo:</label>
		<div class="col-md-8">
			<input type="text" name="titulo" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		
		<!-- <label class="col-md-4 text-right">Genero:</label> -->
		<!-- <div class="col-md-8">
			<input type="text" name="genero" class="form-control input-lg" />
		</div> -->

		<label class="col-md-4 text-right" for="genero">Genero:</label>
		<div class="col-md-8" >
			<select name="genero" id="genero" class="form-control input-lg">
			<option value="kizomba">Kizomba</option>
			<option value="pandza">Pandza</option>
			<option value="zouk">Zouk</option>
			<option value="marrabenta">Marrabenta</option>
			<option value="gospel">Gospel</option>
			<option value="hiphop">Hiphop</option>
			</select>
			</div>

	</div>

	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Preco:</label>
		<div class="col-md-8">
			<input type="text" name="preco" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Ano:</label>
		<div class="col-md-8">
			<input type="date" name="ano" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
		<div class="form-group">
		<label class="col-md-4 text-right">Audio</label>
		<div class="col-md-8">
			<input type="file" name="audio" class="form-control input-lg" />
		</div>
		</div>


	



	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Imagem</label>
		<div class="col-md-8">
			<input type="file" name="foto" class="form-control input-lg" />
		</div>
	</div>
	<br /><br /><br />
	<div class="form-group text-center">
		<input type="submit" name="add" class="btn btn-primary input-lg" value="Adicionar" />
	</div>

</form>

@endsection



