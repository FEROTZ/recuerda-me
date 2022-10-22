<!-- navigation bar desktop version --->
<div class="navigation-bar desktop">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand mr-5" href="{{ route('home') }}">
                        <img src="{{ asset('resources/logo/recuerdame-logo.png') }}" alt="Logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                    </button>
                    <!-- Search bar START -->
                    <div class="search-bar">
                        <div class="inputs">
                            <i class="fa fa-search"></i>
                            <input type="text" class="form-control " placeholder="Realizar una búsqueda...">
                        </div>
                    </div>
                    <!-- Search bar ENDS -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul id="nav" class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="page-scroll" href="{{ route('home') }}">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="page-scroll" href="{{ route('servicios') }}">Servicios</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="page-scroll dropdown-toggle" href="#" id="navbarDropdown"
                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Conócenos
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('nosotros') }}">¿Quiénes somos?</a>
                                    <a class="dropdown-item" href="{{ route('misión') }}">Misión y visión </a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="page-scroll" href="{{ route('contacto') }}">Contacto</a>
                            </li>
                            <li class="nav-item">
                                <a class="page-scroll login" href="{{ route('login') }}"><i
                                        class="lni lni-user"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- navigation bar mobile version --->
<div class="navigation-bar mobile display-none">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('resources/logo/recuerdame-logo.png') }}" alt="Logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Search bar START -->
                        <div class="search-bar">
                            <div class="inputs">
                                <i class="fa fa-search"></i>
                                <input type="text" class="form-control " placeholder="Realizar una busqueda...">
                            </div>
                        </div>
                        <!-- Search bar ENDS -->
                        <ul id="nav" class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="page-scroll" href="{{ route('home') }}">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="page-scroll" href="{{ route('servicios') }}">Servicios</a>
                            </li>
                            <li class="nav-item">
                                <a class="page-scroll" href="{{ route('nosotros') }}">¿Quiénes somos?</a>
                            </li>
                            <li class="nav-item">
                                <a class="page-scroll" href="{{ route('misión') }}">Misión y visión </a>
                            </li>
                            <li class="nav-item">
                                <a class="page-scroll" href="{{ route('contacto') }}">Contacto</a>
                            </li>
                            <li class="nav-item">
                                <a class="page-scroll login" href="{{ route('login') }}"><i
                                        class="lni lni-user"></i> Iniciar sesión</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- navigation bar mobile version -->