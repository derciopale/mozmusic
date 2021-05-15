<?php $__env->startSection('main'); ?>

<div class="jumbotron text-center">
	<div align="right">
		
	</div>
	<br />
	<!-- <img src="<?php echo e(URL::to('/')); ?>/audios/<?php echo e($data->audio); ?>" class="img-thumbnail" /> -->
	<img src="<?php echo e(URL::to('/')); ?>/images/<?php echo e($data->foto); ?>" class="img-thumbnail" width="400px" heigth="400px" />
	<h4>Artista: <?php echo e($data->artista); ?> </h4>
	<h4>Titulo: <?php echo e($data->titulo); ?></h4>
	<h4>Genero: <?php echo e($data->genero); ?></h4>
	<h4>Preco: <?php echo e($data->preco); ?></h4>
	<h4>Data: <?php echo e($data->ano); ?></h4>


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
          <a href="<?php echo e(URL::to('/')); ?>/audios/<?php echo e($data->audio); ?>" download><button class="btn btn-primary"> Baixar</button></a>
          

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('musica.parent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\final\musica_moz\musicamoz\resources\views/musica/view.blade.php ENDPATH**/ ?>