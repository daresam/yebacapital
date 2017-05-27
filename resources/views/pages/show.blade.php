@extends('layouts.blog')

{{--@section('title', '- ' . $page->title)--}}

@section('header')
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('/storage/{{$page->image}}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>{{ $page->title }}</h1>
                        <hr class="small">
                        <span class="subheading">{{$page->excerpt}}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop

@section('content')
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                {!! $page->body !!}
            </div>
        </div>
    </div>

@stop





