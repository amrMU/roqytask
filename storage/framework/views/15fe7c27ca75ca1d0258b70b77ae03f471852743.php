<?php $__env->startSection('content'); ?>
    
        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Page header -->
            <div class="page-header page-header-default">
                <div class="page-header-content">
                    <div class="page-title">
                        <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold"><?php echo app('translator')->getFromJson('home.home'); ?></span> - <?php echo app('translator')->getFromJson('home.dashboard'); ?></h4>
                    </div>

                    <div class="heading-elements">
                        <div class="heading-btn-group">
                          
                        </div>
                    </div>
                </div>

                <div class="breadcrumb-line">
                    <ul class="breadcrumb">
                        <li><a href="<?php echo e(URL::to('ar/admin/home')); ?>"><i class="icon-home2 position-left"></i> <?php echo app('translator')->getFromJson('home.home'); ?></a></li>
                        <li class="active"> <?php echo app('translator')->getFromJson('home.dashboard'); ?></li>
                    </ul>

                </div>
            </div>
            <!-- /page header -->


            <!-- Content area -->
            <div class="content">

                <!-- Main charts -->
                <div class="row">
                </div>
                <!-- /main charts -->

                    <!-- Quick stats boxes -->
                    <div class="row">
                            <div class="col-lg-4">

                                <!-- Members online -->
                                <div class="panel bg-teal-400">
                                    <div class="panel-body">
                                        <div class="heading-elements">
                                           
                                        </div>

                                        <h3 class="no-margin"><?php echo e(@$albums->where('status','public')->count()); ?></h3>
                                        Public Albums
                                       
                                    </div>

                                    <div class="container-fluid">
                                        <div class="chart" id="members-online"></div>
                                    </div>
                                </div>
                                <!-- /members online -->

                            </div>

                            <div class="col-lg-4">

                                <!-- Current server load -->
                                <div class="panel bg-pink-400">
                                    <div class="panel-body">
                                        <div class="heading-elements">
                                          
                                        </div>

                                        <h3 class="no-margin"><?php echo e(@$albums->where('status','private')->count()); ?></h3>
                                        Private Albums
                                    </div>

                                    <div class="chart" id="server-load"></div>
                                </div>
                                <!-- /current server load -->

                            </div>

                            <div class="col-lg-4">
                                <!-- Today's revenue -->
                                <div class="panel bg-blue-400">
                                    <div class="panel-body">
                                        <div class="heading-elements"></div>

                                        <h3 class="no-margin"><?php echo e($users->where('type_user','user')->count()); ?></h3>
                                        Users Count
                                    </div>

                                    <div class="chart" id="today-revenue"></div>
                                </div>
                                <!-- /today's revenue -->

                            </div>

                                <div class="col-lg-4">
                                <!-- Today's revenue -->
                                <div class="panel bg-warning-400">
                                    <div class="panel-body">
                                        <div class="heading-elements"></div>

                                        <h3 class="no-margin"><?php echo e($users->where('type_user','admin')->count()); ?></h3>
                                        Admin Count
                                    </div>

                                    <div class="chart" id="today-revenue"></div>
                                </div>
                                <!-- /today's revenue -->

                            </div>
                        </div>
                        <!-- /quick stats boxes -->


                <!-- Dashboard content -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Marketing campaigns -->
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h6 class="panel-title"><?php echo app('translator')->getFromJson('home.browsing_info'); ?></h6>
                                <div class="heading-elements">
                                    <span class="label bg-success heading-text">0 <?php echo app('translator')->getFromJson('home.active'); ?></span>
                                 
                                    <ul class="icons-list">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <!-- <li><a href="#"><i class="icon-sync"></i> Update data</a></li> -->
                                                <!-- <li><a href="#"><i class="icon-list-unordered"></i> Detailed log</a></li> -->
                                                <li><a href="<?php echo e(URL::to('ar/admin/reports_browsing')); ?>"><i class="icon-copy"></i> <?php echo app('translator')->getFromJson('home.full_report'); ?></a></li>
                                                <!-- <li class="divider"></li> -->
                                                <!-- <li><a href="#"><i class="icon-cross3"></i> Clear list</a></li> -->
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- table reports -->
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                    <tr>
                                    <th><?php echo app('translator')->getFromJson('home.user'); ?></th>                                        
                                    <th class="col-md-2"><?php echo app('translator')->getFromJson('home.action'); ?></th>
                                    <th class="col-md-2"><?php echo app('translator')->getFromJson('home.since'); ?></th>
                                    <th class="col-md-2"><?php echo app('translator')->getFromJson('home.ip'); ?></th>
                                    <th class="col-md-2"><?php echo app('translator')->getFromJson('home.location'); ?></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                          
                                    </tbody>
                                </table>
                            </div>
                            <!-- table reports -->

                        </div>
                        <!-- /marketing campaigns -->
                    </div>

                </div>
                <!-- /dashboard content -->


                <!-- Footer -->
                <div class="footer text-muted">
                    &copy; 2019. <a href="#">Dashboard Web App Developed By </a>  <a href="https://www.linkedin.com/in/amrmuhamed" target="_blank">Amr Muhamed</a>
                </div>
                <!-- /footer -->

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\roqytask\resources\views/dashboard/index.blade.php ENDPATH**/ ?>