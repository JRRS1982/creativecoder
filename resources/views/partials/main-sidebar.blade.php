<div id="sidebar">
    <div class="inner">
        
        <!-- TODO    dead code at the moment - -->
        <section id="search" class="alt">
            <form method="post" action="#">
                @csrf
                <input type="text" name="query" id="query" placeholder="Search my projects" />
            </form>
        </section>
        
        <!-- Navbar -->
        <nav id="menu">
            <header class="major">
                <h2>Menu</h2>
            </header>
            <ul>
                <li><a href="{{ route('welcome') }}">Homepage</a></li>
                <li><a href="{{ route('about') }}">About me</a></li>
                <li><a href="{{ route('projects') }}">My Projects</a></li>
                <li>
                    <span class="opener">Quick links to github</span>
                    <ul>
                        <li><a href="{{ $projects[0] }}">{{ $projects[0]->title }}</a></li>
                        <li><a href="{{ $projects[1] }}">{{ $projects[1]->title }}</a></li>
                        <li><a href="{{ $projects[2] }}">{{ $projects[2]->title }}</a></li>
                        <!-- TODO add a couple more projects -->
                    </ul>
                </li>
                <li><a href="{{ route('tools') }}">Some of my favourite tools</a></li>
            </ul>
        </nav>

        <!-- Section -->
        <section>
            <header class="major">
                <h2>Contact me</h2>
            </header>
            <p></p>
            <ul class="contact">
                <li class="icon solid fa-envelope"><a>jeremyrrsmith@gmail.com</a></li>
                <li class="icon solid fa-phone">07398 722784</li>
                <li class="icon solid fa-home">Currently London<br/></li>
            </ul>
        </section>
    </div>
</div>