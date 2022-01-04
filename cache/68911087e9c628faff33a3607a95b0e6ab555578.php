<?php $__env->startSection('head'); ?>
<title><?php echo e(ucwords($keyword)); ?></title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('bg'); ?>
<?php echo e(collect($images)->random()['url']); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('header1'); ?>
      <nav class="breadcrumb" style="padding-left:15px;margin-bottom:5px;">
          <ul xmlns:v="http://rdf.data-vocabulary.org/#">
              <li class="breadhome" typeof="v:Breadcrumb">
                  <a href="<?php echo e(home_url()); ?>" property="v:title" rel="v:url">
                      <span property="name">Home</span>
                  </a>
              </li> 
              <li><?php echo e(ucwords($keyword)); ?></li>
          </ul>
      </nav>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
	<h1 class="single-title"><a title="<?php echo e(ucwords($keyword)); ?>"><?php echo e(ucwords($keyword)); ?></a></h1>

	<?php
		shuffle($sentences);
	?>
         
		<div style="position:relative;width:100%;display:block;">   </div>
        <div class="ispost post-47213a4">
			<?php if(!empty($sentences)): ?>
					 <strong><?php echo e(ucwords($keyword)); ?></strong> - <?php echo e(@array_pop($sentences)); ?> <?php echo e(@array_pop($sentences)); ?> <?php echo e(@array_pop($sentences)); ?> <?php echo e(@array_pop($sentences)); ?><br>
			<?php endif; ?>
        </div>

<div class="row">
<?php $__currentLoopData = collect(keywords())->shuffle()->take(4)->chunk(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunked): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
				<?php $__currentLoopData = $chunked; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyword): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

		      <h2 style="font-weight:normal;"> <a href="<?php echo e(image_url($keyword)); ?>" title="<?php echo e(ucwords($keyword)); ?>"><?php echo e(ucwords($keyword)); ?></a> </h2>	       
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

				
	<?php $__currentLoopData = collect($images)->take(30)->shuffle()->chunk(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunked): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	
	<div id="imgids"></div>
		<div class="get-posts gallery-47213a4">
  			<ul style="padding: 0px 1px 40px 1px;">
		<?php $__currentLoopData = $chunked; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	


			<div class="gallery">
<?php $__currentLoopData = collect(keywords())->shuffle()->take(1)->chunk(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunked2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
<?php $__currentLoopData = $chunked2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyword2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						  		<a target="_blank" href="<?php echo e(konten_url($image['url'],ucwords($keyword))); ?>">
		    		<img src="<?php echo e($image['url']); ?>" alt="<?php echo e(ucwords($keyword)); ?>.<?php echo e($image['title']); ?>" class="image" title="<?php echo e(ucwords($keyword)); ?> <?php echo e(ucwords($keyword2)); ?>" width="" height="400px" onerror="this.onerror=null;this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQh_l3eQ5xwiPy07kGEXjmjgmBKBRB7H2mRxCGhv1tFWg5c_mWT';">
		  		</a>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		  	</div>

		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</ul>
<div class="clear"></div>
		</div>		 
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 



	<div style="position:relative;width:100%;display:block;">    </div>
		<div class="istag">
			<?php $__currentLoopData = collect(keywords())->shuffle()->take(50)->chunk(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunked): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
				<?php $__currentLoopData = $chunked; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyword): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		        <span class="linkkey">
		          <a href="<?php echo e(image_url($keyword)); ?>" title="robin"><?php echo e(ucwords($keyword)); ?></a>
		        </span>  
		        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
		</div>

	
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>