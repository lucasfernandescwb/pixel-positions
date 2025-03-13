@props(['employer', 'width' => 90])

<img src="{{ asset($employer->logo) }}" alt="" 
     class="rounded-xl object-cover" 
     width="{{ $width }}" 
     height="{{ $width }}" 
     style="aspect-ratio: 1/1;">