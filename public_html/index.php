<!DOCTYPE html>
<html lang="en">
	<head>
		<!--Meta Tags -->
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous"/>
		<!-- Link to custom CSS Sheet -->
		<link rel="stylesheet" href="css/style.css" type="text/css"/>
		<!-- JQuery first, then Popper.js, then Bootstrap.js -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<!-- Javascript Form Validator -->
		<script src="js/form-validate.js"></script>
		<link rel="shortcut icon" type="image/png" href="images/penrose.png"/>
		<title>Caleb Heckendorn</title>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light navigator mb-3 mt-2 ml-2 mr-2">
			<a class="navbar-brand">Caleb Heckendorn</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav ml-auto">
					<a class="nav-item nav-link" href="#about">About Me</a>
					<a class="nav-item nav-link" href="#portfolio">Portfolio</a>
					<a class="nav-item nav-link" href="#contact">Contact Me</a>
					<a class="nav-item nav-link" href="https://www.linkedin.com/in/caleb-m-heckendorn-85518b164/">LinkedIn</a>
					<a class="nav-item nav-link" href="https://github.com/Caleb-M-Heckendorn">GitHub</a>
					<a class="nav-item nav-link" href="https://twitter.com/CalebHeckendorn">Twitter</a>
					<a class="nav-item nav-link" href="Caleb%20Heckendorn%20Resume.pdf">Resume</a>
				</div>
			</div>
		</nav>
		<!--		About me section-->
		<div class="container-fluid about pt-3" id="about">
			<h1 class="about-header">Caleb Heckendorn</h1>
			<div class="row">
				<div class="container-fluid col-md-6 col-sm-6 mw-50 me">
					<img class="me d-block mx-auto my-auto img-fluid rounded" src="images/me.jpg" alt="me">
					<p class="center mt-3 mb-3">Hello there. I'm Caleb, a professional full stack web developer. I discovered
						a passion for coding in the last year and recently graduated from CNM's Deep Dive Coding Boot Camp. I
						was born and raised in New Mexico and look forward to contributing to the tech industry by continuing
						to grow in my coding knowledge as well as using my creative abilities to provide clients with websites
						that meet their ever changing needs in the business world. Please feel free to check out the links and
						contact me anytime.</p>
					<p class="center">My key languages are: HTML | CSS | BootStrap | PHP | MySQL | JavaScript </p>
				</div>
			</div>
		</div>
		<!--		Portfolio section-->
		<div class="container-fluid portfolio pt-3" id="portfolio">
			<h1 class="portfolio-header">Portfolio</h1>
			<div class="row">
				<div class="container-fluid col-md-6 col-sm-6 mw-50 caro">
					<div id="my-slider" class="carousel slide mw-50" data-ride="carousel ">
						<!--Indicators (Dot nav) -->
						<ol class="carousel-indicators">
							<li data-target="#my-slider" data-slide-to="0" class="active btn btn-secondary"></li>
							<li data-target="#my-slider" data-slide-to="1" class="btn btn-secondary"></li>
							<li data-target="#my-slider" data-slide-to="2" class="btn btn-secondary"></li>
						</ol>
						<!--Wrapper for slides-->
						<div class="carousel-inner container-fluid">
							<!--Nerd Nook-->
							<div class="carousel-item active">
								<img class="d-block mx-auto my-auto img-fluid rounded caroimage" src="images/nerd-nook.jpg"
									  alt="soon"/>
								<div class="carousel-caption nerd-nook-text">
									<h4 class="carousel-text-color carocap">Nerd Nook</h4>
									<p class="carousel-text-color carocap">Nerd Nook is a WebApp that connects and trains fellow nerds.<br>Worked as part of a team on this.</p>
									<a class=" carocapZ" href="https://github.com/mpeseke/nerd-nook">GitHub</a>
								</div>
							</div>
							<!--Boot Strap-->
							<div class="carousel-item">
								<img class="d-block mx-auto my-auto img-fluid rounded caroimage" src="images/bootstrap-logo.png"
									  alt="soon"/>
								<div class="carousel-caption bootstrap-text">
									<h4 class="carousel-text-color carocap">Bootstrap Challenge</h4>
									<p class="carousel-text-color carocap">Basic web page to help me learn Bootstrap.</p>
									<a class="carocap" href="https://github.com/Caleb-M-Heckendorn/bootstrap-challenge">GitHub</a>
								</div>
							</div>
							<!--Prodev Site-->
							<div class="carousel-item">
								<img class="d-block mx-auto my-auto img-fluid rounded caroimage" src="images/hex3.jpg"
									  alt="soon"/>
								<div class="carousel-caption prodev-site-text">
									<h4 class="carousel-text-color carocap">Professional Development</h4>
									<p class="carousel-text-color carocap">Professional Development page. Used this page to learn more CSS.</p>
									<a class="carocap" href="https://github.com/Caleb-M-Heckendorn/professional-development-site">GitHub</a>
								</div>
							</div>
						</div>
						<!-- Controls  -->
						<a class="carousel-control-prev" href="#my-slider" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="false"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#my-slider" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!--		Contact form-->
		<section class="container-fluid contact pt-3 mw-50">
			<h1 class="contact-header">Contact Me</h1>
			<div class="mx-auto mw-50">
				<form class="form-horizontal well mw-50 form" action="php/mailer.php" method="post" id="contact">
					<div class="row justify-content-center pt-2">
						<div class="col-md-6 col-sm-8">
							<!--Name input-->
							<div class="form-group">
								<div class="input-group">
									<input type="text" class="form-control" id="name" name="name" placeholder="Name">
								</div>
							</div>
							<!--Email input-->
							<div class="form-group">
								<div class="input-group">
									<input type="email" class="form-control" id="email" name="email" placeholder="Email">
								</div>
							</div>
							<!--Subject  input-->
							<div class="form-group">
								<div class="input-group">
									<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
								</div>
							</div>
							<!--Message input-->
							<div class="form-group">
								<div class="input-group">
									<textarea class="form-control" name="message" id="message" rows="6"
												 placeholder="Message"></textarea>
								</div>
							</div>
						</div>
					</div>
					<!--reCaptcha-->
					<div class="row justify-content-center pb-3">
						<div class="g-recaptcha" data-sitekey="6LfXu20UAAAAAKHX1sDYBtWKMWEBnPSCK8mZDOdB"></div>
					</div>
					<!--Empty area for form error/success output-->
					<div class="row justify-content-center">
						<div class="col-sm-6">
							<div class="error">
								<div id="output-area"></div>
							</div>
						</div>
					</div>
					<!--Send and Reset buttons-->
					<div class="center pb-3">
						<button class="btn" type="submit" name="submit" id="submit" value="submit">Send</button>
						<button class="btn" type="reset">Reset</button>
					</div>
				</form>
			</div>
		</section>
		<!--Icon links-->
		<div class="container icon pb-3">
			<div class="row justify-content-center center">
					<span class="footer-link">
						<a href="https://www.linkedin.com/in/caleb-m-heckendorn-85518b164/">
							<i class="fab fa-linkedin"></i>
						</a>
					</span>
				<span class="footer-link">
						<a href="https://github.com/Caleb-M-Heckendorn">
							<i class="fab fa-github-square"></i>
						</a>
					</span>
				<span class="footer-link">
						<a href="https://twitter.com/CalebHeckendorn">
							<i class="fab fa-twitter-square"></i>
						</a>
					</span>
			</div>
		</div>
		<!--Footer-->
		<footer class="footer mt-10 mb-10 foot2">
			<div class="container text-center">
				<span>Caleb Heckendorn 2018</span>
			</div>
		</footer>
	</body>
</html>