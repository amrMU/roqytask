
<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-danger " data-toggle="modal" data-target="#DeleteFromList<?php echo e($album->id); ?>">
  delete
</button>


<!-- Modal -->
<div id="DeleteFromList<?php echo e($album->id); ?>" class="modal fade" role="dialog">
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
        <a href="<?php echo e(URL::to('/albums/').'/'.$album->id.'/delete'); ?>" class="btn btn-danger "> 
        <?php echo app('translator')->getFromJson('home.delete'); ?>
        </a>

      </div>
    </div>

  </div>
</div><?php /**PATH C:\xampp\htdocs\roqytask\resources\views/front/albums/delete_from_list.blade.php ENDPATH**/ ?>