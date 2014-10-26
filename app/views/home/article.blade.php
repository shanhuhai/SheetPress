@extends('home._layouts.default')

@section('main')

            <div class="blog-post">
                <h2 class="blog-post-title">{{ $article->title }}</h2>
                <p class="blog-post-meta">Created at {{ $article->created_at }} </p>
                {{ $article->body }}
            </div><!-- /.blog-post -->

@stop


@section('sidebar')
@parent
<div class="sidebar-module">
    <h4>What's new</h4>
    <ol class="list-unstyled">

        @foreach($articles as $a)
        <li><a href="{{ URL::route('home.article',$a->id)}}">{{ $a->title }}</a></li>
        @endforeach
    </ol>
</div>


@stop