<!DOCTYPE html>
<html>

<head>
    <title> Smart Movies </title>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="author" content="RoQaY">
    <meta name="robots" content="index, follow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=" Smart Movies website">
    <meta name="keywords" content=" Smart Movies ">
    <meta name="csrf-token" content="V2G8zLS7dL5HzdfwxaBDewvJvAKCyeThQE4NBtJv">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo e(asset('site')); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo e(asset('/site')); ?>/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo e(asset('/site')); ?>/css/animate.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo e(asset('/site')); ?>/css/all.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo e(asset('/site')); ?>/css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo e(asset('/site')); ?>/css/responsive.css">
</head>

<body>

    <div class="body_wrapper">
        <div class="preloader">
            <div class="preloader-loading">
                <img src="<?php echo e(asset('site')); ?>/images/logo-m.png" data-src="<?php echo e(asset('site')); ?>/images/logo-m.png" class="lazyload">
            </div>
        </div>

        <div class="top_nav">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <ul class="d-flex about-site">
                            <li><a href="#">Questions</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Terms Of Privacy</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <ul class="d-flex social ">
                            <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a></li>
                            <li> <a href="#"> <i class="fab fa-twitter"></i> </a></li>
                            <li> <a href="#"> <i class="fab fa-instagram"></i> </a></li>
                            <li> <a href="#"> <i class="fab fa-snapchat-ghost"></i> </a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
       <div class="logo text-center">
        <a class="navbar-brand" href="index.html"><img src="<?php echo e(asset('site')); ?>/images/logo-m.png" data-src="<?php echo e(asset('site')); ?>/images/logo-m.png"
            class="lazyload"></a>
       </div>
        <section class="contact-us bg-light">
            <div class="container">
                <h3 class="text-center">Sign Up To Join Us</h3>
             
                <div class="row justify-content-center">
                    <div class="col-md-7 col-sm-10">
                        <div class="contact-form">
                      <form method="POST" action="<?php echo e(route('register')); ?>">
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
                                    <label for="inputName">Write Your Name</label>
                                   <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail">Your Email Addrss</label>
                                    <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>
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
                                     Sign Up
                                    </button>
                                </div>

                                <div >
                                   <b> <span>Have An Account ?</span> <a href="<?php echo e(url('u/login')); ?>" class="main-color ">Login</a></b>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <footer class="pt-0"> 
            <div class="copyrights">
                <p>© All Rights reserved to Smart Movies website 2017</p>
            </div>
        </footer>
        <span class="scroll-top"> <a href="#"><i class="fas fa-chevron-up"></i></a> </span>

  
    </div>

    <script src="<?php echo e(asset('site')); ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo e(asset('site')); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo e(asset('site')); ?>/js/popper.min.js"></script>
    <script src="<?php echo e(asset('site')); ?>/js/lazysizes.min.js"></script>
    <script src="<?php echo e(asset('site')); ?>/js/fontawesome.min.js"></script>
    <script src="<?php echo e(asset('site')); ?>/js/all.min.js"></script>
    <script src="<?php echo e(asset('site')); ?>/js/wow.min.js"></script>
    <script src="<?php echo e(asset('site')); ?>/js/main.js"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\roqytask\resources\views/auth/register.blade.php ENDPATH**/ ?>