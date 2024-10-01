<!-- Header Start-->
<header class="header">
    <div class="header-inner">
        <nav class="navbar navbar-expand-lg bg-barren barren-head navbar fixed-top justify-content-sm-start pt-0 pb-0">
            <div class="container">	
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon">
                        <i class="fa-solid fa-bars"></i>
                    </span>
                </button>
                <a class="navbar-brand order-1 order-lg-0 ml-lg-0 ml-2 me-auto" href="index.html">
                    <div class="res-main-logo">
                        <img src="images/logo-icon.svg" alt="">
                    </div>
                    <div class="main-logo" id="logo">
                        <img src="images/logo.svg" alt="">
                        <img class="logo-inverse" src="images/dark-logo.svg" alt="">
                    </div>
                </a>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <div class="offcanvas-logo" id="offcanvasNavbarLabel">
                            <img src="images/logo-icon.svg" alt="">
                        </div>
                        <button type="button" class="close-btn" data-bs-dismiss="offcanvas" aria-label="Close">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                    <div class="offcanvas-body">
                        {{-- <div class="offcanvas-top-area">
                            <div class="create-bg">
                                <a href="create.html" class="offcanvas-create-btn">
                                    <i class="fa-solid fa-calendar-days"></i>
                                    <span>Criar Evento</span>
                                </a>
                            </div>
                        </div>							 --}}
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe_5">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.html">Início</a>
                            </li>
                           
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('home')}}">Explorar eventos</a>
                            </li>
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Ajuda
                                </a>
                                <ul class="dropdown-menu dropdown-submenu">
                                    <li><a class="dropdown-item" href="{{route('faq')}}">Perguntas Frequentes</a></li>
                                    <li><a class="dropdown-item" href="{{route('help_center')}}">Centro de Ajuda</a></li>
                                    <li><a class="dropdown-item" href="{{route('contact_us')}}">Contacte-nos</a></li>
                                </ul>
                            </li>
                       
                        </ul>
                    </div>
                    
                </div>

            </div>
        </nav>
        <div class="overlay"></div>
    </div>
</header>
<!-- Header End-->
