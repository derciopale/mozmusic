<?php $__env->startSection('main'); ?>

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
	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($row->id); ?></td>
			<td><img src="<?php echo e(URL::to('/')); ?>/images/<?php echo e($row->foto); ?>" class="img-thumbnail" width="75" /></td>
			<td><?php echo e($row->artista); ?></td>
			<td><?php echo e($row->titulo); ?></td>
			<td><?php echo e($row->genero); ?></td>
			<td><?php echo e($row->preco); ?></td>
			

			<td><audio controls>
  		<source src="<?php echo e(URL::to('/')); ?>/audios/<?php echo e($row->audio); ?>" type="audio/mpeg"></audio></td>
			
			<td><?php echo e($row->ano); ?></td>
			<td>
				
				<form action="<?php echo e(route('musica.destroy', $row->id)); ?>" method="post">
					<a href="<?php echo e(route('musica.show', $row->id)); ?>" class="btn btn-primary">Exibir</a>
					<a href="<?php echo e(route('musica.edit', $row->id)); ?>" class="btn btn-warning">Editar</a>
					<?php echo csrf_field(); ?>
					<?php echo method_field('DELETE'); ?>
					<button type="submit" class="btn btn-danger">Apagar</button>
				</form>
			</td>
		</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php echo $__env->make('musica.parent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\final\musica_moz\musicamoz\resources\views/musica/index.blade.php ENDPATH**/ ?>