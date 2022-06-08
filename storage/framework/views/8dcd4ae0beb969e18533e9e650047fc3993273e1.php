

<?php $__env->startSection('content'); ?>
<div class="mx-auto  min-h-screen">
    <div class="flex flex-wrap">
        <?php if (isset($component)) { $__componentOriginal67981135ceb654bdf553b2b96f0b6cc3b85514e7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\EventDetail::class, ['eventDaysTo' => '5 Days','eventTitle' => 'Holi','eventDate' => 'Wednesday, 8 March 2023','eventPageURL' => '#'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('eventDetail'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\EventDetail::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal67981135ceb654bdf553b2b96f0b6cc3b85514e7)): ?>
<?php $component = $__componentOriginal67981135ceb654bdf553b2b96f0b6cc3b85514e7; ?>
<?php unset($__componentOriginal67981135ceb654bdf553b2b96f0b6cc3b85514e7); ?>
<?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AnuragDeep\OneDrive\Desktop\Freelancing\days-to\resources\views/event.blade.php ENDPATH**/ ?>