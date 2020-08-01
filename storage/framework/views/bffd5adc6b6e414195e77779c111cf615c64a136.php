<ul class="icons-list">
  <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
    <ul class="dropdown-menu dropdown-menu-right">
      <li><a data-toggle="modal" data-target="#DeleteFromList<?php echo e(@$list->id); ?>" <?php if(LaravelLocalization::getCurrentLocale() == 'en'): ?> style="float:left" <?php endif; ?>><i class="icon-trash"></i><?php echo app('translator')->getFromJson('home.delete'); ?></a></li>
      <li><a href="<?php echo e(url('/ar/admin/contact_us/'.@$list->id.'/show')); ?>" <?php if(LaravelLocalization::getCurrentLocale() == 'en'): ?> style="float:left" <?php endif; ?>><i class="icon-eye4"></i><?php echo app('translator')->getFromJson('home.view'); ?></a></li>
    </ul>
  </li>
</ul>


<!-- Trigger the modal with a button -->



<!-- Modal -->
<div id="DeleteFromList<?php echo e(@$list->id); ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><?php echo app('translator')->getFromJson('home.header_delete_model'); ?></h4>
      </div>
      <div class="modal-body">
        <p><?php echo app('translator')->getFromJson('home.body_delete_model'); ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo app('translator')->getFromJson('home.close'); ?></button>
        <a href="<?php echo e(URL::to('/admin/contact_us/').'/'.$list->id.'/delete'); ?>" class="btn btn-danger "> 
        <?php echo app('translator')->getFromJson('home.delete'); ?>
        </a>

      </div>
    </div>

  </div>
</div><?php /**PATH C:\xampp\htdocs\amrmoh.com\resources\views/dashboard/contact_us/actions.blade.php ENDPATH**/ ?>