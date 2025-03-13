@props([
    'work'
])

<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo :employer="$work->employer" />
    </div>

    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400">{{ $work->employer->name }}</a>
        
        <a href="{{ $work->url }}" target="_blank" class="font-bold text-xl mt-3 group-hover:text-blue-600 transition-colors duration-300">{{ $work->title }}</a>
        <p class="text-sm text-gray mt-auto">{{ $work->schedule }} - From {{ $work->salary }}</p>
    </div>
        
    <div>
        @foreach($work->tags as $tag)
            <x-tag :tag="$tag" />
        @endforeach
    </div>
</x-panel>