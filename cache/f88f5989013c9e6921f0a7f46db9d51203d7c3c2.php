<?php $__env->startSection('head'); ?>
<title><?php echo e(site_name()); ?></title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('bg'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
	<h1 class="single-title"><a href="<?php echo e(home_url()); ?>" title=""><?php echo e(site_name()); ?></a></h1>
	<div style="position:relative;width:100%;display:block;">  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<?php if(isset($_GET['img'])): ?>

	<?php endif; ?> 
		<?php $__currentLoopData = collect(keywords())->shuffle()->take(45)->chunk(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunked): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
				<?php $__currentLoopData = $chunked; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyword): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

							<div class="post-grid post-grid3">
								<div class="post-grid-entry">
									<h2 class="post-title title-grid3" style="position:relative;">
										<a href="<?php echo e(image_url($keyword)); ?>" ><?php echo e(ucwords($keyword)); ?></a>
									</h2>
								</div><div class="clear"></div>
							</div><span></span>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
		
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>