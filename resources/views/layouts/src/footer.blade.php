<footer id="contact" class="footer">
    <div class="container pl-20"> <!-- start container -->
        <div class="site-title text-center pt-80">
            <span class="resume-title contact-title wow fadeInUp" data-wow-duration=".4s" data-wow-delay=".6s">Contacto</span>
            <h2 data-splitting class="about-tl-3 wow fadeInUp" data-wow-duration=".01s" data-wow-delay=".01s">
                Ponte en contacto
            </h2>
        </div>
        <div class="row"> <!-- start row -->
            <div class="col-md-7">
                <div class="contact-area">
                    <div class="contact-left mt-20">
                        <form class="contact-form" id="contact-form" action="{{ route('email')}}" method="POST">
                            @csrf
                        {{-- <form class="contact-form" id="contact-form" action="php/contact.php" method="POST"> --}}
                            <div class="row g-4">
                                <div class="col-md-12 wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".2s">
                                    <input type="text" name="subject" class="form-control input-style-2" placeholder="Asunto" required>
                                </div>
                                <div class="col-md-12 wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".3s">
                                    <input type="text" name="name" class="form-control input-style-2" placeholder="Nombre" required>
                                </div>
                                <div class="col-md-12 wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".4s">
                                    <input type="email" name="email" class="form-control input-style-2" placeholder="Correo Electronico" required>
                                </div>
                                <div class="col-12 wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".5s">
                                    <textarea class="form-control input-style-2" name="message" placeholder="Mensaje" required></textarea>
                                </div>
                                <div class="col-12 text-center wow fadeInUp " data-wow-duration=".6s" data-wow-delay=".6s">
                                    <button type="submit" class="theme-btn send-me mt-30 text-center" id="enviar">
                                        Enviar
                                    </button>
                                </div>
                                <div class="col-12">
                                    <p class="form-message"></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> <!-- end contact-area -->
            </div> <!-- end col-7 -->
            <div class="col-md-5">
                <div class="contact-right mt-40">
                    <ul>
                        <li>
                            <div class="addr mt-10 wow fadeInUp" data-wow-duration=".3s" data-wow-delay=".8s">
                                <div class="contact-right-icon two">
                                    <i class="icofont-envelope"></i>
                                </div>
                                <p class="mb-0 contact_itext">
                                    davidbermeoquimbaya22dbqq@gmail.com
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="addr mt-10 wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".8s">
                                <div class="contact-right-icon three">
                                    <i class="icofont-brand-whatsapp"></i>
                                </div>
                                <p class="mb-0 contact_itext">
                                    <a href="https://wa.me/+573112305173">
                                        +57 3112305173
                                    </a>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="addr mt-10 wow fadeInUp" data-wow-duration=".7s" data-wow-delay=".8s">
                                <div class="contact-right-icon one">
                                    <i class="icofont-google-map"></i>
                                </div>
                                <p class="mb-0 contact_itext">
                                    Neiva - Huila,
                                    <br />
                                    Colombia
                                </p>
                            </div>
                        </li>
                    </ul>
                    <div class="gmap-area mt-10"> <!-- start gmap -->
                        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63753.20633150614!2d-75.30740811083301!3d2.937618852251092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3b747c5a6b4009%3A0x69acf162bb25539a!2sNeiva%2C%20Huila!5e0!3m2!1ses!2sco!4v1651204860493!5m2!1ses!2sco" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div> <!-- end gmap -->
                </div>
            </div> <!-- end col-5 -->
        </div> <!-- end row -->
    </div> <!-- end container -->
    <div class="copyright-area"> <!-- start copyright -->
        <div class="container"> <!-- container -->
            <div class="row">
                <div class="col-md-8 mt-50">
                    <div class="copyright-left wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".7s">
                        <span class="copyright-text"> Copyright &copy;<script>document.write(new Date().getFullYear())</script>
                            <a href="https://github.com/DaKa22">
                            DaKa
                            </a>
                            .Todos los derechos reservados.
                        </span>
                    </div>
                </div> <!-- end col-5 -->
                <div class="col-md-2 mt-50">
                    <div class="copyright-social wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".9s">
                        <ul class="footer-social">
                            <li><a href="https://github.com/DaKa22"><i class="fab fa-github"></i></a></li>
                            <li><a href="https://wa.me/+573112305173"><i class="fab fa-whatsapp"></i></a></li>
                            <li><a href="mailto:davidbermeoquimbaya22dbqq@correo.com"><i class="fas fa-envelope"></i></a></li>
                        </ul>
                    </div>
                </div> <!-- end col-3 -->
            </div>
        </div> <!-- end container -->
    </div> <!-- end copyright area -->
</footer>
