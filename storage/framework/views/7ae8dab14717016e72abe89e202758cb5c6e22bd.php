<?php $__env->startSection('content'); ?>
<section class="check_demo_movie">
    <div class="container">
        <?php if($albums->count() > 0): ?>
        <h2 class=" wow fadeInDown">Check Our <span class="main-color"> Albums</span></h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
            and scrambled it to make a type specimen book.</p>
        <div class="row">
            <?php $__currentLoopData = $albums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <div class="card wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    <div class="card-header">
                        <img src="<?php echo e(asset('uploads/albums/150x150').'/'.@$album->images->first()->image); ?>" src="<?php echo e(asset('uploads/albums/150x150').'/'.@$album->images->first()->image); ?>" class="lazyload">
                    </div>
                    <div class="card-body">
                        <h4> <a href="#"> <?php echo e(@$album->name); ?></a></h4>
                        <div class="rating">
                            <ul class="d-flex justify-content-center rating_stars">
                                <li><i class="fas fa-star star_gold"></i></li>
                                <li><i class="fas fa-star star_gold"></i></li>
                                <li><i class="fas fa-star star_gold"></i></li>
                                <li><i class="fas fa-star star_gold"></i></li>
                                <li><i class="fas fa-star star_gold"></i></li>
                            </ul>
                        </div>
                        <p class="package-price">
                            <span><?php echo e(@$album->status); ?> </span>
                            
                        </p>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
        </div>
        <?php endif; ?>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\roqytask\resources\views/front/index.blade.php ENDPATH**/ ?>