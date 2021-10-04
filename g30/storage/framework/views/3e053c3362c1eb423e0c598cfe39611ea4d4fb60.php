<tr>
<td class="header">
<a href="<?php echo e($url); ?>" style="display: inline-block;">
<?php if(trim($slot) === 'Jayanandkarak'): ?>
<img src="<?php echo e(asset('public/frontend/images/logo.png')); ?>" class="logo" alt="Jayanandkarak">
<?php else: ?>
<?php echo e($slot); ?>

<?php endif; ?>
</a>
</td>
</tr>
<?php /**PATH /home/tenderkings/public_html/crm/timir/vendor/laravel/framework/src/Illuminate/Mail/resources/views/html/header.blade.php ENDPATH**/ ?>