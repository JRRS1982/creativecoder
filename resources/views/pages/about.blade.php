@extends('layouts/main')

@section('content')
<div id="main">
    <div class="inner">

        <!-- Header -->
            @include('partials/header')

        <!-- Content -->
            <section>
                <header class="main">
                    <h1>About me</h1>
                </header>

                <h2>Who i am</h2>
                <p>I am a full stack software engineer, currently living in London and learning as much as I can about making things out of code.</p>

                <hr class="major" />
                <h2>What i do</h2>
                <Recently>I originally learnt to code in Ruby, but it was trial by fire in my first software development role, a beyond end of life, Laravel / CodeIngniter spaghetti monster monoliths with no test suite. Recently I have been working on beautiful React / Redux / Typesctipt projects and loving strictly typed.</p>
                <p>I am spending most of my personal time reading up about coding concepts, working through tutorials, kata and making projects.</p>

                <hr class="major" />
                <h2>Testimonials</h2> 
                <ul>
                    <li>Testimonial one</li>
                    <li>Testimonial two</li>
                    <li>Testimonial three</li>
                </ul>
            </section>
    </div>
</div>
@endsection