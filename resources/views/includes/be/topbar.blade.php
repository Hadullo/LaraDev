<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">ITalanta Web Solutions</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

             <!-- Navbar Search-->
             <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="spacer"></div>

            </form>
            <!-- Navbar-->


            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <div class="input-group loggedinuser">
                    <p class="nameborder"><span class = "logged">You are logged in as</span>&nbsp;{{ Auth::user()->name }}</p>
                </div>

            </ul>


        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            @if(Route::has ('login'))
            @auth
            @if(Auth::user()->utype==='ADM')


            <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img class=" profile-pict" src="{{ asset('assets/admin/img/profile/ken.jpg') }}"
                    <i class="fas fa-user fa-fw"></i></a>


                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                    <li><a class="dropdown-item" href="{{ route('login') }}">Settings</a></li>

                    <li><hr class="dropdown-divider" /></li>

                    <li><a class="dropdown-item" a href="{{ route('logout') }}" onclick = "event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a></li>

                    <form id= "logout-form" method="POST" action="{{ route('logout') }}">
                         @csrf
                    </form>

                </ul>

            </li>

            @else

            <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img class=" profile-pict" src="{{ asset('assets/admin/img/profile/ken.jpg') }}"
                    <i class="fas fa-user fa-fw"></i></a>


                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                    <li><a class="dropdown-item" href="{{ route('login') }}">Settings</a></li>

                    <li><hr class="dropdown-divider" /></li>

                    <li><a class="dropdown-item" a href="{{ route('logout') }}" onclick = "event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a></li>

                    <form id= "logout-form" method="POST" action="{{ route('logout') }}">
                         @csrf
                    </form>
                    @endif
                </ul>

            </li>


            @else
        <li class="nav-item">
             <a class="nav-link" href="{{ route('register') }}">Register</a>
        </li>
         <li class="nav-item">
         <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>
        @endif
        @endif


        </ul>


    </nav>
