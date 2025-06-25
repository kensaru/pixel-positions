<nav class="nav">
    <figure class="navLeft">
        <a href="#"><img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="pixel positions"></a>
        {{-- <figcaption>pixel positions</figcaption> --}}
    </figure>

    <ul class="navCenter">
        <a href="#">
            <li>Companies</li>
        </a>
        <a href="#">
            <li>Careers</li>
        </a>
        <a href="/jobs">
            <li>Jobs</li>
        </a>
        <a href="#">
            <li>Salaries</li>
        </a>
    </ul>

    @auth
        <div class="navRight">
            <a href="/jobs/create">post a job</a>
            <form method="POST" action="/logout">
                @csrf
                @method('DELETE')

                <button>Log Out</button>
            </form>

        </div>
    @endauth

    @guest
        <div class="navRight">
            <a href="/login">login</a>
            <a href="/register">register</a>
        @endguest
    </div>


</nav>
