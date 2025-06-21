{{-- pass the job in the <x-shortjobcard/> using :$job, then come in here and accept the job as a prop --}}
@props(['job'])

<article class="sjc">
            <span class="sjc__employer">{{ $job->employer->name }}</span>
            <h4 class="sjc__title">{{ $job->title }}</h4>
            <p class="sjc__salary">{{ $job->category }}
                @ {{ $job->salary }} p.y.</p>
            <div class="sjc__tags">
                @foreach ($job->tags as $tag)
                <x-tag :$tag />
                @endforeach
            </div>
            <img src="{{ $job->employer->logo }}" alt="" class="ljc__logo">
        </article>
