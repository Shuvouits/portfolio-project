<header class="main-header">
    <nav class="navbar header-nav header-white header-transparent navbar-expand-lg one-page-nav">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="#">
                @if(get_general_setting()->logo)
                <img src="{{asset(get_general_setting()->logo)}}" title="" alt="">
                @else
                <span style="color: white">SHUVO BHOWMIK</span>
                @endif
            </a>
            <!-- / -->
            <!-- Mobile Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collapse-toggle" aria-controls="navbar-collapse-toggle" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <!-- / -->
            <!-- Top Menu -->
            <div class="collapse navbar-collapse justify-content-end" id="navbar-collapse-toggle">
                <ul class="navbar-nav ml-auto">
                    <li><a class="nav-link" data-scroll-nav="0" href="#home"><span>Home</span></a></li>
                    <li><a class="nav-link" data-scroll-nav="1" href="#about"><span>About Us</span></a></li>
                    <li><a class="nav-link" data-scroll-nav="2" href="#services"><span>Services</span></a></li>
                    <li><a class="nav-link" data-scroll-nav="3" href="#work"><span>Portfolio</span></a></li>
                    <li><a class="nav-link" data-scroll-nav="4" href="#contactus"><span>Contact</span></a></li>
                </ul>
            </div>
            <!-- / -->
        </div><!-- Container -->
    </nav> <!-- Navbar -->
</header>
