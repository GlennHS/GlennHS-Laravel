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
        <div id="blog-entry">
            <form action="POST">
                <label for="title">Title:</label>
                <input type="text" name="title" id="post-title">
                <label for="content">Content:</label>
                <input type="text" name="content" id="post-content">
            </form>
            <?php echo "Yoooooooo"?>
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
    {{-- <script src="{{ URL::asset('js/index.js') }}" async defer></script> --}}
</body>

</html>
