<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tunis - Personal Portfolio</title>

    <!-- Template Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">

    <!-- Template CSS Files -->
    <link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="" rel="stylesheet">
    <link href="{{asset('front/css/circle.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/fm.revealator.jquery.min.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/style.css')}}" rel="stylesheet">

    <!-- CSS Skin File -->
    <link href="{{asset('front/css/skins/yellow.css')}}" rel="stylesheet">

    <!-- Live Style Switcher - demo only -->
    <link rel="alternate stylesheet" type="text/css" title="blue" href="{{asset('front/css/skins/blue.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="green" href="{{asset('front/css/skins/green.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="yellow" href="{{asset('front/css/skins/yellow.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="blueviolet" href="{{asset('front/css/skins/blueviolet.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="goldenrod" href="{{asset('front/css/skins/goldenrod.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="magenta" href="{{asset('front/css/skins/magenta.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="orange" href="{{asset('front/css/skins/orange.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="purple" href="{{asset('front/css/skins/purple.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="red" href="{{asset('front/css/skins/red.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="yellowgreen" href="{{asset('front/css/skins/yellowgreen.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/styleswitcher.css')}}" />

    <!-- Modernizr JS File -->
    <script src="{{asset('front/js/modernizr.custom.js')}}"></script>
</head>

<body class="home">
<!-- Header Starts -->
<header class="header" id="navbar-collapse-toggle">
    <!-- Fixed Navigation Starts -->
    <ul class="icon-menu d-none d-lg-block revealator-slideup revealator-once revealator-delay1">
        <li class="icon-box active">
            <i class="fa fa-home"></i>
            <a href="index.html">
                <h2>Home</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-user"></i>
            <a href="about.html">
                <h2>About</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-briefcase"></i>
            <a href="portfolio.html">
                <h2>Portfolio</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-envelope-open"></i>
            <a href="contact.html">
                <h2>Contact</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-comments"></i>
            <a href="blog.html">
                <h2>Blog</h2>
            </a>
        </li>
    </ul>
    <!-- Fixed Navigation Ends -->
    <!-- Mobile Menu Starts -->
    <nav role="navigation" class="d-block d-lg-none">
        <div id="menuToggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
            <ul class="list-unstyled" id="menu">
                <li class="active"><a href="index.html"><i class="fa fa-home"></i><span>Home</span></a></li>
                <li><a href="about.html"><i class="fa fa-user"></i><span>About</span></a></li>
                <li><a href="portfolio.html"><i class="fa fa-folder-open"></i><span>Portfolio</span></a></li>
                <li><a href="contact.html"><i class="fa fa-envelope-open"></i><span>Contact</span></a></li>
                <li><a href="blog.html"><i class="fa fa-comments"></i><span>Blog</span></a></li>
            </ul>
        </div>
    </nav>
    <!-- Mobile Menu Ends -->
</header>
<!-- Header Ends -->
