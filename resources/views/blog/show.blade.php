@extends('layouts.blog')

@section('title', $post->title)


@section('header')
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    {{--<img src="/storage/{{$post->image}}" alt="">--}}

    <header class="intro-header" style="background-image: url('/storage/{{$post->image }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1>{{ $post->title }}</h1>
                        <h2 class="subheading">Problems look mighty small from 150 miles up</h2>
                        <span class="meta">Posted by <a href="#">{{$post->author->name}}
                            </a> on {{$post->created_at->format('M d Y')}}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop

@section('content')

    <!-- Post Content -->
    <article>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    {!! $post->body !!}
                </div>
            </div>

    </article>

@stop
