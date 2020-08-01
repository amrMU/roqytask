    <!-- start FB -->
    <meta property="fb:app_id"             content="2642923069053688" />
    <meta property="og:url"                content="<?php echo e(URL::to('/')); ?>" />
    <meta property="og:type"               content="website" />
    <meta property="og:title"              content="<?php echo e(@$setting->title_en); ?>" />
    <meta property="og:description"        content="<?php echo e(@$setting->content_en); ?>" /> 
    <meta name=”description” content="<?php echo e(@$setting->content_en); ?>"/>

    <meta property="og:image"              content="<?php echo e(URL::to($setting->logo)); ?>" />
    
    
    <meta name="keywords"              content="
    <?php echo e(@$setting->meta_tags); ?> <?php $__currentLoopData = $expertises; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $expertise): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e(@$expertise->meta_tags); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>" />
    <meta name="robots" content="index, follow">

     <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?>
     <meta http-equiv="content-language" content="ar" />
     <?php else: ?> 
        <meta http-equiv="content-language" content="en" />
     <?php endif; ?>




    <!-- End FB -->

    <!-- start Twitter -->
    <!-- End Twitter -->
