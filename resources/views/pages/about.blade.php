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
                <Recently>I originally learnt to code in Ruby, but it was trial by fire in my first software development role, a beyond end of life, Laravel / CodeIngniter spaghetti monster monoliths with no test suite. Recently I have been working on / learning how to create beautiful React / Redux / Typesctipt projects.</p>
                <p>I am spending most of my personal time reading up about coding concepts, working through tutorials, kata and making projects. I am new to the industry so i'm trying to fill my head with as much as I can as quickly as I can.</p>

                <hr class="major" />
                <h2>What i want to do</h2>
                <Recently>I spent 15 years in property and finance and was never happy, I now enjoy what I do and hope that it will continue long into the future. I dont really care what coding language that I work in, as long as I work with friendly like minded people that care about what they do. It is of course important to have a balance in life, and take care of your health, but at this stage of my career I am looking to put the effort in and skill up. Once I have established a decent career in code I will probably start volunteering some time for charity.</p>
                
                <!-- <hr class="major" />
                <h2>Testimonials</h2> 
                <ul>
                    <li>Testimonial one</li>
                    <li>Testimonial two</li>
                    <li>Testimonial three</li>
                </ul> -->
            </section>
    </div>
</div>
@endsection