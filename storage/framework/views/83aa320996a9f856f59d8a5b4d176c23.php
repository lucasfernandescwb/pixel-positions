<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['employer', 'width' => 90]));

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

foreach (array_filter((['employer', 'width' => 90]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<img src="<?php echo e(asset($employer->logo)); ?>" alt="" 
     class="rounded-xl object-cover" 
     width="<?php echo e($width); ?>" 
     height="<?php echo e($width); ?>" 
     style="aspect-ratio: 1/1;"><?php /**PATH C:\Users\xroso\Herd\pixel-positions\resources\views/components/employer-logo.blade.php ENDPATH**/ ?>