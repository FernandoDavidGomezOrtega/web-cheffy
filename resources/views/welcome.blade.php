<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Cheffy</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700,700i|Open+Sans:400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/estilos.css">

	<link rel="shortout icon" type="image/png" href="favicon.png">
</head>
<body>
	<div class="contenido-header">
		<div class="fondo" id="fondo">
			<h1 class="texto">Cheffy</h1>
		</div>
	</div>

	<nav class="menu" id="menu">
        <a href="#about_us">{{ __('lang.about_us') }}</a>
		<a href="#services">{{ __('lang.services') }}</a>
		<a href="#contact_form">{{ __('lang.contact') }}</a>
        <a href="#where_are_we">{{ __('lang.where_are_we') }}</a>
        <a class="nav-link" href="locale/en"  style="padding: 10px"><img src="{{ asset('img/icons/uk_flag.png') }}" alt="" class="px-0"></a>
        <a class="nav-link" href="locale/es" style="padding: 10px"><img src="{{ asset('img/icons/spain_flag.png') }}" alt=""></a>
        <div class="collapse navbar-collapse mr-0" id="navbarSupportedContent">
            <div class="form-inline my-2 my-lg-0 ml-auto ">
                <ul class="navbar-nav mr-0">
                    <li class="nav-item">
                        <a class="nav-link" href="locale/en"><img src="{{ asset('img/icons/uk_flag.png') }}" alt=""></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="locale/es"><img src="{{ asset('img/icons/spain_flag.png') }}" alt=""></a>
                    </li>
                </ul>
            </div>
        </div>
	</nav>

	<main class="container">
        <span class="anchor" id="about_us"></span>
        <div class="row nosotros justify-content-center">
            <div class="col-12 text-center">
                <h2 class="subtitulo"><span>{{ __('lang.who_are_we') }}</span></h2>
                <h3 class="titulo">{{ __('lang.our_passion') }}</h3>
                <p>{{ __('lang.text_1') }}</p>
                <a href="{{ route('catalog') }}" class="enlace">{{ __('lang.discover') }}</a>
            </div>
        </div>

        <span class="anchor" id="services"></span>
		<div class="row productos">
			<article class="col-12 text-center">
				<h2 class="subtitulo"><span>{{ __('lang.we_provide') }}</span></h2>
				<p class="titulo">{{ __('lang.our_products') }}</p>
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit veniam saepe cum aspernatur neque odit? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae deserunt perferendis. Lorem ipsum dolor sit amet consectetur.</p>
			</article>

			<div class="col-12">
				<div class="row justify-content-center">
					<article class="col-6 col-lg-3 py-1">
						<figure class="producto">
							<img src="img/products/pr-1.jpg" class="img-fluid" alt="">
							<figcaption class="overlay">
								<p class="overlay-texto">Nombre del producto</p>
							</figcaption>
						</figure>
					</article>

					<article class="col-6 col-lg-3 py-1">
						<figure class="producto">
							<img src="img/products/pr-2.jpg" class="img-fluid" alt="">
							<figcaption class="overlay">
								<p class="overlay-texto">Nombre del producto</p>
							</figcaption>
						</figure>
					</article>

					<article class="col-6 col-lg-3 py-1">
						<figure class="producto">
							<img src="img/products/pr-3.jpg" class="img-fluid" alt="">
							<figcaption class="overlay">
								<p class="overlay-texto">Nombre del producto</p>
							</figcaption>
						</figure>
					</article>

					<article class="col-6 col-lg-3 py-1">
						<figure class="producto">
							<img src="img/products/pr-4.jpg" class="img-fluid" alt="">
							<figcaption class="overlay">
								<p class="overlay-texto">Nombre del producto</p>
							</figcaption>
						</figure>
					</article>
                    <a class="d-block btn-productos" href="{{ route('catalog') }}" class="enlace">{{ __('lang.all_products') }}</a>
				</div>
			</div>
		</div>
	</main>

	<div class="separador text-center text-white">
		<p><q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, eligendi</q></p>
	</div>

	<div class="container">
		<div class="row acerca-de justify-content-around">
			<article class="col-10 col-sm-5">
				<figure class="text-center">
					<img src="img/icons/icon-team.png" alt="">
					<figcaption>
						<p>
							<strong class="mb-2">{{ __('lang.experts') }}</strong>
							<div class="w-100"></div>
							{{ __('lang.team_made_up') }}
						</p>
					</figcaption>
				</figure>
			</article>

			<article class="col-10 col-sm-5">
				<figure class="text-center">
					<img src="img/icons/icon-services.png" alt="">
					<figcaption>
						<p>
							<strong class="mb-2">{{ __('lang.commitment') }}</strong>
							<div class="w-100"></div>
							Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem totam dolorem error.
						</p>
					</figcaption>
				</figure>
			</article>
		</div>
	</div>

	<div class="container-fluid px-0 galeria">
		<div class="row justify-content-center mx-0 px-0">
			<div class="col-4 px-0 mx-0">
				<img src="img/display/dp-cocina.jpg" alt="">
			</div>
			<div class="col-4 px-0 mx-0">
				<img src="img/display/dp-sala.jpg" alt="">
			</div>
			<div class="col-4 px-0 mx-0">
				<img src="img/display/dp-cheers.jpg" alt="">
			</div>
		</div>
	</div>

	<div class="container-fluid" id="">

        <span class="anchor" id="contact_form"></span>
        <section class="contacto row justify-content-center">
            <div class="col-12 col-md-9 text-center">
                    <h2 class="subtitulo"><span>{{ __('lang.contact_form') }}</span></h2>
            </div>
            <div class="col-sm-9 col-12 col-md-4 text-center">
							<form action="" method="get">
							  <div class="form-group">
							    <label for="name">Nombre</label>
							    <input type="text" class="form-control" id="name" aria-describedby="your name" placeholder="">
							  </div>
								<div class="form-group">
							    <label for="surname">Apellido</label>
							    <input type="text" class="form-control" id="surname" aria-describedby="your surname" placeholder="">
							  </div>
							  <div class="form-group">
							    <label for="email">Email</label>
							    <input type="email" class="form-control" id="email" placeholder="">
									<small id="emailHelp" class="form-text text-muted">Nunca compartiremos tu mail con nadie más</small>
							  </div>
								<div class="form-group">
								 <label for="text">Tu mensaje</label>
								 <textarea name="text" id="text" class="form-control" rows="5" cols="80"></textarea>
							 </div>
							  <button type="submit" class="submit-form">Enviar</button>
							</form>

            </div>
        </section>

        <span class="anchor" id="where_are_we"></span>
		<section class="contacto row justify-content-center">
			<div class="col-12 col-md-9 text-center">
				<h2 class="subtitulo"><span>{{ __('lang.where_are_we') }}</span></h2>
			</div>
			<iframe class="col-12 col-md-9" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d476.7119334860765!2d-4.896319086452246!3d36.50772444651502!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7328004cc908d7%3A0x3da5567adbd7a362!2sLos%20Mellizos%20Marbella!5e0!3m2!1ses!2ses!4v1575458614385!5m2!1ses!2ses" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

			<div class="w-100 mb-4"></div>
			<div class="w-100 mb-4"></div>
			<div>
				<p class="border-bottom border-top">
					<img src="img/icons/icon-location-64.png" alt="">Paseo Marítimo, 8, 29602 Marbella, Málaga
				</p>
			</div>
			<div class="w-100 mb-4"></div>
			<div>
				<p class="border-bottom border-top">
					<img src="img/icons/mobile-phone-8-64.png" alt="">+34 653 891 672
				</p>
            </div>
			<div class="w-100 mb-4"></div>
            <div>
                <p class="border-bottom border-top">
                    <img src="img/icons/inbox-8-64.png" alt="">&nbsp; info@cheffy.com
                </p>
            </div>
		</section>

		<footer class="row justify-content-center redes-sociales">
			<div class="col-auto">
				<a href="https://sites.google.com/fp.uoc.edu/grupo-tourify/presentaci%C3%B3n-del-proyecto" target="_blank"><img src="img/icons/google-plus-3-96.png" alt=""></a>
				<a href="https://www.youtube.com/watch?v=-Fyn83okjg8&feature=youtu.be" target="_blank"><img src="img/icons/youtube-3-96.png" alt=""></a>
				<a href="https://github.com/FernandoDavidGomezOrtega/web-cheffy" target="_blank"><img src="img/icons/github-8-96.png" alt=""></a>
			</div>
		</footer>
	</div>


	<script src="js/main.js"></script>
</body>
</html>
