@extends('home._layouts.default')

@section('main')

@foreach($articles as $article)
<div class="blog-post">
    <h2 class="blog-post-title"><a href="{{ URL::route('home.article',$article->id)}}">{{ $article->title }}</a></h2>
    <p class="blog-post-meta">Created at {{ $article->created_at }} </p>
    {{ $article->body }}
</div><!-- /.blog-post -->
@endforeach

<ul class="pager">
    {{ $articles->links() }}
</ul>

@stop

@section('sidebar')
@parent
<div class="sidebar-module">
    <h4>What's new</h4>
    <ol class="list-unstyled">

        @foreach($articles as $article)

        <li><a href="{{ URL::route('home.article',$article->id)}}">{{ $article->title }}</a></li>
        @endforeach
    </ol>
</div>

@stop