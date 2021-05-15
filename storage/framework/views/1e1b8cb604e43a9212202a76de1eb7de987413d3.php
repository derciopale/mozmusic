<?php $__env->startSection('main'); ?>
<div align="right">
	<a href="<?php echo e(route('musica.index')); ?>" class="btn btn-default">Voltar</a>
</div>
<br />

<form method="post" action="<?php echo e(route('musica.update', $data->id)); ?>" enctype="multipart/form-data">

	<?php echo csrf_field(); ?>
	<?php echo method_field('PATCH'); ?>
	<div class="form-group">
		<label class="col-md-4 text-right">Artista:</label>
		<div class="col-md-8">
			<input type="text" name="artista" value="<?php echo e($data->artista); ?>" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Titulo:</label>
		<div class="col-md-8">
			<input type="text" name="titulo" value="<?php echo e($data->titulo); ?>" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />

	<div class="form-group">
		<label class="col-md-4 text-right">Genero:</label>
		<div class="col-md-8">
			<input type="text" name="genero" value="<?php echo e($data->genero); ?>" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />

	<div class="form-group">
		<label class="col-md-4 text-right">Preco:</label>
		<div class="col-md-8">
			<input type="text" name="preco" value="<?php echo e($data->preco); ?>" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />

	<div class="form-group">
		<label class="col-md-4 text-right">Ano:</label>
		<div class="col-md-8">
			<input type="date" name="ano" value="<?php echo e($data->ano); ?>" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Audio</label>
		<div class="col-md-8">
			<input type="file" name="audio" />
			<img src="<?php echo e(URL::to('/')); ?>/audios/<?php echo e($data->audio); ?>" class="img-thumbnail" width="100" />
			<input type="hidden" name="hidden_image" value="<?php echo e($data->audio); ?>" />
		</div>
	</div>

	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Foto</label>
		<div class="col-md-8">
			<input type="file" name="foto" />
			<img src="<?php echo e(URL::to('/')); ?>/images/<?php echo e($data->foto); ?>" class="img-thumbnail" width="100" />
			<input type="hidden" name="hidden_image" value="<?php echo e($data->foto); ?>" />
		</div>
	</div>
	<br /><br /><br />
	<div class="form-group text-center">
		<input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
	</div>
</form>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('musica.parent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\final\musica_moz\musicamoz\resources\views/musica/edit.blade.php ENDPATH**/ ?>