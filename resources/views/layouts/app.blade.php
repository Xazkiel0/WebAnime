<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="{{asset('images/icon.png')}}">
<title>AniParadise - Website Informasi Seputar Anime, Game, Technology & Film</title>
@yield('css')
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container"><a class="navbar-brand" href="#">AniParadise</a
        >  <button class="navbar-toggler first-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent20"
    aria-controls="navbarSupportedContent20" aria-expanded="false" aria-label="Toggle navigation">
    <div class="animated-icon1"><span></span><span></span><span></span></div>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent20">
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Home</a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" href="#">Article</a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" href="#">Contact</a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" href="#">About&nbsp;Us</a></li>
            
                </ul>
            </div>
        </div>
    </nav>
    <div class="highlight-phone">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="intro">
                    <h2>Welcome</h2>
                    <p>Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. Aliqua sed justo ligula.</p>
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
<div class="container-category">
    <h2><ion-icon name="newspaper-outline"></ion-icon>Articles</h2>
</div>
<div class="row space-rows">
<div class="col">

                <div class="card-header border rounded-0 card-hover" style="background-image:url({{asset('images/article1.jpg')}});">
                    </div>
                    <div class="card-body border rounded-0">
                        <h4 id="heading-card">Judul Article</h4>
                    <p id="cardheader-subtext">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, culpa amet enim veniam itaque </p>
                </div>
            
        </div>
        <div class="col">

                <div class="card-header border rounded-0" style="background-image:url({{asset('images/article2.jpg')}});">
                    </div>
                    <div class="card-body border rounded-0">
                        <h4 id="heading-card">Judul Article</h4>
                    <p id="cardheader-subtext">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, culpa amet enim veniam itaque </p>
                </div>
            
        </div>
        <div class="col">

                <div class="card-header border rounded-0" style="background-image:url({{asset('images/article3.jpg')}});">
                    </div>
                    <div class="card-body border rounded-0">
                        <h4 id="heading-card">Judul Article</h4>
                    <p id="cardheader-subtext">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, culpa amet enim veniam itaque </p>
                </div>
            
        </div>        
    </div>
    <div class="container-category">
    <h2><ion-icon name="newspaper-outline"></ion-icon>Anime & Manga</h2>
</div>
<div class="row space-rows">
<div class="col">

                <div class="card-header border rounded-0 card-hover" style="background-image:url({{asset('images/article1.jpg')}});">
                    </div>
                    <div class="card-body border rounded-0">
                        <h4 id="heading-card">Judul Article</h4>
                    <p id="cardheader-subtext">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, culpa amet enim veniam itaque </p>
                </div>
            
        </div>
        <div class="col">

                <div class="card-header border rounded-0" style="background-image:url({{asset('images/article2.jpg')}});">
                    </div>
                    <div class="card-body border rounded-0">
                        <h4 id="heading-card">Judul Article</h4>
                    <p id="cardheader-subtext">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, culpa amet enim veniam itaque </p>
                </div>
            
        </div>
        <div class="col">

                <div class="card-header border rounded-0" style="background-image:url({{asset('images/article3.jpg')}});">
                    </div>
                    <div class="card-body border rounded-0">
                        <h4 id="heading-card">Judul Article</h4>
                    <p id="cardheader-subtext">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, culpa amet enim veniam itaque </p>
                </div>
            
        </div>        
        
    </div>




@yield('content')

</body>
@yield('script')

</html>