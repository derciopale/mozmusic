@extends('musica.parent')

@section('main')
<div align="right">
	<a href="{{ route('musica.index') }}" class="btn btn-default">Voltar</a>
</div>
<br />

<form method="post" action="{{ route('musica.update', $data->id) }}" enctype="multipart/form-data">

	@csrf
	@method('PATCH')
	<div class="form-group">
		<label class="col-md-4 text-right">Artista:</label>
		<div class="col-md-8">
			<input type="text" name="artista" value="{{ $data->artista }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Titulo:</label>
		<div class="col-md-8">
			<input type="text" name="titulo" value="{{ $data->titulo }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />

	<div class="form-group">
		<label class="col-md-4 text-right">Genero:</label>
		<div class="col-md-8">
			<input type="text" name="genero" value="{{ $data->genero }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />

	<div class="form-group">
		<label class="col-md-4 text-right">Preco:</label>
		<div class="col-md-8">
			<input type="text" name="preco" value="{{ $data->preco }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />

	<div class="form-group">
		<label class="col-md-4 text-right">Ano:</label>
		<div class="col-md-8">
			<input type="date" name="ano" value="{{ $data->ano }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Audio</label>
		<div class="col-md-8">
			<input type="file" name="audio" />
			<img src="{{ URL::to('/') }}/audios/{{ $data->audio }}" class="img-thumbnail" width="100" />
			<input type="hidden" name="hidden_image" value="{{ $data->audio }}" />
		</div>
	</div>

	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Foto</label>
		<div class="col-md-8">
			<input type="file" name="foto" />
			<img src="{{ URL::to('/') }}/images/{{ $data->foto }}" class="img-thumbnail" width="100" />
			<input type="hidden" name="hidden_image" value="{{ $data->foto }}" />
		</div>
	</div>
	<br /><br /><br />
	<div class="form-group text-center">
		<input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
	</div>
</form>
@endsection



