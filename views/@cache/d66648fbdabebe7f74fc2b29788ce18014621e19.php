

<?php $__env->startSection("content"); ?>
<div id="show-web" class="mt-4">
	<div class="container">
		<div class="table-responsive">
			<table id="example" class="table table-striped table-bordered display">
				<thead>
					<tr>
						<th>URL</th>
						<th>Name</th>
					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $directories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dir): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($dir); ?></td>
						<td><a href="http://<?php echo e($dir); ?>.test" target="_blank" class="font_title"><?php echo e($dir); ?></a></td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\www-6\dashboard\views/index.blade.php ENDPATH**/ ?>