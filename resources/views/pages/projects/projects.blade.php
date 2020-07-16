@extends('layouts/main')

@section('content')
<div id="main">
    <div class="inner">

        <!-- Header -->
        @include('partials/header')

        <!-- Intro -->
        <section>
            <header class="main">
                <h1>Projects</h1>
            </header>
            <p>A list of projects and platforms that I have built, worked on and learnt from.</p>
        </section>
        
        <!-- Content -->
        <section>
            <div class="posts">
                @foreach($projects as $project)
                <article><a class="image" style="cursor: pointer;"><img src="/storage/images{{ $project->image }}" alt=""></a>
                    <h3>{{ $project->title }}</h3>
                    <p>{{ $project->intro }}</p>
                    <ul class="actions">
                        <li><a class="button" style="cursor: pointer;" href="{{ $project->github_link }}">Github</a></li>
                    </ul>
                </article>
                @endforeach
            </div>
        </section>
    </div>
</div>
@endsection