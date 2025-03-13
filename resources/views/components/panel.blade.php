@php
    $classes = "p-4 bg-white/5 rounded-xl border border-transparent hover:border-blue-600 transition-colors duration-300 group";
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>