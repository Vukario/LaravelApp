<?php $attributes = $attributes->exceptProps(['trigger']); ?>
<?php foreach (array_filter((['trigger']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div x-data="{show: false}" @click.away="show = false">
    <div @click="show = ! show">
        <?php echo e($trigger); ?>

    </div>

    <div x-show="show" class="py-2 absolute bg-gray-100 w-full mt-2 rounded-xl z-50 overflow-auto max-h-52" style="display: none">
        <?php echo e($slot); ?>

    </div>
</div>



































<?php /**PATH D:\xampp\htdocs\kys\resources\views/components/dropdown.blade.php ENDPATH**/ ?>