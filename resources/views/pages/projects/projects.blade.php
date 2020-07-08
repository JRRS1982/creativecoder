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
            <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fergiat. Pellentesque in mi eu massa lacinia malesuada et a elit. Donec urna ex, lacinia in purus ac, pretium pulvinar mauris. Curabitur sapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit.</p>
            <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fersapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit tristique lorem ipsum dolor.</p>
        </section>

        <section>
            <div class="posts">
                <article><a class="image" style="cursor: pointer;"><img src="images/pic01.jpg" alt=""></a>
                    <h3>Interdum aenean</h3>
                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                    <ul class="actions">
                        <li><a class="button primary" style="cursor: pointer;">Read more</a></li>
                        <li><a class="button" style="cursor: pointer;">Github</a></li>
                    </ul>
                </article>
                <article><a class="image" style="cursor: pointer;"><img src="images/pic02.jpg" alt=""></a>
                    <h3>Nulla amet dolore</h3>
                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                    <ul class="actions">
                        <li><a class="button primary" style="cursor: pointer;">Read more</a></li>
                        <li><a class="button" style="cursor: pointer;">Github</a></li>
                    </ul>
                </article>
                <article><a class="image" style="cursor: pointer;"><img src="images/pic03.jpg" alt=""></a>
                    <h3>Tempus ullamcorper</h3>
                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                    <ul class="actions">
                        <li><a class="button primary" style="cursor: pointer;">Read more</a></li>
                        <li><a class="button" style="cursor: pointer;">Github</a></li>
                    </ul>
                </article>
                <article><a class="image" style="cursor: pointer;"><img src="images/pic04.jpg" alt=""></a>
                    <h3>Sed etiam facilis</h3>
                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                    <ul class="actions">
                        <li><a class="button primary" style="cursor: pointer;">Read more</a></li>
                        <li><a class="button" style="cursor: pointer;">Github</a></li>
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