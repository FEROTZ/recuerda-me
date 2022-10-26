<footer id="footer" class="bg-gray-200">
    <div class="footer-widget pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 col-sm-8">
                    <div class="footer-logo mt-20">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('resources/logo/recuerdame-logo.png') }}" alt="Logo">
                        </a>
                        <ul class="footer-info">
                            <li>
                                <div class="single-info">
                                    <div class="info-icon">
                                        <i class="lni-phone-handset"></i>
                                    </div>
                                    <div class="info-content">
                                        <p>+55-24-54-38-96</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-info">
                                    <div class="info-icon">
                                        <i class="lni-envelope"></i>
                                    </div>
                                    <div class="info-content">
                                        <p>empgalioso@gmail.com</p>
                                    </div>
                                    <div class="info-content">
                                        <p>emprecuerda.me@gmail.com</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="footer-social mt-20">
                            <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                            <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                            <li><a href="#"><i class="lni-google"></i></a></li>
                            <li><a href="#"><i class="lni-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="footer-link mt-45">
                        <div class="f-title">
                            <h4 class="title">Contacto</h4>
                        </div>
                        <ul class="mt-15">
                            <li><a href="{{ route('home') }}">Inicio</a></li>
                            <li><a href="{{ route('servicios') }}">Servicios</a></li>
                            <li><a href="{{ route('nosotros') }}">¿Quiénes somos?</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="footer-link mt-45">
                        <div class="f-title">
                            <h4 class="title">Acerca de la empresa</h4>
                        </div>
                        <ul class="mt-15">
                            <li><a href="{{ route('misión') }}">Misión</a></li>
                            <li><a href="{{ route('misión') }}">Visión</a></li>
                            <li><a href="{{ route('contacto') }}">Contacto</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright text-center">
                        <p>@Copyright 2022-Galioso</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
