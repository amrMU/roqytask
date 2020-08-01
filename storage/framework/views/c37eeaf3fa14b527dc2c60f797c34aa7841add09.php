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
        
        <div class="container-detached">
        	<div class="content-detached">

        		<!-- Single mail -->
        		<div class="panel panel-white">

        			<!-- Mail toolbar -->
        			<div class="panel-toolbar panel-toolbar-inbox">
        				<div class="navbar navbar-default">
        					<ul class="nav navbar-nav visible-xs-block no-border">
        						<li>
        							<a class="text-center collapsed legitRipple" data-toggle="collapse" data-target="#inbox-toolbar-toggle-single">
        								<i class="icon-circle-down2"></i>
        							</a>
        						</li>
        					</ul>

        					<div class="navbar-collapse collapse" id="inbox-toolbar-toggle-single">
        						<div class="btn-group navbar-btn">
        							
        						
        							
        							<a onclick="window.print()" class="btn btn-default legitRipple"><i class="icon-printer"></i> <span class="hidden-xs position-right"><?php echo app('translator')->getFromJson('home.print'); ?></span></a>
 									<a href="#" data-toggle="modal" data-target="#DeleteFromData<?php echo e(@$data->id); ?>" class="btn btn-default legitRipple"><i class="icon-bin"></i> <span class="hidden-xs position-right"><?php echo app('translator')->getFromJson('home.delete'); ?></span></a>

 								


        							
        						</div>

        						<div class="pull-right-lg">
        							<p class="navbar-text"><?php echo e(@Carbon\Carbon::parse($data->created_at)->diffForHumans()); ?></p>
        							<div class="btn-group navbar-btn">
        								
        								
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        			<!-- /mail toolbar -->


        			<!-- Mail details -->
        			<div class="media stack-media-on-mobile mail-details-read">
        				<a href="#" class="media-left">
        					<span class="btn bg-teal-400 btn-rounded btn-icon btn-xlg legitRipple">
        						<span class="letter-icon"><?php echo e(@substr($data->name, 0,1)); ?></span>
        					</span>
        				</a>

        				<div class="media-body">
        					<h6 class="media-heading"><?php echo e(@$data->subject); ?></h6>
        					<div class="letter-icon-title text-semibold"><?php echo e(@$data->name); ?><a href="mailto:<?php echo e(@$data->email); ?>">&lt;<?php echo e(@$data->email); ?>&gt;</a></div>
        				</div>

        				<div class="media-right media-middle text-nowrap">
        					<ul class="list-inline list-inline-condensed no-margin">
        						<li><a href="mailto:<?php echo e(@$data->email); ?>"><img src="<?php echo e(asset('img/avatar.png')); ?>" alt="unknown human" class="img-circle img-xs" alt=""></a></li>
        						
        					</ul>
        				</div>
        			</div>
        			<!-- /mail details -->


        			<!-- Mail container -->
        			<div class="mail-container-read">

        				<!-- Email sample (demo) -->
        				<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
        					<tbody><tr>
        						<td>


        							<!-- We have a Great Workspace -->
        							<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
        								<tbody><tr>
        									<td width="100%" valign="top" bgcolor="#ffffff" align="center">
        										<table width="640" cellspacing="0" cellpadding="0" border="0" align="center">
        											<tbody><tr>
        												<td width="100%" height="50"></td>
        											</tr>
        											<tr>
        												<td align="center">

        													<!-- Post -->
        													<table width="600" cellspacing="0" cellpadding="0" border="0" align="center">
        														<tbody><tr>
        															<td width="100%" align="center">									
        																<table width="600" cellspacing="0" cellpadding="0" border="0" align="left">
        																	<tbody><tr>
        																
        																	<tr>
        																		<td style="font-size: 24px; color: #444444; line-height: 32px; font-weight: 500;" width="100%" height="35" align="center">
        																			<?php echo e(@$data->subject); ?>

        																		</td>
        																	</tr>
        																	<tr>
        																		<td width="100%" height="15"></td>
        																	</tr>
        																	<tr>
        																		<td style="font-size: 14px; color: #808080; line-height: 22px;" width="100%" valign="middle" align="center">
        																			<?php echo e(@$data->message); ?>

        																		</td>
        																	</tr>
        																	<tr>
        																		<td width="100%" height="15"></td>
        																	</tr>
        																	<tr>
        																		<td style="font-size: 24px; color: #444444; line-height: 32px; font-weight: 500;" width="100%" height="35" align="right"><?php echo app('translator')->getFromJson('home.contact_info'); ?></td>
        																	</tr>
        																	<tr>
        																		<td width="100%" height="15"></td>
        																	</tr>
        																	<tr>
        																		<td ><?php echo app('translator')->getFromJson('home.phone'); ?>: <?php echo e(@$data->phone); ?></td>
        																	</tr>
        																	<tr>
        																		<td width="100%" height="15"></td>
        																	</tr>
        																	<tr>
        																		<td ><?php echo app('translator')->getFromJson('home.email'); ?>: <?php echo e(@$data->email); ?></td>
        																	</tr>
        																	<tr>
        																		<td width="100%" height="15"></td>
        																	</tr>
        																	<tr>
        																		<td ><?php echo app('translator')->getFromJson('home.name'); ?>: <?php echo e(@$data->name); ?></td>
        																	</tr>
        																	

        																</tbody></table>
        															</td>
        														</tr>
        													</tbody></table>
        													<!-- /post -->

        												</td>
        											</tr>
        											<tr>
        												<td width="100%" height="50"></td>
        											</tr>
        										</tbody></table>
        									</td>
        								</tr>
        							</tbody></table>
        							<!-- /we have a Great Workspace -->




        					
        						</td>
        					</tr>
        				</tbody></table>
        				<!-- /email sample (demo) -->

        			</div>
        			<!-- /mail container -->


        		</div>
        		<!-- /single mail -->

        	</div>
        </div>
        
        
        </div>
        <!-- table reports -->
    </div>
</div>

</div>
    <!-- Content area -->

<!-- Modal -->
<div id="DeleteFromData<?php echo e(@$data->id); ?>" class="modal fade" role="dialog">
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
        <a href="<?php echo e(URL::to('/admin/contact_us/').'/'.$data->id.'/delete'); ?>" class="btn btn-danger "> 
        <?php echo app('translator')->getFromJson('home.delete'); ?>
        </a>

      </div>
    </div>

  </div>
</div>
</div>
<!-- Main content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\amrmoh.com\resources\views/dashboard/contact_us/show.blade.php ENDPATH**/ ?>