<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kenshi State University</title>
    <link rel='shortcut icon' type='image/x-icon' href="{{ url('/favicon.ico') }}" />
    <link rel="stylesheet" href="{{ url('/css/stylesheet.css') }}">
    <link rel="stylesheet" href="{{ url('/css/fontawesome-all.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
</head>
<body>
<!-- Navigation bar in Mobile View -->
<div class="container">
    <img src="{{ url('/img/logo.png') }}" alt="" id="sclogo">
</div>
<nav class="navbar">
    <span class="open-slide">
      <a href="#" onclick="openSlideMenu()">
        <svg width="30" height="30">
            <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
            <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
            <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
        </svg>
      </a>
    </span>

    <ul class="navbar-nav">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="{{ route('login') }}">Login</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
</nav>

<div id="side-menu" class="side-nav">
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    <a href="#">Home</a>
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Login</a>
    <a href="#">Contact</a>
</div>



<script>
    function openSlideMenu(){
      document.getElementById('side-menu').style.width = '250px';
      document.getElementById('main').style.marginLeft = '250px';
    }

    function closeSlideMenu(){
      document.getElementById('side-menu').style.width = '0';
      document.getElementById('main').style.marginLeft = '0';
    }
  </script>
</body>

<main id="main">
    <!--Section  A-->
    <section id="section-a" class="grid">
        <div class="bg-image"></div>
        <div class="content-wrap">
            <h1 class="content-title">World Class Education</h1>
            <p>Driven by passion for knowledge, KSU is established to give quality education to students who are driven by their passion for Technology.</p>
        </div>
    </section>

    <!-- SECTION B -->
    <section id="boxes" class="grid">
        <a id="sec-b-btn" href="#">
            <div class="box">
                <i class="fas fa-bullhorn fa-4x"></i>
                <h3>Announcements</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, expedita?</p>
            </div>
        </a>
        <a id="sec-b-btn" href="#">
            <div class="box">
                <i class="fas fa-star fa-4x"></i>
                <h3>Highlights</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, expedita?</p>
            </div>
        </a>
        <a id="sec-b-btn" href="#">
            <div class="box">
                <i class="fas fa-calendar-alt fa-4x"></i>
                <h3>Calendar of Activities</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, expedita?</p>
            </div>
        </a>
        <a id="sec-b-btn" href="#">
            <div class="box">
                <i class="fas fa-newspaper fa-4x"></i>
                <h3>KSU Magazine</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, expedita?</p>
            </div>
        </a>
    </section>

    <!-- Section C -->
    <section id="section-c" class="grid">
        <div class="section-c-title">
            <h1>News and Articles</h1>
        </div>
        <!-- Article 1 -->
        <ul>
            <li>
                <div class="card">
                    <img src="{{ url('/img/section-c/art-1.jpg') }}" alt=""  id="art-pic">
                    <div class="card-content">
                        <a href="#">
                            <h3 class="card-title">Students Tests New iMacs</h3>
                        </a>
                        <p>KSU replaces old iMacs in the IT laboratory with newer models...</p>
                    </div>
                </div>
            </li>
        </ul>
        <!--Article 2 -->
        <ul>
            <li>
                <div class="card">
                    <img src="{{ url('/img/section-c/art-2.jpeg') }}" alt="" id="art-pic">
                    <div class="card-content">
                        <a href="#">
                            <h3 class="card-title">KSU Upgrades Campus Internet</h3>
                        </a>
                        <p>Everyone on the campus can now enjoy better wifi coverage and speeds up to 100mbps! Sweet...</p>
                    </div>
                </div>
            </li>
        </ul>
        <!-- Article 3 -->
        <ul>
            <li>
                <div class="card">
                    <img src="{{ url('/img/section-c/art-3.jpg') }}" alt="" id="art-pic">
                    <div class="card-content">
                        <a href="#">
                            <h3 class="card-title">IV of Spades @ KSU </h3>
                        </a>
                        <p>IV of Spades band performed during KSU's 3rd Foundation day held at KSU Auditorium...</p>
                    </div>
                </div>
            </li>
        </ul>
        <!-- Article 4 -->
        <ul>
            <li>
                <div class="card">
                    <img src="{{ url('/img/section-c/art-4.jpeg') }}" alt="" id="art-pic">
                    <div class="card-content">
                        <a href="#">
                            <h3 class="card-title">Library Finished</h3>
                        </a>
                        <p>The KSU Library can now be fully used exclusive to KSU faculty and Students...</p>
                    </div>
                </div>
            </li>
        </ul>
    </section>

    <!-- Section D -->
    <section id="section-d" class="grid">
        <div class="box1">
            <i class="fas fa-tty fa-4x"></i>
            <h1 class="content-title">Contact Us</h1>
            <p>contact@kenshistate_u.edu</p>
            <h2 class="content-title">Admissions</h2>
            <p>apply@kenshistate_u.edu</p>
        </div>
    </section>
</main>
@include('footer')
