@extends('musica.parent')

@section('main')

<table class="table table-bordered table-striped">
	<tr>
	<th width="5%">ID</th>
		<th width="10%">Imagem</th>
		<th width="10%">Artista</th>
		<th width="10%">Titulo</th>
		<th width="10%">Genero</th>
		<th width="10%">Preco</th>
		<th width="3%">Audio</th>
		<th width="10%">Ano</th>
		<th width="60%">Accao</th>
	</tr>
	@foreach($data as $row)
		<tr>
			<td>{{$row->id}}</td>
			<td><img src="{{ URL::to('/') }}/images/{{ $row->foto }}" class="img-thumbnail" width="75" /></td>
			<td>{{ $row->artista }}</td>
			<td>{{ $row->titulo }}</td>
			<td>{{ $row->genero }}</td>
			<td>{{ $row->preco }}</td>
			

			<td><audio controls>
  		<source src="{{ URL::to('/') }}/audios/{{ $row->audio }}" type="audio/mpeg"></audio></td>
			
			<td>{{ $row->ano }}</td>
			<td>
				
				<form action="{{ route('musica.destroy', $row->id) }}" method="post">
					<a href="{{ route('musica.show', $row->id) }}" class="btn btn-primary">Exibir</a>
					<a href="{{ route('musica.edit', $row->id) }}" class="btn btn-warning">Editar</a>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">Apagar</button>
				</form>
			</td>
		</tr>
	@endforeach
</table>