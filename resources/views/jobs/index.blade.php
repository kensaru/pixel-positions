<x-layout>
    <x-searchbar></x-searchbar>

    <div class="sjcs">
        <h3>top jobs</h3>
        <section class="sjcContainer">
        @foreach ($featured_jobs as $job)
            <x-shortjobcard :$job />
            @endforeach
            {{-- {{ $featured_jobs->links() }} --}}
        </section>
    </div>

    <section class="tags">
        <h3>tags</h3>
        <div class="tagContainer">
            @foreach ($tags as $tag)
            <x-tag :$tag size="bigger"/>
            @endforeach
        </div>
    </section>

    <div class="ljcs">
        <hgroup>
            <h3>find jobs</h3>
            <div class="filter"></div>
        </hgroup>
        <section class="ljcContainer">
            @foreach ($jobs as $job)
            <x-longjobcard :$job />
        @endforeach
       {{ $jobs->links() }}
        </section>
    </div>
</x-layout>
