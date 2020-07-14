@extends('layouts/main')

@section('content')
<div id="main">
    <div class="inner">

        <!-- Header -->
        @include('partials/header')

        <!-- Content -->
        <section>
            <header class="main">
                <h1>My recent projects</h1>
            </header>
            <p>A list of projects and platforms that I have built, worked on and learnt from.</p>
        </section>

        <section>
            <div class="posts">
                <article><a class="image" style="cursor: pointer;"><img src="images/pic01.jpg" alt=""></a>
                    <h3>Exercism Kata</h3>
                    <p>This is a kata training platform that helps you ramp up difficulty and learn new languages, I found it very useful and would recomment it to anyone, quite a few of my kata are not included here.</p>
                    <ul class="actions">
                        <li><a class="button primary" style="cursor: pointer;" href="https://exercism.io/profiles/JRRS1982">Exercism Profile</a></li>
                        <li><a class="button" style="cursor: pointer;" href="https://github.com/JRRS1982/Exercism">Github</a></li>
                    </ul>
                </article>
                <article><a class="image" style="cursor: pointer;"><img src="images/pic03.jpg" alt=""></a>
                    <h3>"Acebook"</h3>
                    <p>A facebook clone / rails app built as part of a team at the Makers Academy coding bootcamp.</p>
                    <ul class="actions">
                        <!-- TODO add a link to more info about the project -->
                        <!-- <li><a class="button primary" style="cursor: pointer;">Read more</a></li> -->
                        <li><a class="button" style="cursor: pointer;" href="https://github.com/Hives/acebook-business-logic">Github</a></li>
                    </ul>
                </article>
                <article><a class="image" style="cursor: pointer;"><img src="images/pic02.jpg" alt=""></a>
                    <h3>Codewars Kata</h3>
                    <p>This is a kata training platform that provides a range of languages and problems to solve, i has helped me to get some problem solving practice done.</p>
                    <ul class="actions">
                        <li><a class="button primary" style="cursor: pointer;" href="https://www.codewars.com/users/JRRS1982">Codewars Profile</a></li>
                    </ul>
                </article>
                <article><a class="image" style="cursor: pointer;"><img src="images/pic04.jpg" alt=""></a>
                    <h3>"Online Marketplace"</h3>
                    <p>A tech test completed in Ruby. It provide a OOP class structure for a sales basket, items and promotional discount etc.</p>
                    <ul class="actions">
                        <!-- TODO  add a link to more info about the project-->
                        <!-- <li><a class="button primary" style="cursor: pointer;">Read more</a></li> -->
                        <li><a class="button" style="cursor: pointer;" href="https://github.com/JRRS1982/Online-marketplace">Github</a></li>
                    </ul>
                </article>
                <article><a class="image" style="cursor: pointer;"><img src="images/pic05.jpg" alt=""></a>
                    <h3>Feugiat lorem aenean</h3>
                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                    <ul class="actions">
                        <li><a class="button primary" style="cursor: pointer;">Read more</a></li>
                        <li><a class="button" style="cursor: pointer;">Github</a></li>
                    </ul>
                </article>
                <article><a class="image" style="cursor: pointer;"><img src="images/pic06.jpg" alt=""></a>
                    <h3>Amet varius aliquam</h3>
                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                    <ul class="actions">
                        <li><a class="button primary" style="cursor: pointer;">Read more</a></li>
                        <li><a class="button" style="cursor: pointer;">Github</a></li>
                    </ul>
                </article>
            </div>
        </section>
    </div>
</div>
@endsection