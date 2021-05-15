@extends('musica.parent')

@section('main')

<div class="jumbotron text-center">
	<div align="right">
		
	</div>
	<br />
	<!-- <img src="{{ URL::to('/') }}/audios/{{ $data->audio }}" class="img-thumbnail" /> -->
	<img src="{{ URL::to('/') }}/images/{{ $data->foto}}" class="img-thumbnail" width="400px" heigth="400px" />
	<h4>Artista: {{ $data->artista }} </h4>
	<h4>Titulo: {{ $data->titulo }}</h4>
	<h4>Genero: {{ $data->genero }}</h4>
	<h4>Preco: {{ $data->preco }}</h4>
	<h4>Data: {{ $data->ano }}</h4>


<!-- Modal Pagamento -->
<div class="container">
 
  <button type="button" class="btn btn-info btn-lg" id="myBtn">Pagar</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Pagamento</h4>
		 <img src="https://jornal.musicambicano.com/img/M-pesa-logo.png" alt="" style="width: 75px; heigth: 75px;">
        </div>
        <div class="modal-body">
          <input class="form-control"  type="number" name="" placeholder="84/85 xxxxxxx" >

        </div>
        <div class="modal-footer">
        <button class="btn btn-primary">Enviar</button></a>
          <a href="{{ URL::to('/') }}/audios/{{ $data->audio }}" download><button class="btn btn-primary"> Baixar</button></a>
          

        </div>
        
      </div>
      

    </div>
  </div>
  
</div>

<script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });
});
</script>

<!-- Fim Modal -->

</div>
@endsection
