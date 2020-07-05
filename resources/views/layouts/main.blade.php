<!DOCTYPE HTML>
<!--
	Editorial by Pixelarity
	pixelarity.com | hello@pixelarity.com
	License: pixelarity.com/license
-->
<html>

<head>
    @include('partials.head')
</head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Main -->
        <div id="main">
            <div class="inner">
                @include('partials.header')

                <!-- Banner -->
                <section id="banner">
                    <div class="content">
                        <header>
                            <h1>Hi, I’m Jeremy Smith</h1>
                            <p>This is a web development portfolio project</p>
                        </header>
                        <p>I am making it for fun and practice, hopefully will be a fairly minimalist site which I can host online, and will demonstrate some of the work I have done as a software developer.</p>
                        <ul class="actions">
                            <li><a href="/about" class="button big">Learn More about me</a></li>
                            <li><a href="/projects" class="button big">...or my Projects</a></li>
                        </ul>
                    </div>
                    <span class="image object">
                        <img src="images/pic10.jpg" alt="" />
                    </span>
                </section>
            </div>
        </div>

        <!-- Sidebar -->
        <div id="sidebar">
            <div class="inner">

                <!-- Search -->
                <section id="search" class="alt">
                    <form method="post" action="#">
                        <input type="text" name="query" id="query" placeholder="Search" />
                    </form>
                </section>

                <!-- Menu -->
                <nav id="menu">
                    <header class="major">
                        <h2>Menu</h2>
                    </header>
                    <ul>
                        <li><a href="index.html">Homepage</a></li>
                        <li><a href="generic.html">About me</a></li>
                        <li><a href="elements.html">Projects</a></li>
                        <li>
                            <span class="opener">My Favourite Projects</span>
                            <ul>
                                <li><a href="#">Project link 1</a></li>
                                <li><a href="#">Project link 2</a></li>
                                <li><a href="#">Project link 3</a></li>
                                <li><a href="#">Project link 4</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Some of my favourite tools</a></li>
                        <li><a href="#">Contact me</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="container">
        @include('partials.footer-scripts')
    </div>
</body>

</html>