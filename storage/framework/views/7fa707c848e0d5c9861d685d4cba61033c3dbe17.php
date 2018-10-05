<?php $__env->startSection('content'); ?>
<?php if(!$meals->isEmpty()): ?>
	<h4>All Meals</h4>

	<hr>

	<ul class="list-group">
	<?php foreach($meals as $meal): ?>
			<li class="list-group-item">
				<a href="/meals/<?php echo e($meal->id); ?>"><?php echo e($meal->name); ?></a>
				<a href="/meals/delete/<?php echo e($meal->id); ?>"> <i class="fa fa-trash"></i></a>	
				<span class="pull-right">
					<?php echo e($meal->created_at->format('g:ia \o\n l, F jS')); ?>

				</span>
			</li>
	<?php endforeach; ?>
	</ul>
<?php else: ?>
	<p>Looks like you've never eaten anything. Let's <a href="/meals/create">get you fed!</a></p>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>