<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{url('/')}}" class="logo d-flex align-items-center">
            <img src="{{asset('images/workshop.png')}}" alt="">
            <span>Workshop</span>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="{{url('/')}}">Home</a></li>
                <li><a class="nav-link scrollto" href="{{url('/')}}#latest_training">Training</a></li>
                <li><a class="nav-link scrollto" href="{{url('/')}}#about_training">About</a></li>
                <li><a class="nav-link scrollto" href="{{url('/')}}#team_department">Team</a></li>
                <li><a class="nav-link scrollto" href="{{url('/')}}#footer">Contact</a></li>
                <li><a class="getstarted scrollto" href="{{url('/form_pendaftar')}}">Registration</a></li>
                <!-- <li><a class="getstartedd scrollto" href="{{url('/login')}}">Login</a></li> -->
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->