@extends('layouts.app')

@section('top')
<link rel="stylesheet" href="{{asset('css/mine.css')}}">
<link rel="stylesheet" href="{{asset('css/mine.mk2.css')}}">
<link rel="stylesheet" href="{{asset('css/mine.article.css')}}">
<link rel="stylesheet" href="{{asset('css/mine.hamburger.menu.css')}}">
@endsection


{{-- 
    Problem in this Page {
        Scroll Animation : Not a Smooth Scrolling [tugas:ipul || adam]
        Data to View : Data not Connected to Database
    }
    --}}


@section('content')
<div class="highlight-phone">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="intro">
                    <h2>Welcome</h2>
                    <p>Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque
                        ut laoreet vitae. Aliqua sed justo ligula.</p>
                    <div class="search-contain">
                        <ion-icon class="searchBtn" name="search-outline" id="search-btn"></ion-icon>
                        <input class="searchBar" type="text" id="search" placeholder="">
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <img class="d-xl-flex align-items-xl-end" src="{{asset('images/logo-layout.png')}}">
            </div>
        </div>
    </div>
</div>
<div class="container-category" id="Article">
    <h2>
        <ion-icon name="newspaper-outline"></ion-icon>Articles
    </h2>
</div>
<div class="row space-rows">
    {{-- <div class="col">

        <div class="card-header border rounded-0 card-hover"
            style="background-image:url({{asset('images/article1.jpg')}});">
</div>
<div class="card-body border rounded-0">
    <h4 id="heading-card">Judul Article</h4>
    <p id="cardheader-subtext">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, culpa amet
        enim veniam itaque </p>
</div>

</div> --}}

@foreach ($articles as $article)
<div class="col">

    <div class="card-header border rounded-0" style="background-image:url({{asset('images/article2.jpg')}});">
    </div>
    <div class="card-body border rounded-0">
        <h4 id="heading-card">{{$article->name}}</h4>
        <p id="cardheader-subtext">{{$article->Content}}</p>
    </div>

</div>
@endforeach
{{-- <div class="col">

        <div class="card-header border rounded-0" style="background-image:url({{asset('images/article3.jpg')}});">
</div>
<div class="card-body border rounded-0">
    <h4 id="heading-card">Judul Article</h4>
    <p id="cardheader-subtext">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, culpa amet
        enim veniam itaque </p>
</div>

</div> --}}
</div>
<div class="container-category">
    <h2>
        <ion-icon name="newspaper-outline"></ion-icon>Anime & Manga
    </h2>
</div>
<div class="row space-rows">
    <div class="col">

        <div class="card-header border rounded-0 card-hover"
            style="background-image:url({{asset('images/article1.jpg')}});">
        </div>
        <div class="card-body border rounded-0">
            <h4 id="heading-card">Judul Article</h4>
            <p id="cardheader-subtext">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, culpa amet
                enim veniam itaque </p>
        </div>

    </div>
    <div class="col">

        <div class="card-header border rounded-0" style="background-image:url({{asset('images/article2.jpg')}});">
        </div>
        <div class="card-body border rounded-0">
            <h4 id="heading-card">Judul Article</h4>
            <p id="cardheader-subtext">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, culpa amet
                enim veniam itaque </p>
        </div>

    </div>
    <div class="col">

        <div class="card-header border rounded-0" style="background-image:url({{asset('images/article3.jpg')}});">
        </div>
        <div class="card-body border rounded-0">
            <h4 id="heading-card">Judul Article</h4>
            <p id="cardheader-subtext">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, culpa amet
                enim veniam itaque </p>
        </div>

    </div>

</div>
@endsection
@section('bot')
<script src="{{asset('js/search-engine.js')}}"></script>
<script src="{{asset('js/Scrolling.js')}}"></script>
<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('js/hamburger-menu.js')}}"></script>
@endsection