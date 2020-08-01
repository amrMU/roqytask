<div class="panel-body">
<label><?php echo app('translator')->getFromJson('home.search'); ?></label>

<div class="form-group">
<form action="<?php echo e(URL::to('ar/admin/wating_list/search')); ?>" method="get" >

<div class="col-12">
    <div class="row">
        <div class="col-xs-6">
            <input type="text" class="form-control" name="keyword" placeholder="<?php echo app('translator')->getFromJson('home.key_search_wating_list'); ?>">
        </div>
        

        <div class="col-xs-2">
            <label>
                <input type="checkbox" class="control-warning" name="is_company" checked="checked">
                <?php echo app('translator')->getFromJson('home.company'); ?>
            </label>
        </div>

        <div class="col-xs-2">
            <label>
                <input type="checkbox" class="control-info" name="is_user"  checked="checked">
                <?php echo app('translator')->getFromJson('home.user'); ?>
            </label>
        </div>
        <div class="col-xs-2">
        <button class="btn btn-primary"> <li class="icon-search4"></li></button>
        </div>
    </div>
    <!-- <span class="help-block">Available in 12 columns sizes since it's based on 12 columns grid</span> -->
</div>
</form>
</div>
</div>
<?php /**PATH C:\xampp\htdocs\amrmoh.com\resources\views/dashboard/wating_list/search_form.blade.php ENDPATH**/ ?>