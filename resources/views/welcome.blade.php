@extends('layouts.app')
@section('title', 'Portafolio')

@section('content')
		<!-- Start Hero
		============================================= -->
		<div id="home" class="hero-section hero-section-bg jarallax" data-jarallax='{"speed": 0.2}'>
			<canvas class="canvasParticles"></canvas>
			<div class="line_wrap"> <!-- line animation -->
				<div class="line_item"></div>
				<div class="line_item"></div>
				<div class="line_item"></div>
				<div class="line_item"></div>
				<div class="line_item"></div>
			 </div> <!-- end line animation -->
			<div class="container sidebar-toptext">
				<div class="row">
					<div class="col-md-12">
						<div class="head-top-contact">
                            <a href="https://wa.me/+573112305173">
							    <span class="phone_contact">+57 311 230 51 73</span>
                            </a>
							<a href="mailto:davidbermeoquimbaya22dbqq@correo.com">
                                <span class="email_contact">davidbermeoquimbaya22dbqq@gmail.com</span>
                            </a>
						</div>
					</div>
				</div>
			</div>
			<div class="top-contact">
				<a href="#contact" class="top-contact-btn smooth-scroll">
					<i class="icofont-envelope"></i>
				</a>
			</div>
			<div class="hero-single sidebar-hero-bg">
				<div class="container">	<!-- start container -->
					<div class="row">	<!-- start row -->
						<div class="col-md-6 col-sm-12 pl-20">	<!-- hero text left -->
							<div class="hero-content wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".6s">
								<h2 data-splitting class="top-title pt-30 wow fadeInUp" data-wow-duration=".001s" data-wow-delay=".001s">David <span class="colored">Bermeo.</span></h2>
								<div class="typed-strings">
									  <p> <span class="type_color">DevOps</span></p>
									  <p> <span class="type_color">Docker Developer</span></p>
									  <p> <span class="type_color">Kubernetes Developer</span></p>
									  <p> <span class="type_color">PHP Developer</span></p>
								</div>
								<p class="text-16 header_type_text text-white mb-2 mb-md-3">
									<span class="typed"></span>
								</p>
								<p class="header-intro-text wow fadeInUp pt-10" data-wow-duration=".6s" data-wow-delay=".8s">
                                    He estado trabajando desde 2020. Soy competente manejo de servidores con cluster en Docker y Kubernetes. marketing digital y desarrollo web.
                                </p>
								<div class="hro-btn wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".9s">
									<a href="{{asset('cv/CV.pdf')}} " download="DavidBermeo_CV.pdf" class="theme-btn">
										Descargar CV
									</a>
								</div>
							</div>
						</div>	<!-- hero left text end -->
						<div class="col-md-5 col-sm-12 mt-50"><!-- col-6 -->
							<div class="right-social-icon">
								<ul class="social-icon">
									{{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-dribbble"></i></a></li>
									<li><a href="#"><i class="fab fa-behance"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li> --}}
								</ul>
							</div>
						</div><!-- end col-6 -->
					</div>
				</div>
			</div><!-- single Hero End -->
			<div class="about-scroll-down text-center">
				<a href="#about" class="scroll-down-arrow scroll_down smooth-scroll"><i class="icofont-scroll-bubble-down"></i></a>
			</div>
		</div>
		<!-- End Hero -->

		<!-- About us
		============================================= -->
		<div id="about" class="about-area de-padding">
			<div class="line_wrap"> <!-- line animation -->
				<div class="line_item"></div>
				<div class="line_item"></div>
				<div class="line_item"></div>
				<div class="line_item"></div>
				<div class="line_item"></div>
			 </div> <!-- end line animation -->
			<div class="about-wpr mt-20">	<!-- start about -->
				<div class="container pl-20">	<!-- container -->
					<div class="row">	<!-- row -->
						<div class="col-md-5 mb-50">
							<div class="about-left wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".2s">
								<div class="about-header-img">
									<img src="img/perfil.png" alt="about me" class="responsive-fluid bounce-animate" />
								</div>
							</div>
						</div>	<!-- about left text end -->
						<div class="col-md-7">	<!-- col-7 -->
							<div class="about-right wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".5s">
								<span class="top-title">Acerca de</span>
								<h2 data-splitting class="about-tl-3 gr-2 wow fadeInUp" data-wow-duration=".01s" data-wow-delay=".1s">
									Developer Web
								</h2>
								{{-- <p class="wow fadeInUp" data-wow-duration=".2s" data-wow-delay=".2s">
									I am dedicated his life to learning what makes humans tick. He studies, researches and reads everything hecan, and shares his
									findings with his clients. His philosophy is to learn, test, analyse,
									improve and re-test. His motto is stay agile. I'm a Freelancer Front-end Developer with over 3 years of experience. I'm from San Francisco.
									<br />
									I code and create web elements for amazing people around the world. I like work with new people.
									New people new Experiences.
								</p> --}}
                                <p class="wow fadeInUp" data-wow-duration=".2s" data-wow-delay=".2s">
									Soy una persona estudiosa con hambre de aprender nuevas experiencias, siempre buscando el porque de las cosas investigando como funciona todo.
									<br />
									Codifico y creo elementos web,API, Deploys de contenedores para personas increíbles de todo el mundo.<br />
                                    Me gusta trabajar con gente nueva, conocer nuevos retos con el fin de superarme como constantemente mis espectativas de mi mismo.
								</p>
								<div class="row">	<!-- row -->
									<div class="col-md-6 col-sm-12"><!-- col-6 -->
										<div class="about-cn">
											<ul>
												<li><a href="https://github.com/DaKa22"><i class="fas fa-user-tie"></i> David Bermeo</a></li>
                                                <li><a href="https://wa.me/+573112305173"><i class="fab fa-whatsapp"></i> +57 311 230 5173</a></li>
												<li><a href="mailto:davidbermeoquimbaya22dbqq@correo.com"><i class="far fa-envelope"></i> davidbermeoquimbaya22dbqq@gmail.com</a></li>
											</ul>
										</div>
									</div>	<!-- end col-6 -->
									<div class="col-md-6 col-sm-12"><!-- col-6 -->
										<div class="about-cn">
											<ul>
												<li><i class="fas fa-map-marker-alt"></i> Neiva - Huila, Colombia</li>
												<li><i class="fas fa-birthday-cake"></i> 16 abril, 2002</li>

											</ul>
										</div>
									</div> <!-- end col-6 -->
								</div> <!-- end row -->
							</div> <!-- end about right -->
						</div> <!-- end col-7 -->
					</div> <!-- end row -->
					<div class="counter-counter grid-4"> <!-- start counter -->
						<div class="fun-fact">
							<span class="fun-icon one"><i class="icofont-calendar"></i></span>
							<div class="fun-desc">
								<p class="timer" data-to="2550" data-speed="3000">2550</p>
								<span class="medium">Horas Trabajando</span>
							</div>
						</div>
						<div class="fun-fact fun-active">
							<span class="fun-icon two"><i class="icofont-globe"></i></span>
							<div class="fun-desc">
								<p class="timer" data-to="15" data-speed="3000">550</p>
								<span class="medium">Total proyectos</span>
							</div>
						</div>
						<div class="fun-fact">
							<span class="fun-icon three"><i class="icofont-bulb-alt"></i></span>
							<div class="fun-desc">
								<p class="timer" data-to="3" data-speed="3000">1</p>
								<span class="medium">años de estudios</span>
							</div>
						</div>
						<div class="fun-fact">
							<span class="fun-icon four"><i class="icofont-nerd-smile"></i></span>
							<div class="fun-desc">
								<p class="timer" data-to="5" data-speed="3000">1500</p>
								<span class="medium">Total Clientes</span>
							</div>
						</div>
					</div> <!-- end counter -->
				</div> <!-- end container -->
			</div> <!-- end about wrp -->
		</div> <!-- About us -->

		<!-- Start Experience
		============================================= -->
		<div class="exp-area de-padding">
			<div class="container pl-20">
				<div class="site-title text-center">
					<span class="resume-title">
						Mi Resumen
					</span>
					<h2 data-splitting class="about-tl-3 gr-2 wow fadeInUp" data-wow-duration=".01s" data-wow-delay=".01s">
						Education & Experiencia
					</h2>
				</div> <!-- end section title -->
				<div class="exp-wpr row">
					<div class="col-md-6"><!-- start col-6 -->
						<div class="experience_area">
                            <div class="exp-box mt-20 wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".2s"><!-- start one -->
								<div class="exp-icon one">
									<i class="fas fa-server"></i>
								</div>
								<div class="exp-content">
									<h4>DevOps</h4>
									<p>Cootranshuila (2021 - 2022)</p>
									<span class="exp-description pt-10">DevOps en Cootranshuila en el desarrollo de un software de transporte administrativo a nivel nacional.</span>
								</div>
							</div> <!-- end one -->
                            <div class="exp-box mt-20 wow fadeInDown" data-wow-duration=".6s" data-wow-delay=".2s"><!-- start one -->
								<div class="exp-icon one">
									<img src="{{asset('img/kubernetes-icon.svg')}}" >
								</div>
								<div class="exp-content">
									<h4>Kubernetes Developer</h4>
									<p>Empirico (2021 - 2022)</p>
									<span class="exp-description pt-10">Automatización del despliegue, ajuste de escala y manejo de aplicaciones en contenedores .</span>
								</div>
							</div> <!-- end one -->
							<div class="exp-box mt-20 wow fadeInDown" data-wow-duration=".6s" data-wow-delay=".2s"><!-- start one -->
								<div class="exp-icon one">
									<i class="fab fa-docker"></i>
								</div>
								<div class="exp-content">
									<h4>Docker Developer</h4>
									<p>Empirico (2021 - 2022)</p>
									<span class="exp-description pt-10">reduccion drastica de errores al tener todo en contenedores para deploy.</span>
								</div>
							</div> <!-- end one -->
                            <div class="exp-box mt-20 wow fadeInDown" data-wow-duration=".6s" data-wow-delay=".2s"><!-- start one -->
								<div class="exp-icon one">
									<i class="fab fa-laravel"></i>
								</div>
								<div class="exp-content">
									<h4>Laravel Developer</h4>
									<p>Empirico (2020 - 2021)</p>
									<span class="exp-description pt-10">Gran framework que agiliza el trabajo , ideal para proyextos robustos.</span>
								</div>
							</div> <!-- end one -->


						</div>
					</div> <!-- end col-6 -->
					<div class="col-md-6"><!-- start col-6 -->
						<div class="education_area">
                            <div class="exp-box mt-20 wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".4s"><!-- start two -->
								<div class="exp-icon two">
									<i class="fab fa-php"></i>
								</div>
								<div class="exp-content">
									<h4>PHP Developer</h4>
									<p>Empirico (2020 - 2021)</p>
									<span class="exp-description pt-10">Versatilidad en el momento al desarrollar Controladores.</span>
								</div>
							</div> <!-- end two -->
                            <div class="exp-box mt-20 wow fadeInDown" data-wow-duration=".6s" data-wow-delay=".4s"><!-- start three -->
								<div class="exp-icon one">
									<img src="{{asset('img/postgresql-icon.svg')}}">
								</div>
								<div class="exp-content">
									<h4>PostgreSQL Developer</h4>
									<p>Emprico (2020 - 2021)</p>
									<span class="exp-description pt-10">Preferencia en los desarrollos de proyectos robustos en compañia de laravel para optimizar las consultas.<br><br></span>
								</div>
							</div> <!-- end three -->
                            <div class="exp-box mt-20 wow fadeInDown" data-wow-duration=".6s" data-wow-delay=".4s"><!-- start three -->
								<div class="exp-icon three">
									<i class="icofont-code"></i>
								</div>
								<div class="exp-content">
									<h4>Web Developer</h4>
									<p>Emprico (2019 - 2020)</p>
									<span class="exp-description pt-10">Inclinacion al desarrolo en el back-end.</span>
								</div>
							</div> <!-- end three -->
							<div class="exp-box mt-20 wow fadeInDown" data-wow-duration=".6s" data-wow-delay=".4s"><!-- start two -->
								<div class="exp-icon five">
									<i class="icofont-graduate"></i>
								</div>
								<div class="exp-content">
									<h4>Tecnolgo en Desarrollo de Software  </h4>
									<p>Universidad Surcolombiana (2019 - 2022)</p>
									<span class="exp-description pt-10">Destacado entre el codigo por innovar.</span>
								</div>
							</div> <!-- end two -->
						</div>
					</div> <!-- end col-6 -->
				</div> <!-- end exp-wrp row -->
				<div class="row">	<!-- start row -->
					<div class="col-md-6"> <!-- start col-6 -->
						<div class="progress-left pt-90">
							<div class="skill-section">
								<!-- Progress Bar Start -->
								<div class="progress-box">
									<h5>Docker  <span class="pull-right">65</span></h5>
									<div class="progress">
										<div class="progress-bar" role="progressbar" data-width="65"></div>
									</div>
								</div>
								<div class="progress-box">
									<h5>Kubernetes  <span class="pull-right">10%</span></h5>
									<div class="progress">
										<div class="progress-bar" role="progressbar" data-width="10"></div>
									</div>
								</div>
								<div class="progress-box">
									<h5>Laravel <span class="pull-right">70%</span></h5>
									<div class="progress">
										<div class="progress-bar" role="progressbar" data-width="70"></div>
									</div>
								</div>
								<!-- End Progressbar -->
							</div>
						</div>
					</div> <!-- end col-6 -->
					<div class="col-md-6"> <!-- start col-6 -->
						<div class="progress-right pt-90">
							<div class="skill-section">
								<!-- Progress Bar Start -->
								<div class="progress-box">
									<h5>Php <span class="pull-right">80%</span></h5>
									<div class="progress">
										<div class="progress-bar" role="progressbar" data-width="80"></div>
									</div>
								</div>
								<div class="progress-box">
									<h5>Postgresql <span class="pull-right">60%</span></h5>
									<div class="progress">
										<div class="progress-bar" role="progressbar" data-width="60"></div>
									</div>
								</div>
								<div class="progress-box">
									<h5>Linux Server <span class="pull-right">75%</span></h5>
									<div class="progress">
										<div class="progress-bar" role="progressbar" data-width="75"></div>
									</div>
								</div>
								<!-- End Progressbar -->
							</div>
						</div>
					</div>	<!-- end col-6  -->
				</div>	<!-- end row-->
				<div class="row pt-70"><!-- start row-->
					<div class="col-md-12">
						<div class="download-cv-btn text-center">
							<a href="{{asset('cv/CV.pdf')}}" download="DavidBermeo_CV.pdf" class="theme-btn">Download CV</a>
						</div>
					</div>
				</div><!-- end row-->
			</div> <!-- end container -->
		</div>
		<!-- End Experience -->

		<!-- Start Services
		============================================= -->
		<div id="service" class="service-area de-padding">
			<div class="container pl-20">
				<div class="site-title text-center"> <!-- service section title -->
					<span class="resume-title">Mis servicios</span>
					<h2 data-splitting class="about-tl-3 gr-2 wow fadeInUp" data-wow-duration=".01s" data-wow-delay=".01s">
						{{-- A brief of Offerting Services --}}
					</h2>
				</div>
				<div class="row"> <!-- start row -->
					<div class="col-md-4 col-sm-6">
						<div class="service-box mt-30 wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s">
							<div class="service-icon service-one">
								<i class="icofont-ui-browser"></i>
							</div>
							<div class="service-info">
								<h2>Desarrollo Web</h2>
								<ul>
									<li>Administrables</li>
									<li>Sitios web personalizados</li>
									<li>Hosting</li>
								</ul>
							</div>
						</div> <!-- end service one -->
					</div> <!-- end col-4 -->
					<div class="col-md-4 col-sm-6">
						<div class="service-box mt-30 wow fadeInDown" data-wow-duration=".7s" data-wow-delay=".6s">
							<div class="service-icon service-two">
								<i class="fa fa-database"></i>
							</div>
							<div class="service-info">
								<h2>Estructuramiento Base de Datos</h2>
								<ul>
									<li>Entidad Relacion</li>
									<li>Diagrama caso de uso</li>
									<li>Analisis Rapido</li>
								</ul>
							</div>
						</div> <!-- end service two -->
					</div> <!-- end col-4 -->
					<div class="col-md-4 col-sm-6">
						<div class="service-box mt-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".8s">
							<div class="service-icon service-three">
								<i class="fas fa-server"></i>
							</div>
							<div class="service-info">
								<h2>Servidores</h2>
								<ul>
									<li>Manejo de Microservicios</li>
									<li>Manejo de contenedores en Docker</li>
									<li>kubernetes</li>
								</ul>
							</div>
						</div> <!-- end service three -->
					</div> <!-- end col-4 -->
					<div class="col-md-4 col-sm-6">
						<div class="service-box mt-30 wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s">
							<div class="service-icon service-one">
								<i class="icofont-ship-wheel"></i>
							</div>
							<div class="service-info">
								<h2>
                                    Diseño Gráfico</h2>
								<ul>
									<li>Diseño del paquete</li>
									<li>Firma de email</li>
									<li>Banner de redes sociales</li>
								</ul>
							</div>
						</div> <!-- end service one -->
					</div> <!-- end col-4 -->
					<div class="col-md-4 col-sm-6">
						<div class="service-box mt-30 wow fadeInDown" data-wow-duration=".7s" data-wow-delay=".6s">
							<div class="service-icon service-two">
								<i class="icofont-ssl-security"></i>
							</div>
							<div class="service-info">
								<h2>Cyber Security</h2>
								<ul>
									<li>Hacking Etico</li>
									<li>Analisis de seguridad</li>
									<li>eliminacion de  Malwares</li>
								</ul>
							</div>
						</div> <!-- end service two -->
					</div><!-- end col-4 -->
					<div class="col-md-4 col-sm-6">
						<div class="service-box mt-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".8s">
							<div class="service-icon service-three">
								<i class="icofont-bulb-alt"></i>
							</div>
							<div class="service-info">
								<h2>Web Back-end</h2>
								<ul>
									<li>Blades</li>
									<li>API</li>
									<li>Larevel</li>
                                    {{-- <li>Docker</li> --}}
								</ul>
							</div>
						</div> <!-- end service six -->
					</div><!-- end col-4 -->
				</div> <!-- end row -->
			</div> <!-- end container -->
		</div> <!-- End Services -->

		<!-- Start Hire Me
		============================================= -->
		{{-- <div class="hireme-area de-padding jarallax d-flex" data-jarallax='{"speed": 0.2}'>
			<div class="container pl-20"> <!-- start container-->
				<div class="hire-title">
					<h2 data-splitting class="tl-3 text-white text-center wow fadeInUp" data-wow-duration=".01s" data-wow-delay=".01s"> Interested in working with me?</h2>
				</div>
				<div class="row"> <!-- hire me btn -->
					<div class="col-md-6 text-center">
						<div class="video-hire-btn mt-30">
							<div class="video-left-img-area wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".3s">
								<div class="video-box fl-wrap">
									<a class="video-box-btn color-bg popup-vimeo image-popup" href="https://www.youtube.com/watch?v=SMKPKGW083c"><i class="fa fa-play" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="btn-content">
							<div class="hire-btn mt-20"> <!-- start btn-->
								<a href="#contact" class="theme-btn hire-btn smooth-scroll">
									Hire Me
								</a>
							</div> <!-- end btn-->
						</div><!-- end btn content -->
					</div><!-- end col-6 -->
				</div> <!-- end row -->
			</div> <!-- end container -->
		</div> --}}
		<!-- End Hire Me-->



        <!-- Start Project Area
============================================= -->
        <section id="work" class="portfolio_bg de-padding">
            <div class="line_wrap"> <!-- line animation -->
                <div class="line_item"></div>
                <div class="line_item"></div>
                <div class="line_item"></div>
                <div class="line_item"></div>
                <div class="line_item"></div>
            </div> <!-- end line animation -->
            <div class="container"> <!-- start container -->
                <div class="row"> <!-- row -->
                    <div class="col-md-5 pl-20"> <!-- col-5 -->
                        <div class="site-title work_section_title">
                            <span class="top-title wow fadeInUp" data-wow-duration=".4s" data-wow-delay=".3s">
                                Mi Portafolio
                            </span>
                            <h2 data-splitting class="about-tl-3 gr-2 wow fadeInUp" data-wow-duration=".01s" data-wow-delay=".01s">
                                Algunos Trabajos
                            </h2>
                        </div>
                    </div><!-- end col-5 -->
                    <div class="col-md-7"><!-- start col-7 -->
                        <ul class="col list-unstyled list-inline mb-0 text-uppercase work_menu mt-50" id="menu-filter">
                            <li class="list-inline-item"><a class="active" data-filter="*">All</a></li>
                            <li class="list-inline-item"><a class="" data-filter=".ui-ux">UI/UX</a></li>
                            <li class="list-inline-item"><a class="" data-filter=".Web-site">Sitios Web</a></li>
                            <li class="list-inline-item"><a class="" data-filter=".dashboard">Dashboard</a></li>
                            <li class="list-inline-item"><a class="" data-filter=".docker">Docker</a></li>
                        </ul>
                    </div><!-- end col-7 -->
                </div><!-- end row -->
                <div class="row row-full-width">
                    <div class="col-md-12"> <!-- start col-9 -->
                        <div class="container portfolio-container"> <!-- container -->
                            <div class="row work-filter">
                                <div class="col-md-4 work_item Web-site work ui-ux">
                                    <a href="img/portfolio/1.png" class="img-zoom">
                                        <div class="work_box">
                                            <div class="work_img">
                                                <img src="img/portfolio/1.png" class="img-fluid mx-auto d-block rounded" alt="work-img">
                                            </div>
                                            <div class="work_detail">
                                                <p class="mb-2">Sitio Web</p>
                                                <h4 class="mb-0">Cootranshuila.com</h4>
                                            </div>
                                        </div>
                                    </a>
                                </div> <!-- end col-4 -->
                                <div class="col-md-4 work_item ui-ux">
                                    <a href="img/portfolio/2.png" class="img-zoom">
                                        <div class="work_box">
                                            <div class="work_img">
                                                <img src="img/portfolio/2.png" class="img-fluid mx-auto d-block rounded" alt="work-img">
                                            </div>
                                            <div class="work_detail">
                                                <p class="mb-2">Dashboard</p>
                                                <h4 class="mb-0">Login Administrativo</h4>
                                            </div>
                                        </div>
                                    </a>
                                </div> <!-- end col-4 -->
                                <div class="col-md-4 work_item  dashboard Web-site">
                                    <a href="img/portfolio/3.png" class="img-zoom">
                                        <div class="work_box">
                                            <div class="work_img">
                                                <img src="img/portfolio/3.png" class="img-fluid mx-auto d-block rounded" alt="work-img">
                                            </div>
                                            <div class="work_detail">
                                                <p class="mb-2">Dashboard</p>
                                                <h4 class="mb-0">Dashboard Administrativo</h4>
                                            </div>
                                        </div>
                                    </a>
                                </div> <!-- end col-4 -->
                                <div class="col-md-4 work_item  Web-site ui-ux">
                                    <a href="img/portfolio/4.png" class="img-zoom">
                                        <div class="work_box">
                                            <div class="work_img">
                                                <img src="img/portfolio/4.png" class="img-fluid mx-auto d-block rounded" alt="work-img">
                                            </div>
                                            <div class="work_detail">
                                                <p class="mb-2">Ecommerce</p>
                                                <h4 class="mb-0">Compra de Tiquetes</h4>
                                            </div>
                                        </div>
                                    </a>
                                </div> <!-- end col-4 -->
                                <div class="col-md-4 work_item ui-ux">
                                    <a href="img/portfolio/5.png" class="img-zoom">
                                        <div class="work_box">
                                            <div class="work_img">
                                                <img src="img/portfolio/5.png" class="img-fluid mx-auto d-block rounded" alt="work-img">
                                            </div>
                                            <div class="work_detail">
                                                <p class="mb-2">Instalador de Impresora (Api Local)</p>
                                                <h4 class="mb-0">ApiPrinter</h4>
                                            </div>
                                        </div>
                                    </a>
                                </div> <!-- end col-4 -->
                                <div class="col-md-4 work_item  Web-site ui-ux">
                                    <a href="img/portfolio/6.png" class="img-zoom">
                                        <div class="work_box">
                                            <div class="work_img">
                                                <img src="img/portfolio/6.png" class="img-fluid mx-auto d-block rounded" alt="work-img">
                                            </div>
                                            <div class="work_detail">
                                                <p class="mb-2">Ecommerce</p>
                                                <h4 class="mb-0">Pasarela de Pagos</h4>
                                            </div>
                                        </div>
                                    </a>
                                </div> <!-- end col-4 -->
                                <div class="col-md-4 work_item  dashboard ui-ux">
                                    <a href="img/portfolio/7.png" class="img-zoom">
                                        <div class="work_box">
                                            <div class="work_img">
                                                <img src="img/portfolio/7.png" class="img-fluid mx-auto d-block rounded" alt="work-img">
                                            </div>
                                            <div class="work_detail">
                                                <p class="mb-2">Login</p>
                                                <h4 class="mb-0">InterTransporte</h4>
                                            </div>
                                        </div>
                                    </a>
                                </div> <!-- end col-4 -->
                                <div class="col-md-4 work_item Web-site ui-ux">
                                    <a href="img/portfolio/8.png" class="img-zoom">
                                        <div class="work_box">
                                            <div class="work_img">
                                                <img src="img/portfolio/8.png" class="img-fluid mx-auto d-block rounded" alt="work-img">
                                            </div>
                                            <div class="work_detail">
                                                <p class="mb-2">Dashboard</p>
                                                <h4 class="mb-0">InterTransporte</h4>
                                            </div>
                                        </div>
                                    </a>
                                </div> <!-- end col-4 -->
                                <div class="col-md-4 work_item dashboard ui-ux">
                                    <a href="img/portfolio/9.png" class="img-zoom">
                                        <div class="work_box">
                                            <div class="work_img">
                                                <img src="img/portfolio/9.png" class="img-fluid mx-auto d-block rounded" alt="work-img">
                                            </div>
                                            <div class="work_detail">
                                                <p class="mb-2">Parametrizable</p>
                                                <h4 class="mb-0">InterTransporte</h4>
                                            </div>
                                        </div>
                                    </a>
                                </div> <!-- end col-4 -->
                                <div class="col-md-4 work_item Web-site ui-ux">
                                    <a href="img/portfolio/10.png" class="img-zoom">
                                        <div class="work_box">
                                            <div class="work_img">
                                                <img src="img/portfolio/10.png" class="img-fluid mx-auto d-block rounded" alt="work-img">
                                            </div>
                                            <div class="work_detail">
                                                <p class="mb-2">Venta Tiquetes</p>
                                                <h4 class="mb-0">InterTransporte</h4>
                                            </div>
                                        </div>
                                    </a>
                                </div> <!-- end col-4 -->
                                <div class="col-md-4 work_item dashboard docker">
                                    <a href="img/portfolio/11.png" class="img-zoom">
                                        <div class="work_box">
                                            <div class="work_img">
                                                <img src="img/portfolio/11.png" class="img-fluid mx-auto d-block rounded" alt="work-img">
                                            </div>
                                            <div class="work_detail">
                                                <p class="mb-2">Administrador de dominios (hosting)</p>
                                                <h4 class="mb-0">Nginx Manager SSL</h4>
                                            </div>
                                        </div>
                                    </a>
                                </div> <!-- end col-4 -->
                            </div>
                        </div> <!-- end container -->
                    </div><!-- start col-9 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>	<!-- End Project Area -->

        <!-- Start Feedback
        ============================================= -->
        {{-- <div id="feed" class="feedback-area de-padding">
            <div class="line_wrap"> <!-- line animation -->
                <div class="line_item"></div>
                <div class="line_item"></div>
                <div class="line_item"></div>
                <div class="line_item"></div>
                <div class="line_item"></div>
            </div> <!-- end line animation -->
            <div class="container pl-20"> <!-- start container -->
                <div class="site-title text-center">
                    <span class="resume-title text-center wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".5s">
                        Testimonial
                    </span>
                    <h2 data-splitting class="about-tl-3 gr-2 wow fadeInUp" data-wow-duration=".01s" data-wow-delay=".01s">
                        People What Are Saying
                    </h2>
                </div> <!-- end section title -->
                <div class="feedback-wpr feed-sldr"> <!-- start feedback-wpr -->
                    <div class="feedback-box">
                        <div class="feedback-pc">
                            <i class="icofont-quote-left"></i>
                        </div>
                        <p>
                            Printing and typesetting industry Lorem Ipsum has the industry's standard dummy text ever the since the 1500s when an unknown took.
                        </p>
                        <div class="feedback-desc">
                            <img src="img/client/1.jpg" alt="audiobook maker">
                            <div class="feedback-bio">
                                <h5 class="fz-20 l-h-1">Devid Nikolas</h5>
                                <span class="fz-16 l-h-1">Chairman, Square Inc</span>
                            </div>
                        </div>
                    </div> <!-- end single feedback -->
                    <div class="feedback-box">
                        <div class="feedback-pc">
                            <i class="icofont-quote-left"></i>
                        </div>
                        <p>
                            Printing and typesetting industry Lorem Ipsum has the industry's standard dummy text ever the since the 1500s when an unknown took.
                        </p>
                        <div class="feedback-desc">
                            <img src="img/client/2.jpg" alt="audiobook maker">
                            <div class="feedback-bio">
                                <h5 class="fz-20 l-h-1">Devid Nikolas</h5>
                                <span class="fz-16 l-h-1">Chairman, Square Inc</span>
                            </div>
                        </div>
                    </div> <!-- end single feedback -->
                    <div class="feedback-box">
                        <div class="feedback-pc">
                            <i class="icofont-quote-left"></i>
                        </div>
                        <p>
                            Printing and typesetting industry Lorem Ipsum has the industry's standard dummy text ever the since the 1500s when an unknown took.
                        </p>
                        <div class="feedback-desc">
                            <img src="img/client/3.jpg" alt="audiobook maker">
                            <div class="feedback-bio">
                                <h5 class="fz-20 l-h-1">Devid Nikolas</h5>
                                <span class="fz-16 l-h-1">Chairman, Square Inc</span>
                            </div>
                        </div>
                    </div> <!-- end single feedback -->
                </div> <!-- end feedback-wpr -->
            </div> <!-- end container -->
        </div> --}}
        <!-- End Feedback -->

		<!-- Start Pricing
		============================================= -->
		{{-- <div class="price-area de-padding">
			<div class="container pl-20"> <!-- start container -->
				<div class="site-title text-center">
					<span class="top-title wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s">
						My Price
					</span>
					<h2 data-splitting class="about-tl-3 wow fadeInUp" data-wow-duration=".01s" data-wow-delay=".01s">
						How Much I Charge?
					</h2>
				</div>
				<div class="price-wrapper grid-3"> <!-- start price-area -->
					<div class="price-box mt-20 wow fadeInLeft" data-wow-duration=".5s" data-wow-delay=".5s"> <!-- single price -->
						<div class="price-head">
							<div class="price-icon price-icon-one">
								<i class="icofont-package"></i>
							</div>
							<div class="price-rib">
								<span>Design Package</span>
							</div>
							<div class="price-value">
								<h2><span>$</span>99</h2>
							</div>
						</div>
						<div class="price-info">
							<ul>
								<li><i class="icofont-check"></i> Business Hosting</li>
								<li><i class="icofont-check"></i>Branding & Illustration </li>
								<li><i class="icofont-check"></i>Social Media Banner</li>
								<li><i class="icofont-check"></i>Web UI</li>
							</ul>
						</div>
						<div class="price-bottom">
							<a href="#" class="btn-2">
								Buy Now
							</a>
						</div>
					</div> <!-- end single price -->
					<div class="price-box mt-20 wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".6s"> <!-- single price -->
						<div class="price-head">
							<div class="price-icon price-icon-two">
								<i class="icofont-newspaper"></i>
							</div>
							<div class="price-rib">
								<span>Advance </span>
							</div>
							<div class="price-value">
								<h2><span>$</span>199</h2>
							</div>
						</div>
						<div class="price-info">
							<ul>
								<li><i class="icofont-check"></i>PSD to Wordpress</li>
								<li><i class="icofont-check"></i>Web Design</li>
								<li><i class="icofont-check"></i>Web Development</li>
								<li><i class="icofont-check"></i>10 hours of support</li>
							</ul>
						</div>
						<div class="price-bottom">
							<a href="#" class="btn-2 bt-ac">
								Buy Now
							</a>
						</div>
					</div> <!-- end single price -->
					<div class="price-box mt-20 wow fadeInRight" data-wow-duration=".5s" data-wow-delay=".5s"> <!-- single price -->
						<div class="price-head">
							<div class="price-icon price-icon-three">
								<i class="icofont-license"></i>
							</div>
							<div class="price-rib">
								<span>Ecommerce Solution</span>
							</div>
							<div class="price-value">
								<h2><span>$</span>799</h2>
							</div>
						</div>
						<div class="price-info">
							<ul>
								<li><i class="icofont-check"></i>Woocommerce Store</li>
								<li><i class="icofont-check"></i>Ecommerce Web</li>
								<li><i class="icofont-check"></i>Data Management</li>
								<li><i class="icofont-check"></i>PSD to Woocommerce</li>
							</ul>
						</div>
						<div class="price-bottom">
							<a href="#" class="btn-2">
								Buy Now
							</a>
						</div>
					</div> <!-- end single price-->
				</div> <!-- end price-area -->
			</div> <!-- end container -->
		</div> --}}
		<!-- End Pricing -->

		<!-- Start Blog
		============================================= -->
		{{-- <div id="blog" class="blog-area de-padding">
			<div class="container pl-20">
				<div class="site-title text-center">
					<span class="top-title wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".5s">Blog Posts</span>
					<h2 data-splitting class="about-tl-3 wow fadeInUp" data-wow-duration=".01s" data-wow-delay=".01s">
						Newly Posted Articles
					</h2>
				</div>
				<div class="blog-wpr blog-sldr">
					<div class="blog-box"> <!-- start single blog -->
						<div class="blog-pic">
							<img src="img/blog/1.png" alt="thumb">
						</div>
						<div class="blog-info">
							<ul class="blog-meta">
								<li><i class="icofont-user-alt-4"></i> William</li>
								<li><i class="icofont-clock-time"></i> 02 Aug, 2021</li>
							</ul>
							<a href="single.html">
								<h5 class="blog-title">
									How to make website from
									scrach easily
								</h5>
							</a>
						</div>
					</div> <!-- end single blog -->
					<div class="blog-box">
						<div class="blog-pic">
							<img src="img/blog/2.png" alt="thumb">
						</div>
						<div class="blog-info">
							<ul class="blog-meta">
								<li><i class="icofont-user-alt-4"></i> William</li>
								<li><i class="icofont-clock-time"></i> 07 Aug, 2021</li>
							</ul>
							<a href="single.html">
								<h5 class="blog-title">
									How to make website from
									scrach easily
								</h5>
							</a>
						</div>
					</div> <!-- end single blog -->
					<div class="blog-box">
						<div class="blog-pic">
							<img src="img/blog/3.png" alt="thumb">
						</div>
						<div class="blog-info">
							<ul class="blog-meta">
								<li><i class="icofont-user-alt-4"></i> William</li>
								<li><i class="icofont-clock-time"></i> 04 Aug, 2021</li>
							</ul>
							<a href="single.html">
								<h5 class="blog-title">
									How to make website from
									scrach easily
								</h5>
							</a>
						</div>
					</div> <!-- end single blog -->
                    <div class="blog-box">
						<div class="blog-pic">
							<img src="img/blog/1.png" alt="thumb">
						</div>
						<div class="blog-info">
							<ul class="blog-meta">
								<li><i class="icofont-user-alt-4"></i> William</li>
								<li><i class="icofont-clock-time"></i>09 Aug, 2021</li>
							</ul>
							<a href="single.html">
								<h5 class="blog-title">
									How to make website from
									scrach easily
								</h5>
							</a>
						</div>
					</div> <!-- end single blog -->
					<div class="blog-box">
						<div class="blog-pic">
							<img src="img/blog/2.png" alt="thumb">
						</div>
						<div class="blog-info">
							<ul class="blog-meta">
								<li><i class="icofont-user-alt-4"></i> William</li>
								<li><i class="icofont-clock-time"></i>12 Aug, 2021</li>
							</ul>
							<a href="single.html">
								<h5 class="blog-title">
									How to make website from
									scrach easily
								</h5>
							</a>
						</div>
					</div> <!-- end single blog -->
				</div>
			</div> <!-- end container -->
		</div> --}}
		<!-- End Blog -->

	    <div class="clearfix"></div>
@endsection
