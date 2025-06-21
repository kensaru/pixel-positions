{{-- pass the job in the <x-longjobcard/> using :$job, then come in here and accept the job as a prop --}}
@props(['job'])
 
<article class="ljc">
            <figure>
                <img src="{{ $job->url }}" alt="" class="ljc__logo">
            </figure>
            <div class="textArea">
                <span class="ljc__employer">{{ $job->employer->name }}</span>
                <h4 class="ljc__title">{{ $job->title }}</h4>
                <p class="ljc__salary">{{ $job->category }}
                @ {{ $job->salary }} per year</p>
            </div>
            <div class="ljcCategoriesAndTags">
                <div class="ljc__categories">
                    <span class="ljc__category">{{ $job->location }}</span>
                </div>
                <div class="ljc__tags">
                    @foreach ($job->tags as $tag)
                <x-tag :$tag />
                @endforeach
                </div>
            </div>
		</article>
