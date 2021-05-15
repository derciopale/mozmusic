

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%,40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
</style>
</head>
<body>

<h2>Card</h2>

<div class="card">
  <img src="img_avatar.png" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b>John Doe</b></h4> 
    <p>Architect & Engineer</p> 
    <h4>Ano: <?php echo e($data->ano); ?></h4>
  </div>
</div>

</body>
</html> 
<?php $__env->stopSection(); ?><?php /**PATH C:\xampp\htdocs\final\Laravel-5.8-Crud-Tutorial-master (1)\Tutorial\resources\views/mostra.blade.php ENDPATH**/ ?>