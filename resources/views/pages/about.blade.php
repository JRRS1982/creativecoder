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
                <Recently>I learnt how to code Ruby at Makers Academy bootcamp, then got a job in PHP on a Laravel / CodeIngniter spaghetti monolith with no tests. I have learnt how to stay calm when on unsure footing and follow the code. I have been learning how to create beautiful React / Redux / Typescript projects recently, and prefer what I have seen so far.</p>
                <p>I am spending most of my down time reading up about coding concepts, working through tutorials and making projects. The training in the first 9 months of my software training career has been laissez faire, which has developed me greatly on a personal level, causing me to become more self reliant, frustrated and therefore determined to succeed and improve. I am fairly confident that I can learn any coding concept now, however am also aware of the amount of time required to learn everything, therefore the importance of focus.</p>

                <hr class="major" />
                <h2>What i want to do</h2>
                <Recently>I spent 15 years in property and finance managing buildings and doing paperwork for wealthy investors, I did not get much enjoyment form that, but now truly love what I do. I don't really care what coding language that I work in, as long as I work with friendly well balanced people that care about what they do.</p>
                
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