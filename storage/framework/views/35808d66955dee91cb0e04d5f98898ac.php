<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'work'
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'work'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php if (isset($component)) { $__componentOriginal36665f0dc0e45320e21db1e20a989acf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal36665f0dc0e45320e21db1e20a989acf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.panel','data' => ['class' => 'flex flex-col text-center']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('panel'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'flex flex-col text-center']); ?>
    <div class="self-start text-sm">
        <?php echo e($work->employer->name); ?>

    </div>
    <div class="py-8">
        <a href="<?php echo e($work->url); ?>" target="_blank" class="group-hover:text-blue-600 text-xl font-bold transition-colors duration-300"><?php echo e($work->title); ?></a>
        <p class="text-sm mt-4"><?php echo e($work->schedule); ?> - From <?php echo e($work->salary); ?></p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            <?php $__currentLoopData = $work->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (isset($component)) { $__componentOriginal9ccaa90195d4e06c31c1de306aacdf44 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ccaa90195d4e06c31c1de306aacdf44 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tag','data' => ['size' => 'small','tag' => $tag]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tag'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'small','tag' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tag)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ccaa90195d4e06c31c1de306aacdf44)): ?>
<?php $attributes = $__attributesOriginal9ccaa90195d4e06c31c1de306aacdf44; ?>
<?php unset($__attributesOriginal9ccaa90195d4e06c31c1de306aacdf44); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ccaa90195d4e06c31c1de306aacdf44)): ?>
<?php $component = $__componentOriginal9ccaa90195d4e06c31c1de306aacdf44; ?>
<?php unset($__componentOriginal9ccaa90195d4e06c31c1de306aacdf44); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <?php if (isset($component)) { $__componentOriginalfe582b78584eb4c719854d33f08bc7e7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfe582b78584eb4c719854d33f08bc7e7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.employer-logo','data' => ['employer' => $work->employer,'width' => '42']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('employer-logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['employer' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($work->employer),'width' => '42']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfe582b78584eb4c719854d33f08bc7e7)): ?>
<?php $attributes = $__attributesOriginalfe582b78584eb4c719854d33f08bc7e7; ?>
<?php unset($__attributesOriginalfe582b78584eb4c719854d33f08bc7e7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfe582b78584eb4c719854d33f08bc7e7)): ?>
<?php $component = $__componentOriginalfe582b78584eb4c719854d33f08bc7e7; ?>
<?php unset($__componentOriginalfe582b78584eb4c719854d33f08bc7e7); ?>
<?php endif; ?>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal36665f0dc0e45320e21db1e20a989acf)): ?>
<?php $attributes = $__attributesOriginal36665f0dc0e45320e21db1e20a989acf; ?>
<?php unset($__attributesOriginal36665f0dc0e45320e21db1e20a989acf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal36665f0dc0e45320e21db1e20a989acf)): ?>
<?php $component = $__componentOriginal36665f0dc0e45320e21db1e20a989acf; ?>
<?php unset($__componentOriginal36665f0dc0e45320e21db1e20a989acf); ?>
<?php endif; ?><?php /**PATH C:\Users\xroso\Herd\pixel-positions\resources\views/components/job-card.blade.php ENDPATH**/ ?>