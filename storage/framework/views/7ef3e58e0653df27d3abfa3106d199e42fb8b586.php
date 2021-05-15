<?php $__env->startSection('main'); ?>

<div class="jumbotron text-center">
	<div align="right">
		<a href="<?php echo e(route('crud.index')); ?>" class="btn btn-default">Voltar</a>
	</div>
	<br />
	<img src="<?php echo e(URL::to('/')); ?>/images/<?php echo e($data->image); ?>" class="img-thumbnail" />
	<h3>Nome - <?php echo e($data->first_name); ?> </h3>
	<h3>Apelido - <?php echo e($data->last_name); ?></h3>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('crud.parent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\final\Laravel-5.8-Crud-Tutorial-master (1)\Tutorial\resources\views/crud/view.blade.php ENDPATH**/ ?>