<?php $__env->startSection('content'); ?>

<!-- Main content -->
<div class="content-wrapper">
            <!-- Page header -->
<div class="page-header page-header-default">
    <div class="page-header-content">
        <div class="page-title">
            <h4>
                <i class="icon-arrow-right6 position-left"></i>
                <?php echo app('translator')->getFromJson('home.dashboard'); ?> -
                <span class="text-semibold"><?php echo app('translator')->getFromJson('home.get_in_touch'); ?> - </span>
                <span class="text-semibold"><?php echo app('translator')->getFromJson('home.contact_us_list'); ?> </span> 
                <?php if(isset($contact_us_count) && $contact_us_count > 0 ): ?>
                    <span class="label bg-blue " style="padding: 5px">
                        <span class="notification_length"><?php echo e(@$contact_us_count); ?></span>
                    <i class="icon-bell2"></i>
                    <span class="status-mark border-orange-400"></span>
                  </span>
                  <?php endif; ?>
            </h4>
        </div>

        <div class="heading-elements">
            <div class="heading-btn-group">
            </div>
        </div>
    </div>

    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li>
                <a href="<?php echo e(URL::to('ar/admin/home')); ?>">
                <i class="icon-home2 position-left"></i> <?php echo app('translator')->getFromJson('home.home'); ?></a>
            </li>
            <li><a href="<?php echo e(URL::to('ar/admin/contact_us')); ?>"><i class="icon-archive position-left"></i> <?php echo app('translator')->getFromJson('home.get_in_touch'); ?></a></li>

            <li class="active"><?php echo app('translator')->getFromJson('home.contact_us_list'); ?></li>
        </ul>

        <ul class="breadcrumb-elements">
            <!-- <li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li> -->
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-gear position-left"></i>
                    <?php echo app('translator')->getFromJson('home.settings'); ?>
                    <span class="caret"></span>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                <li><a href="<?php echo e(URL::to('ar/admin/setting')); ?>"><i class="icon-gear"></i><?php echo app('translator')->getFromJson('home.general_settings'); ?></a></li>

                <li><a href="<?php echo e(URL::to('ar/admin/categories_export')); ?>"><i class="icon-database-export"></i><?php echo app('translator')->getFromJson('home.export_exel_sheet'); ?></a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /page header -->

    <!-- Content area -->
<div class="content">
        <!-- Main charts -->
        <div class="row">
        <div class="panel panel-flat ">
        <!-- table lists -->
        <div class="table-responsive">
        <?php if(Session('success')): ?>
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong><?php echo app('translator')->getFromJson('home.success'); ?>!</strong> <?php echo e(session('success')); ?>.
        </div>
        <?php endif; ?>
            <!--  -->
            <table class="table text-nowrap table datatable-basic" id="table">
                <thead>
                <tr>
                    <th class="col-md-2">#</th>
                    <th class="col-md-2"><?php echo app('translator')->getFromJson('home.subject'); ?></th>
                    <th class="col-md-2"><?php echo app('translator')->getFromJson('home.name'); ?></th>
                    <th class="col-md-2"><?php echo app('translator')->getFromJson('home.email'); ?></th>
                    <th class="col-md-2"><?php echo app('translator')->getFromJson('home.phone'); ?></th>
                    <th class="col-md-2"><?php echo app('translator')->getFromJson('home.status'); ?></th>
                    <th class="col-md-2"><?php echo app('translator')->getFromJson('home.since'); ?></th>
                    <th class="col-md-2"><?php echo app('translator')->getFromJson('home.delete'); ?></th>

                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><span class="text-semibold"><?php echo e(@$list->id); ?></span></td>
                    <td title="<?php echo e(@$list->subject); ?>"><span class="text-semibold" ><?php echo e(@substr($list->subject, 0,25).'...'); ?></span></td>
                    <td title="<?php echo e(@$list->name); ?>"><span class="text-semibold" ><?php echo e(@substr($list->name, 0,25).'...'); ?></span></td>
                    <td title="<?php echo e(@$list->email); ?>"><span class="text-muted" ><?php echo e(@substr($list->email,0,25).'...'); ?></span></td>
                    <td title="<?php echo e(@$list->phone); ?>"><span class="text-muted" ><?php echo e(@substr($list->phone, 0,25).'...'); ?></span></td>
                    <td>
                        <?php if($list->read == 0): ?>
                          <span class="label bg-warning " style="padding: 5px">لم يتم  القراءة</span>
                        <?php elseif($list->reply == 1 && $list->read == 1): ?>
                          <span class="label bg-blue " style="padding: 5px">تم  الرد</span>
                        <?php elseif($list->read == 1): ?>
                          <span class="label bg-success " style="padding: 5px">تم القراءه</span>
                        <?php endif; ?>
                    <td title="<?php echo e(@Carbon\Carbon::parse($list->created_at)->diffForHumans()); ?>"><span class="text-muted" ><?php echo e(@Carbon\Carbon::parse($list->created_at)->diffForHumans()); ?></span></td>

                </td>
                    <td><?php echo $__env->make('dashboard.contact_us.actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <!--  -->
        </div>
        <!-- table reports -->
    </div>
</div>

</div>
    <!-- Content area -->

</div>
<!-- Main content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\amrmoh.com\resources\views/dashboard/contact_us/index.blade.php ENDPATH**/ ?>