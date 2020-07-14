<div id="sidebar">
    <div class="inner">

        <section id="search" class="alt">
            <form method="post" action="#">
                <input type="text" name="query" id="query" placeholder="Search" />
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
                <li><a href="{{ route('projects') }}">Projects</a></li>
                <li>
                    <span class="opener">Some of my favourite projects</span>
                    <ul>
                        <li><a href="https://github.com/Hives/acebook-business-logic">Acebook on github</a></li>
                        <li><a href="https://github.com/JRRS1982/Online-marketplace">Online Marketplace on github</a></li>
                        <!-- TODO add a couple more projects -->
                    </ul>
                </li>
                <li><a href="{{ route('tools') }}">Some of my favourite tools</a></li>
                <li><a href="{{ route('contact') }}">Contact me</a></li>
            </ul>
        </nav>

        <!-- Section -->
        <section>
            <header class="major">
                <h2>Get in touch</h2>
            </header>
            <p></p>
            <ul class="contact">
                <!-- TODO replace this href with a popup email generator at some point -->
                <li class="icon solid fa-envelope"><a href="{{ route('contact') }}">jeremyrrsmith@gmail.com</a></li>
                <li class="icon solid fa-phone">07398 722784</li>
                <li class="icon solid fa-home">Currently London<br/></li>
            </ul>
        </section>
    </div>
</div>