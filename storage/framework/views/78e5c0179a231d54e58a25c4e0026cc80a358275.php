<?php $__env->startSection('content'); ?>
<section class="contact-us bg-light">
    <div class="container">
        <h3 class="text-center">Browse your personal albums Create New   <a href="<?php echo e(url('albums/create')); ?>" class="btn btn-info">Album</a></h3>
        <div class="table-responsive">
        	<table class="table">
		    <thead>
		      <tr>
		        <th>#</th>
		        <th>album</th>
		        <th>status</th>
		        <th>edit</th>
		        <th>delete</th>
		      </tr>
		    </thead>
		    <tbody>
				<?php $__currentLoopData = $albums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		      <tr>
		        <td><?php echo e(@$album->id); ?></td>
		        <td><?php echo e(@$album->name); ?></td>
		        <td><?php echo e(@$album->status); ?></td>
		        <td><a href="<?php echo e(url('albums/'.@$album->id.'/edit')); ?>" class="btn btn-warning">edit</a></td>
		        <td><?php echo $__env->make('front.albums.delete_from_list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></td>
		      </tr>
		      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		     
		    </tbody>
		  </table>
        </div>
     </div>
 </section>

 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\roqytask\resources\views/front/albums/index.blade.php ENDPATH**/ ?>