@extends('layouts/main')

@section('content')
<div id="main">
    <div class="inner">

    <!-- Header -->
        @include('partials/header')

    <!-- Content -->
        <!-- Content -->
        <section>
            <header class="main">
                <h1>Some tools of the trade</h1>
            </header>

            <h2>VSCode</h2>
            <p>It's just better than the other editors, it has extensions that pop up from the community that have some really useful features, Webstorm products are good, but VSCode is just nice to use.</p>

            <hr class="major" />
            <h2>Linux</h2>
            <p>I transitioned to an Ubuntu Linux machine recently, as an Apple fanboy this made me sad. However, Docker on a mac kills the kernel (apparently - too low level for my knowledge) and causes macs to slow down beyond a usable level, on a Linux machine this doesn't appear to happen, and damn they are really fast and maybe even more user friendly than a mac, and the open source/community element feels like the right path.</p>

            <hr class="major" />
            <h2>Sony noise cancelling headphones</h2>
            <p>Every developer has a pair. Lo-fi techno is my favorite to bash keys to, chilled classical is the best to stick on when I hit a brain blockage and feel the stress levels rising.</p>

            <hr class="major" />
            <h2>Websites</h2>
            <ul>
              <li>https://devdocs.io/</li> 
              <li>https://notion.so/about</li>
              <li>https://exercism.io/</li>
              <li>https://overapi.com/</li>
            </ul>

        </section>
    </div>
</div>
@endsection