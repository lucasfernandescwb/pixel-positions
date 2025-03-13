@props([
    'work'
])

<x-panel class="flex flex-col text-center">
    <div class="self-start text-sm">
        {{ $work->employer->name }}
    </div>
    <div class="py-8">
        <a href="{{ $work->url }}" target="_blank" class="group-hover:text-blue-600 text-xl font-bold transition-colors duration-300">{{ $work->title }}</a>
        <p class="text-sm mt-4">{{ $work->schedule }} - From {{ $work->salary }}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach($work->tags as $tag)
                <x-tag size="small" :tag="$tag" />
            @endforeach
        </div>

        <x-employer-logo :employer="$work->employer" width="42" />
    </div>
</x-panel>