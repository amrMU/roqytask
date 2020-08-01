<!DOCTYPE html>
<html>
<head>
    <script data-ad-client="ca-pub-6629319857217526" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    <title><?php echo e(@$setting->$title); ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="2sugIQdSpuHy2hOWzTrh1E7avOxq7DQBU3U5Yvg1MgE" />
     <?php echo $__env->make('dashboard.layouts.meta_tags_social', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo e(@$setting->$title); ?></title>

    <!-- favicon -->
    <link href="<?php echo e(asset('site/')); ?>/favicon.png" rel=icon>

    <!-- web-fonts -->
    <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">

    <!-- font-awesome -->
    <link href="<?php echo e(asset('site/')); ?>/css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="<?php echo e(asset('site/')); ?>/css/bootstrap.min.css" rel="stylesheet">


    <!-- Style CSS -->
    <link href="<?php echo e(asset('site/')); ?>/css/style.css" rel="stylesheet">


      <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?>
      <link href="https://fonts.googleapis.com/css?family=Harmattan|Tajawal&display=swap" rel="stylesheet">

      <style type="text/css">
        .right{
          float: right;
          text-align: right;
          font-family: 'Harmattan', sans-serif;
          font-family: 'Tajawal', sans-serif;
        }
        .mg-b-2{
            margin-bottom: 2%
        }
        .font-tajawal{
          font-family: 'Harmattan', sans-serif;
          font-family: 'Tajawal', sans-serif;
        }
      </style>



    <?php endif; ?>
    <style>


     
     .social-icon{
          /*position: fixed;*/
          left: 93px;
          bottom: 16px;
          z-index: 903;
        }
        .nav-spe{
          max-width: 45px;
          max-height: 45px;
        }
        
        .resume-li{
            padding:8px;
        }
    }
    
       
</style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar">
<div id="main-wrapper">
<!-- Page Preloader -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>

<div class="columns-block">
<div class="left-col-block blocks">
    <header class="header">
        <div class="content text-center">
            <h1 class="<?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> font-tajawal <?php endif; ?>"><?php echo app('translator')->getFromJson('home.hi'); ?>, <?php echo app('translator')->getFromJson('home.i'); ?> <?php echo e(@$setting->$title); ?></h1>

            <p class="lead <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> font-tajawal <?php endif; ?>"><?php echo e(@$setting->$specialize); ?></p>
            <p class="lead <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> font-tajawal <?php endif; ?>">
                 <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?>
                <style type="text/css">
                    @media (min-width: 1349) {

                        .shield {
                             right: 14%;
                             position: relative;
                        }
                    }
                     @media (min-width: 373) {

                        .shield {
                             right: 1%;
                             position: relative;
                        }
                    }

                </style>
                <?php else: ?>

                <?php endif; ?>
              <img src="<?php echo e(asset('site/img/shield.png')); ?>" class=" shield <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> right <?php endif; ?>" style="max-width: 26px;" alt="shield">
              <?php echo app('translator')->getFromJson('home.avillable_as_freelancer'); ?>
            </p>
       
            <ul class="social-icon">
                <?php $__currentLoopData = $setting->social_media_link; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="resume-li">
                  <a href="<?php echo e(@$link->url); ?>" title="<?php echo e($link->$name); ?>" target="_blank"><img src="<?php echo e(url($link->icon)); ?>" class="nav-spe" alt="icon"></a>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <li title="resume" class="resume-li"><a href="<?php echo e(url($setting->cv)); ?>" target="_blank">
                    <img src="<?php echo e(url('site/img/account.png')); ?>" alt="account" class="nav-spe"></a></li>

                <?php if(LaravelLocalization::getCurrentLocale() == 'en'): ?>
                  <li title="Arabic"  class="resume-li">
                    <a   rel="alternate" hreflang="ar" href="<?php echo e(LaravelLocalization::getLocalizedURL('ar', null, [], true)); ?>">
                    <img src="<?php echo e(url('site/img/egypt.png')); ?>" alt='egypt icon' class="nav-spe"></a>
                  </li>
                <?php else: ?>
                  <li title="English"  class="resume-li">
                    <a   rel="alternate" hreflang="en" href="<?php echo e(LaravelLocalization::getLocalizedURL('en', null, [], true)); ?>" href="" >
                      <img src="<?php echo e(url('site/img/uk.png')); ?>" alt='uk icon' class="nav-spe"></a>
                  </li>
                <?php endif; ?>

            </ul>
        </div>
        <div class="profile-img"  style="background-image: url(<?php echo e(@url($setting->logo)); ?>);"></div>
    </header>
    <!-- .header-->
</div>


<div class="right-col-block blocks">
<section class="intro section-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="<?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> right <?php endif; ?>"><?php echo app('translator')->getFromJson('home.what_about_me'); ?></h2>
                </div>
            </div>
            <div class="col-md-12  <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> right <?php endif; ?>">
                <p>
                   <?php echo e(@$setting->$content); ?>


                </p>

            </div>
        </div>
    </div>
</section>

<!-- .expertise-wrapper -->
<?php if($expertises->count()  > 0 ): ?>
<section class="expertise-wrapper section-wrapper gray-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="<?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> right <?php endif; ?>"><?php echo app('translator')->getFromJson('home.expertise'); ?></h2>
                </div>
            </div>
        </div>
        <!-- .row -->

        <div class="row">
            <?php $__currentLoopData = $expertises; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $expertise): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row col-md-6">
                <div class="expertise-item">
                    <h3 class="<?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> right <?php endif; ?>"><?php echo e(@$expertise->$name); ?></h3>
                    <?php if($expertise->$content != null): ?>
                    <p class="<?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> right <?php endif; ?>">
                    <?php echo e(@$expertise->$content); ?>.
                    </p>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <!-- .row -->

    </div>
    <!--.container-fluid-->
</section>
<!-- .expertise-wrapper -->
<?php endif; ?>

<section class="section-wrapper skills-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="<?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> right <?php endif; ?>"><?php echo app('translator')->getFromJson('home.skills'); ?></h2>
                </div>
            </div>
        </div>
        <!--.row-->
        <div class="row">
            <div class="col-md-12">
                <div class="progress-wrapper">

                      <div class="progress-item">
                          <span class="progress-title">Operating Systems (Linux , Windows)</span>

                          <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="62" aria-valuemin="0"
                            aria-valuemax="100" style="width: 85%"><span class="progress-percent"> 85%</span>
                          </div>
                        </div>
                        <!-- .progress -->
                      </div>
                      <!-- .skill-progress -->


                    <div class="progress-item">
                        <span class="progress-title">Web Development</span>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="62" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 85%"><span class="progress-percent"> 85%</span>
                            </div>
                        </div>
                        <!-- .progress -->
                    </div>
                    <!-- .skill-progress -->

                     <div class="progress-item">
                        <span class="progress-title">Payment Integration (Paypall, Paytabs) SDK's</span>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 75%;"><span class="progress-percent"> 75%</span>
                            </div>
                        </div>
                        <!-- /.progress -->
                    </div>
                    <!-- /.skill-progress -->


                    <div class="progress-item">
                        <span class="progress-title">Google SDK'S ( FCM Notification , Google Maps , Google Places, &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Youtube, Google Drive, Google translations , Social ) </span>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 75%;"><span class="progress-percent"> 75%</span>
                            </div>
                        </div>
                        <!-- /.progress -->
                    </div>
                    <!-- /.skill-progress -->


                    <div class="progress-item">
                        <span class="progress-title">Facebook SDK</span>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 85%;"><span class="progress-percent"> 85%</span>
                            </div>
                        </div>
                        <!-- /.progress -->
                    </div>
                    <!-- /.skill-progress -->



                    <div class="progress-item">
                        <span class="progress-title">RESTFUL Web Service</span>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 85%;"><span class="progress-percent"> 85%</span>
                            </div>
                        </div>
                        <!-- /.progress -->
                    </div>
                    <!-- /.skill-progress -->



                    <div class="progress-item">
                        <span class="progress-title">ORM (Object / Relational Mapping)</span>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 90%;"><span class="progress-percent"> 85%</span>
                            </div>
                        </div>
                        <!-- /.progress -->
                    </div>
                    <!-- /.skill-progress -->

                    <div class="progress-item">
                        <span class="progress-title">Laravel</span>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 85%;"><span class="progress-percent"> 85%</span>
                            </div>
                        </div>
                        <!-- /.progress -->
                    </div>
                    <!-- /.skill-progress -->


                    <div class="progress-item">
                        <span class="progress-title">Symfony</span>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 10%;"><span class="progress-percent"> 10%</span>
                            </div>
                        </div>
                        <!-- /.progress -->
                    </div>
                    <!-- /.skill-progress -->

                    <div class="progress-item">
                        <span class="progress-title">Object Oprianted Programing</span>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 75%"><span class="progress-percent"> 75%</span>
                            </div>
                        </div>
                        <!-- /.progress -->
                    </div>
                    <!-- /.skill-progress -->


                    <div class="progress-item">
                        <span class="progress-title">PHP Design Patern</span>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 75%"><span class="progress-percent"> 75%</span>
                            </div>
                        </div>
                        <!-- /.progress -->
                    </div>
                    <!-- /.skill-progress -->



                    <div class="progress-item">
                        <span class="progress-title">PHP</span>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 90%"><span class="progress-percent"> 90%</span>
                            </div>
                        </div>
                        <!-- /.progress -->
                    </div>
                    <!-- /.skill-progress -->


                    <div class="progress-item">
                        <span class="progress-title">Databases</span>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 55%;"><span class="progress-percent"> 55%</span>
                            </div>
                        </div>
                        <!-- /.progress -->
                    </div>
                    <!-- /.skill-progress -->

                    <div class="progress-item">
                        <span class="progress-title">MySQl</span>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 80%;"><span class="progress-percent"> 80%</span>
                            </div>
                        </div>
                        <!-- .progress -->
                    </div>
                    <!-- .skill-progress -->

                     <div class="progress-item">
                        <span class="progress-title">Git Sourse Countrol ( Github, Gitlab, bitbucket )</span>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 90%;"><span class="progress-percent"> 90%</span>
                            </div>
                        </div>
                        <!-- .progress -->
                    </div>
                    <!-- .skill-progress -->

                    <div class="progress-item">
                        <span class="progress-title">Ajax Tech</span>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 75%;"><span class="progress-percent"> 75%</span>
                            </div>
                        </div>
                        <!-- .progress -->
                    </div>
                    <!-- .skill-progress -->



                    <div class="progress-item">
                        <span class="progress-title">Bootstrap</span>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 70%;"><span class="progress-percent"> 70%</span>
                            </div>
                        </div>
                        <!-- .progress -->
                    </div>
                    <!-- .skill-progress -->
                    <div class="progress-item">
                        <span class="progress-title">Socket.IO</span>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 35%;"><span class="progress-percent"> 35%</span>
                            </div>
                        </div>
                        <!-- .progress -->
                    </div>
                    <!-- .skill-progress -->
                    <!-- .skill-progress -->
                    <div class="progress-item">
                        <span class="progress-title">VueJs</span>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 35%;"><span class="progress-percent"> 35%</span>
                            </div>
                        </div>
                        <!-- .progress -->
                    </div>
                    <!-- .skill-progress -->
    
                    <!-- .skill-progress -->

                    <div class="progress-item">
                        <span class="progress-title">JQuery</span>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 70%;"><span class="progress-percent"> 70%</span>
                            </div>
                        </div>
                        <!-- .progress -->
                    </div>
                    <!-- .skill-progress -->


                    <div class="progress-item">
                        <span class="progress-title">Javascript</span>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 75%;"><span class="progress-percent"> 75%</span>
                            </div>
                        </div>
                        <!-- .progress -->
                    </div>
                    <!-- .skill-progress -->

                    <div class="progress-item">
                        <span class="progress-title">CSS & CSS3</span>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 50%;"><span class="progress-percent"> 50%</span>
                            </div>
                        </div>
                        <!-- .progress -->
                    </div>
                    <!-- .skill-progress -->

                      <div class="progress-item">
                        <span class="progress-title">HTML & HTML5</span>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 90%;"><span class="progress-percent"> 90%</span>
                            </div>
                        </div>
                        <!-- .progress -->
                    </div>
                    <!-- .skill-progress -->




                </div>
                <!-- /.progress-wrapper -->
            </div>
        </div>
        <!--.row -->
    </div>
    <!-- .container-fluid -->
</section>
<!-- .skills-wrapper -->


<!-- .section-experience -->


<!-- .section-education -->


<!-- .section-publications -->


<!-- .portfolio -->

<section class="section-contact section-wrapper gray-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="<?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> right <?php endif; ?>"><?php echo app('translator')->getFromJson('home.get_in_touch'); ?></h2>
                </div>
            </div>
        </div>
        <!--.row-->
        <div class="row">
            <div class="col-md-12">
              <?php if($setting->address->count() > 0): ?>
                <address class="col-md-6 <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> right  mg-b-2 <?php endif; ?>">
                    <strong><?php echo app('translator')->getFromJson('home.address'); ?></strong><br>
                    <?php $__currentLoopData = $setting->address; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $addres): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e(@$addres->address_ar); ?><br>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </address >
              <?php endif; ?>
              <?php if($setting->phones->count() > 0): ?>
                <address class="col-md-6 <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> right  mg-b-2 <?php endif; ?>">
                    <strong><?php echo app('translator')->getFromJson('home.phone'); ?></strong><br>
                     <?php $__currentLoopData = $setting->phones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $phone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e(@$phone->phone); ?><br>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </address>
              <?php endif; ?>
              <?php if($setting->whatsapp->count() > 0): ?>
                <address class="col-md-6 <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> right  mg-b-2 <?php endif; ?>">
                    <strong><?php echo app('translator')->getFromJson('home.whatsapp'); ?></strong><br>
                     <?php $__currentLoopData = $setting->whatsapp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $whatsapp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e(@$whatsapp->whatsapp); ?><br>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </address>
                <?php endif; ?>
                <?php if($setting->emails->count() > 0): ?>
                <address class="col-md-6 <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> right  mg-b-2 <?php endif; ?>">
                    <strong><?php echo app('translator')->getFromJson('home.email'); ?></strong><br>
                    <?php $__currentLoopData = $setting->emails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $email): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="mailto:<?php echo e(@$email->email); ?>"><?php echo e(@$email->email); ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </address>

                <?php endif; ?>
            </div>
        </div>
        <!--.row-->
        <div class="row">
            <div class="col-md-12">
                <div class="feedback-form">
                    <h2 class="<?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> right <?php endif; ?>"> <?php echo app('translator')->getFromJson('home.hire_me'); ?> </h2>
                    <br>
                    <?php if($errors->any()): ?>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="alert alert-danger alert-dismissible" >
                      <a href="#" class="close" data-dismiss="alert" aria-label="close" style="right: 5px;">&times;</a><?php echo e($error); ?>

                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    <?php if(Session::has('success')): ?>
                    <div class="alert alert-success alert-dismissible">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close" style="right: 5px;">&times;</a><?php echo e(Session::get('success')); ?>

                    </div>
                    <?php endif; ?>
                   <div class="row">
                      <form id="contactForm" action="<?php echo e(url(LaravelLocalization::getCurrentLocale().'/contact')); ?>" method="POST">
                      <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <input type="text" name="name" required="" class="form-control <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> right  mg-b-2 <?php endif; ?>" id="InputName"
                                   placeholder="<?php echo app('translator')->getFromJson('home.name'); ?>" value="<?php echo e(Request::old('name')); ?>">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" required="" class="form-control <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> right  mg-b-2 <?php endif; ?>" id="InputEmail"
                                   placeholder="<?php echo app('translator')->getFromJson('home.email'); ?>"  value="<?php echo e(Request::old('email')); ?>">
                        </div>
                        <div class="form-group">
                            <input type="number" name="phone" required="" class="form-control <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> right  mg-b-2 <?php endif; ?>" id="Inputphone"
                                   placeholder="<?php echo app('translator')->getFromJson('home.phone'); ?>"  value="<?php echo e(Request::old('phone')); ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" class="form-control <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> right  mg-b-2 <?php endif; ?>" id="InputSubject"
                                   placeholder="<?php echo app('translator')->getFromJson('home.subject'); ?>" value="<?php echo e(Request::old('subject')); ?>">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> right  mg-b-2 <?php endif; ?>" rows="4" required="" name="message" id="message-text"
                                      placeholder="<?php echo app('translator')->getFromJson('home.placeholder_text'); ?>"><?php echo e(Request::old('message')); ?></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary"><?php echo app('translator')->getFromJson('home.send'); ?></button>
                    </form>
                   </div>
                </div>
                <!-- .feedback-form -->


            </div>
        </div>
    </div>
    <!--.container-fluid-->
</section>
<!--.section-contact-->

<footer class="footer">
    <div class="copyright-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="copytext">&copy; 2020 Online Refrence. All rights reserved <a
                            href="https://www.linkedin.com/in/amrmuhamed" target="_blank">Amr Muhamed</a></div>
                </div>
            </div>
            <!--.row-->
        </div>
        <!-- .container-fluid -->
    </div>
    <!-- .copyright-section -->
</footer>
<!-- .footer -->
</div>
<!-- .right-col-block -->
</div>
<!-- .columns-block -->
 <a href="<?php echo e(url('img/whatsapp-share-tel-00201061637022.JPG')); ?>"   target="_blank"  style=" position: fixed; left: 0px; bottom: 0px; z-index: 906; min-width: 45; padding: 15px 30px; border-radius: 36px 0px;  font-weight: bold; font-size: 12px; line-height: 1.5; text-align: center; letter-spacing: 1.3px; color: #fff; text-transform: uppercase;word-break: break-word;" class="whatsapp">
            <img src="<?php echo e(asset('/img/whatsapp.png')); ?>"  alt="whatsapp icon" style="max-width: 85px;max-height: 85px;">
        </a>
</div>
<!-- #main-wrapper -->

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5e7090a1eec7650c33207eda/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<!-- jquery -->
<script src="<?php echo e(asset('site/')); ?>/js/jquery-2.1.4.min.js"></script>

<!-- Bootstrap -->
<script src="<?php echo e(asset('site/')); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo e(asset('site/')); ?>/js/scripts.js"></script>
<script src="https://www.gstatic.com/firebasejs/3.6.10/firebase.js"></script>
<?php if(Auth::check()): ?>
 <script>
    $(document).ready(function(){
            Notification.requestPermission();
    });

    var config = {
          apiKey: "<?php echo e(@$fcm_config['apiKey']); ?>",
          authDomain: "<?php echo e(@$fcm_config['authDomain']); ?>",
          databaseURL: "<?php echo e(@$fcm_config['databaseURL']); ?>",
          projectId: "<?php echo e(@$fcm_config['projectId']); ?>",
          storageBucket: "<?php echo e(@$fcm_config['storageBucket']); ?>",
          messagingSenderId: "<?php echo e(@$fcm_config['messagingSenderId']); ?>",
          appId: "<?php echo e(@$fcm_config['appId']); ?>",
          measurementId: "<?php echo e(@$fcm_config['measurementId']); ?>",

        };
    firebase.initializeApp(config);


    var database = firebase.database().ref().child('notifications_contactus');
   
    database.on('child_added', function(data) {
      
    if(Notification.permission!=='default'){
        if('<?php echo e(Auth::user()->type_user); ?>' =='admin' && data.val().is_read == 0){
        var notify;
        notify= new Notification('New message from Amrmoh.com Says: '+data.val().subject,{
                    'body' : data.val().message,
                    'icon' :  '<?php echo e(asset('img/logo.png')); ?>',
                    'tag'  : data.getKey()
        });

          

            //start make notification in firbase is read after send for user
                firebase.database().ref('notifications_contactus').child( notify.tag).update({
                    is_read:'1',
                    subject:data.val().subject,
                    message:data.val().message,
                    icon: '<?php echo e(asset('img/logo.png')); ?>',
                    url:'<?php echo e(url('/')); ?>',
                    is_clicked:'1'
                });
                //end make notification in firbase is read after send for user
                notify.onclick = function(){
                window.open( data.val().url, '_blank');

                }
            }

        }else{
            console.log('Please allow the notification first');
        }
  });

         window.onload = function(){ setTimeout("console.clear()",3000) }
    
 </script>
 <?php endif; ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\amrmoh.com\resources\views/front/index.blade.php ENDPATH**/ ?>