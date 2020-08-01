<?php $__env->startSection('jsCode'); ?>
    <script type="text/javascript" src="<?php echo e(url('public/dashboard_assets')); ?>/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="<?php echo e(url('public/dashboard_assets')); ?>/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="<?php echo e(url('public/dashboard_assets')); ?>/js/core/app.js"></script>
	<script type="text/javascript" src="<?php echo e(url('public/dashboard_assets')); ?>/js/pages/datatables_advanced.js"></script>
	<script type="text/javascript" src="<?php echo e(url('public/dashboard_assets')); ?>/js/plugins/ui/ripple.min.js"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="panel panel-flat tb_padd">
    <div class="panel-heading">
        <h5 class="panel-title">
         <?php echo e(trans('home.permissions_groups')); ?>  </h5>
        <div class="heading-elements">
            <ul class="icons-list">
                <li><a data-action="collapse"></a></li>
                <li><a data-action="reload"></a></li>
                <li><a data-action="close"></a></li>
            </ul>
        </div>
    </div>

    <a class="btn btn-primary" href="<?php echo e(route('permissions_groups_create')); ?>"> <?php echo e(trans('home.add_new_permissions_groups')); ?> </a>

    <div class="table-responsive">
        
    <table class="table table-bordered table-hover datatable-highlight">
        <thead>
            <tr>
                <th class="text-center"> # </th>
                <th class="text-center"> <?php echo e(trans('home.name')); ?> </th>
                <th class="text-center"> <?php echo e(trans('home.permissions')); ?> </th>
                <th class="text-center"> <?php echo e(trans('home.since')); ?> </th>
                <th class="text-center"> <?php echo e(trans('home.actions')); ?> </th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $permissions_groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr id="row_<?php echo e($group->id); ?>">
                <td> <?php echo e($group->id); ?> </td>
                <td> <?php echo e($group->name); ?> </td>
                <td> <?php echo e($group->permissions); ?> </td>
                <td> <?php echo e($group->created_at->format('Y-m-d H:i')); ?> </td>
                <td class="text-center">
                    <a href="<?php echo e(route('permissions_groups_edit',['id' => $group->id ])); ?>" class="btn btn-info"> <i class="icon-pencil3"></i> </a>
                    
                    <a href="<?php echo e(route('permissions_groups_delete').'/'.$group->id); ?>"  class="btn btn-danger"> <i class="icon-database-remove"></i> </a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <?php endif; ?>

        </tbody>
    </table>
    </div>
</div>

<script>
    function sweet_delete($url,$message,$row_id)
    {
        $( "#row_"+$row_id ).css('background-color','#000000').css('color','white');
        swal({
        title: $message,
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            $.ajax({
                url:$url
            });
            swal({
                title: "<?php echo e(trans('alert')); ?>",
                text: "<?php echo e(trans('dash.deleted_successfully')); ?>",
                icon: "success",
                timer:1000
            });
            $( "#row_"+$row_id ).hide(1000);
        }else{
            $( "#row_"+$row_id ).removeAttr('style');
        }
        });
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\roqytask\resources\views/dashboard/administration/permissions_groups.blade.php ENDPATH**/ ?>