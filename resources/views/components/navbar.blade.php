<div class="navbar">
    <ul>
        @if ($chosenPage === "Home")
            <li class="nav-disabled"><span>Home</span></li>
        @else
            <li><a href="/">Home</a></li>
        @endif
        @if ($chosenPage === "Blog")
            <li class="nav-disabled"><span>Blog</span></li>
        @else
            <li><a href="/blog">Blog</a></li>
        @endif

        <li class="logo"><span>~Glenn HS~</span></li>

        @if ($chosenPage === "Contact")
            <li class="nav-disabled"><span>Contact</span></li>
        @else
            <li><a href="/contact">Contact</a></li>
        @endif
        @if ($chosenPage === "Portfolio")
            <li class="nav-disabled"><span>Portfolio</span></li>
        @else
            <li><a href="/portfolio">Portfolio</a></li>
        @endif
    </ul>
    <div id="theme-toggle">
        <i class="fas fa-adjust"></i>
    </div>
</div>