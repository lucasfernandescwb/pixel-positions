<x-layout>
    <x-page-heading>Results</x-page-heading>

    <div class="space-y-6">
        @foreach($works as $work)
            <x-job-card-wide :work="$work" />
        @endforeach
    </div>
</x-layout>