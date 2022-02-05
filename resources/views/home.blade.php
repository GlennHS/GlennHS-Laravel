<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Glenn H-S</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ mix('css/fonts.css') }}">
    <link preload theme rel="stylesheet" disabled href="{{ mix('css/master_light.css') }}">
    <link preload theme rel="stylesheet" href="{{ mix('css/master_dark.css') }}">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Blog</a></li>
                <li class="logo"><span>~Glenn HS~</span></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Portfolio</a></li>
            </ul>
            <div id="theme-toggle">
                <i class="fas fa-adjust"></i>
            </div>
        </nav>
    </header>
    <main>
        <div id="profile-row">
            <div id="profile-img-container">
                <img src="{{ asset('images/MeWinch.jpg') }}" id="profile-img" alt="A Picture Of Me!" />
            </div>
            <div id="bio">
                <h2>Glenn Hamilton-Smith</h2>
                <!-- <h3>Martech Specialist @ <a href="https://clever-touch.com/" target="_blank">Clevertouch Marketing</a></h3> -->
                <h3>Martech Specialist @ <a href="https://clever-touch.com/" target="_blank">Clevertouch Marketing</a></h3>
                <h4>Motivated, Enthusiastic, Curious</h4>
                <p>
                    Hi! I'm Glenn and welcome to my slice of the internet! If you're here, chances are you're looking to
                    hire me (or Google's being very generous with my page ranking)
                </p>
                <p>
                    Hopefully after browsing my site you'll see not just how passionate I am about technology but why
                    I'm pretty great (or so I like to think!)</p>
            </div>
        </div>
        <div id="important-links">
            <div class="slide-button">
                <img src="{{ URL::asset('images/GitSlideBG.png') }}" />
                <div class="slide-text" link="https://www.github.com/glennhs">
                    <h4>GitHub</h4>
                    <p>Check out my GitHub here!</p>
                </div>
            </div>
            <div class="slide-button">
                <img src="{{ URL::asset('images/LinkedInSlideBG.png') }}" />
                <div class="slide-text" link="https://www.linkedin.com/in/glennhs/">
                    <h4>LinkedIn</h4>
                    <p>Check out my LinkedIn here!</p>
                </div>
            </div>
            <div class="slide-button">
                <img src="{{ URL::asset('images/ContactSlideBG.png') }}" />
                <div class="slide-text">
                    <h4>Contact</h4>
                    <p>Email me here!</p>
                </div>
            </div>
            <div class="slide-button">
                <img src="{{ URL::asset('images/PortfolioSlideBG.png') }}" />
                <div class="slide-text">
                    <h4>Portfolio</h4>
                    <p>Check out my portfolio here!</p>
                </div>
            </div>
        </div>
        <div id="competencies-container">
            <h2>Competencies</h2>
            <div id="competencies">
                @foreach ($competencies as $c)
                    <x-competency :competency="$c" />
                @endforeach
            </div>
        </div>
        <h2>Highlighted Projects</h2>
        <div class="carousel-container">
            <div id="carousel-left" class="carousel-nav"><i class="fas fa-caret-left"></i></div>
            <div class="carousel">
                <div class="item">
                    <div class="carousel-card-top">
                    <a href="https://github.com/GlennHS/glenn-hs" target="_blank"><img src="{{ URL::asset('images/GHS.png') }}" alt="Project Logo"/></a>
                    </div>
                    <div class="carousel-card-bottom">
                        <h4>My Personal Site</h4>
                        <h5>Tech Stack</h5>
                        <ul>
                            <li>HTML5</li>
                            <li>CSS3/Sass</li>
                            <li>JS/NodeJS</li>
                            <li>Tiny Slider</li>
                            <li>Laravel/PHP</li>
                        </ul>
                        <p class="carousel-description">You are here!</p>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-card-top">
                        <a href="https://github.com/GlennHS/AEtherSlay" target="_blank"><img src="{{ URL::asset('images/Aetherslay.png') }}" alt="Project Logo"/></a>
                    </div>
                    <div class="carousel-card-bottom">
                        <h4>Ætherslay: A D&D Toolkit</h4>
                        <h5>Tech Stack</h5>
                        <ul>
                            <li>C#</li>
                            <li>.NET Framework</li>
                        </ul>
                        <p class="carousel-description">A D&D toolkit for players and dungeon masters.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-card-top">
                        <a href="https://github.com/GlennHS/DnDOneshotDecider" target="_blank"><img src="{{ URL::asset('images/ODS.png') }}" alt="Project Logo"/></a>
                    </div>
                    <div class="carousel-card-bottom">
                        <h4>D&D Oneshot Decider</h4>
                        <h5>Tech Stack</h5>
                        <ul>
                            <li>C#</li>
                            <li>.NET Framework</li>
                        </ul>
                        <p class="carousel-description">A personal project for quickly generating a D&D oneshot.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-card-top">
                        <a href="https://github.com/GlennHS/Jace" target="_blank"><img src="{{ URL::asset('images/Jace.png') }}" alt="Project Logo" /></a>
                    </div>
                    <div class="carousel-card-bottom">
                        <h4>Jace: D&D Discord Bot</h4>
                        <h5>Tech Stack</h5>
                        <ul>
                            <li>NodeJS</li>
                            <li>Discord.js</li>
                            <li>JS</li>
                        </ul>
                        <p class="carousel-description">An unfinished Discord bot for D&D made using NodeJS and Discord.js.
                        </p>
                    </div>
                </div>
            </div>
            <div id="carousel-right" class="carousel-nav"><i class="fas fa-caret-right"></i></div>
        </div>
    </main>

    <div class="spacer"></div>

    <footer>
        <div id="footer-container">

        </div>
    </footer>

    <script type="text/javascript">
        var APP_URL = {!! json_encode(url('/')) !!}
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    <script src="{{ URL::asset('js/index.js') }}" async defer></script>
</body>

</html>
