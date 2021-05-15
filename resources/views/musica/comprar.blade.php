@extends('musica.parent')

@section('main')

<div class="jumbotron text-center">
	<div align="right">
		<a href="" class="btn btn-default">Comprar</a>
	</div>
	<br />
	<!-- <img src="{{ URL::to('/') }}/audios/{{ $data->audio }}" class="img-thumbnail" /> -->
	<img src="{{ URL::to('/') }}/images/{{ $data->foto}}" class="img-thumbnail" />
	<h4>Artista: {{ $data->artista }} </h4>
	<h4>Titulo: {{ $data->titulo }}</h4>
	<h4>Genero: {{ $data->genero }}</h4>
	<h4>Preco: {{ $data->preco }}</h4>
	<h4>Ano: {{ $data->ano }}</h4>
	
</div>
@endsection
