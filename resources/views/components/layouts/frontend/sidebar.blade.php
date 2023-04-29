<div class="d-flex flex-column">

    <div class="profile">
        <div class="profile-img">
            <img src="{{ asset('frontend') }}/assets/img/profile.jpg" alt="" class="img-fluid rounded-circle">
        </div>
        <a href="#">
            <h1 class="text-light">Hamidullo</h1>
            <h1 class="text-light">Rahmonberdiyev</h1>
        </a>
        <div class="social-links mt-3 text-center">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="https://instagram.com/hamidullo.rahmonberdiyev" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="https://t.me/hamidullo_rahmonberdiyev" class="google-plus"><i class="bx bxl-telegram"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            <a href="https://github.com/hamidullorahmonberdiyev" class="github"><i class="bx bxl-github"></i></a>
        </div>
    </div>

    <nav id="navbar" class="nav-menu navbar">
        <ul>
            <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
            <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
            <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a>
            </li>
            <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i>
                    <span>Portfolio</span></a></li>
            <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Skills</span></a>
            </li>
            <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a>
            </li>
            @auth     
            <li style="margin-left:13%">
                <form action="{{ route('logout') }}" method="POST" class="nav-link ml-5 scrollto">
                    @csrf
                    <button class="btn"><i class="bx bx-power-off" style="font-size:20px"></i> <span>Logout</span></button>
                </form>    
            </li>
            @endauth
        </ul>
    </nav><!-- .nav-menu -->
</div>
