<?php $__env->startSection('content'); ?>
<section class="contact-us bg-light">
    <div class="container">
        <h3 class="text-center">create New Album </h3>
     
        <div class="row justify-content-center">
            <div class="col-md-7 col-sm-10">
                <div class="contact-form">
                <form method="POST" action="<?php echo e(url('albums')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                      
              <?php if(Session('success')): ?>
               <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong><?php echo app('translator')->getFromJson('home.success'); ?>!</strong> <?php echo e(session('success')); ?>.
            </div>
            <?php endif; ?>            
            <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <?php endif; ?>  
				<div class="form-group ">
                    <label for="inputName">Write Album Name</label>
                   <input id="name" type="text" class="form-control" name="name" value="<?php echo e(@old('name')); ?>" required autofocus>
                </div>
                <div class="form-group">
                    <label for="inputEmail">Your Email Addrss</label>
                    <textarea name="content" class="form-control"><?php echo e(old('content')); ?></textarea>
                </div>
              
              
                <div class="form-group">
                    <label for="inputConfirmPassword">photos</label>
                    <input  type="file" class="form-control" name="images[]"  required>
                </div>

                 <div class="form-group">
                    <h5>album status</h5>
                   <label>
                    public
                       <input type="radio" name="status" value="public">
                   </label>
                   <label>
                    private
                       <input type="radio" name="status" value="private">
                   </label>
                </div>

                <div class="text-center p-2">
                    <button type="submit" class="btn btn-gradiant">
                       save 
                    </button>
                </div>

                   
                </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\roqytask\resources\views/front/albums/create.blade.php ENDPATH**/ ?>