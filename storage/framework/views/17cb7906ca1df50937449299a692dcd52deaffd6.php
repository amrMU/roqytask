<?php $__env->startSection('content'); ?>
<section class="contact-us bg-light">
    <div class="container">
        <h3 class="text-center">Update Your Profile Info </h3>
     
        <div class="row justify-content-center">
            <div class="col-md-7 col-sm-10">
                <div class="contact-form">
                <form method="POST" action="<?php echo e(url('i/profile')); ?>">
                <?php echo csrf_field(); ?>
                      
                       
				<div class="form-group ">
                    <label for="inputName">Write Your Name</label>
                   <input id="name" type="text" class="form-control" name="name" value="<?php echo e(@$user->name); ?>" required autofocus>
                </div>
                <div class="form-group">
                    <label for="inputEmail">Your Email Addrss</label>
                    <input id="email" type="email" class="form-control" name="email" value="<?php echo e(@$user->email); ?>" required>
                </div>
                <div class="form-group">
                    <label for="inputPassword">Enter Password </label>
                     <input id="password" type="password" class="form-control" name="password" required>

                </div>
              
                <div class="form-group">
                    <label for="inputConfirmPassword">Confirm Password </label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
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
<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\roqytask\resources\views/front/profile.blade.php ENDPATH**/ ?>