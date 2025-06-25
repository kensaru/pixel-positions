<x-layout>
    <h1>results</h1>

    <div class="space-y-6">
        @foreach($jobs as $job)
            <x-longjobcard :$job />
        @endforeach
    </div>
</x-layout>
