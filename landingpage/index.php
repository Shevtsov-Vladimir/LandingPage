<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>App Name - Landing page</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script defer src="js/fontawesome-all.min.js"></script>

	<style>
		#section-hero {
			background-image: url("img/3840x2160.png");
			background-size: cover;
			background-position: center;
			background-attachment: fixed;
			min-height: 100vh;
		}
	</style>
</head>

<body class="container">
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<div class="container">
			<a class="navbar-brand fw-bold" href="#">
				<i class="fas fa-camera-retro"></i>
				Bootstrap
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#section-hero">To the top</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="#description">Description</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="#trailer">Trailer</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="#showCase">Show case</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="#features">Features</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="#pricing">Pricing</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="#reviews">Reviews</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<section class="container-fluid d-flex flex-column align-items-center justify-content-center text-white"
		id="section-hero">
		<h1 class="display-1 text-primary">APP NAME</h1>
		<h2 class="display-6">Lorem, ipsum dolor.</h2>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
		<p>laborum unde dolores uliam nostrum?</p>
		<p class="fw-bold">Download now on:</p>
		<div class="d-flex gap-3">
			<button class="btn btn-primary" type="button">
				<i class="fab fa-brands fa-app-store-ios"></i>
				App Store
			</button>
			<button class="btn btn-primary" type="button">
				<i class="fab fa-brands fa-google-play"></i>
				Google Play
			</button>
		</div>
	</section>

	<section class="container" id="description">
		<h2 class="display-5 text-center mt-5">What is App Name?</h2>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis facere, enim maxime minus praesentium
			earum? Illo ipsam ex consequatur libero provident aspernatur ad, obcaecati iusto, consequuntur asperiores
			doloribus fuga voluptatum.</p>
		<p>Deserunt perspiciatis praesentium dolorum nam ipsum quam accusantium laborum, molestiae ipsa pariatur.
			Molestiae officia eaque inventore ullam veniam omnis expedita, quisquam reiciendis nobis laborum saepe nam
			animi accusantium culpa provident.</p>
	</section>

	<section class="container text-center" id="trailer">
		<h2 class="display-5 mt-5">App Name Trailer</h2>
		<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
		<div class="ratio ratio-16x9">
			<iframe src="https://www.youtube.com/embed/NpEaa2P7qZI"></iframe>
		</div>
	</section>

	<section class="container text-center" id="showCase">
		<h2 class="display-5 mt-5">App Name in action</h2>
		<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
		<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
					aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
					aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
					aria-label="Slide 3"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
					aria-label="Slide 4"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="img/2220x1665-warning.png" class="d-block w-100" alt="warning">
					<div class="carousel-caption d-none d-md-block">
						<h5>Slide Heading</h5>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="img/2220x1665-success.png" class="d-block w-100" alt="warning">
					<div class="carousel-caption d-none d-md-block">
						<h5>Second slide label</h5>
						<p>Some representative placeholder content for the second slide.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="img/2220x1665-danger.png" class="d-block w-100" alt="warning">
					<div class="carousel-caption d-none d-md-block">
						<h5>Third slide label</h5>
						<p>Some representative placeholder content for the third slide.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="img/2220x1665-primary.png" class="d-block w-100" alt="warning">
					<div class="carousel-caption d-none d-md-block">
						<h5>Fouth slide label</h5>
						<p>Some representative placeholder content for the third slide.</p>
					</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
				data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
				data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</section>

	<section class="container text-center" id="features">
		<h2 class="display-5 mt-5">Features</h2>
		<div class="row gy-4">
			<div class="col-lg-3 col-md-6 col-sm-12">
				<i class="fas fa-paint-brush fa-2x mb-5 text-info"></i>
				<h5>Future heading</h5>
				<p>Some quick example text to build on the card title and make up the
					bulk of the
					card's content.</p>
				<a href="#" class="btn btn-info">Read more...</a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12">
				<i class="fas fa-video fa-2x mb-5 text-info"></i>
				<h5>Future heading</h5>
				<p>Some quick example text to build on the card title and make up the
					bulk of the
					card's content.</p>
				<a href="#" class="btn btn-info">Read more...</a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12">
				<i class="fab fa-instagram fa-2x mb-5 text-info"></i>
				<h5>Future heading</h5>
				<p>Some quick example text to build on the card title and make up the
					bulk of the
					card's content.</p>
				<a href="#" class="btn btn-info">Read more...</a>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-3">
				<i class="fas fa-mobile fa-2x mb-5 text-info"></i>
				<h5>Future heading</h5>
				<p>Some quick example text to build on the card title and make up the
					bulk of the
					card's content.</p>
				<a href="#" class="btn btn-info">Read more...</a>
			</div>
		</div>
	</section>
	<section class="container" id="pricing">
		<h2 class="display-5 mt-5 text-center">Choose your plan</h2>

		<div class="row gy-3">
			<div class="col-md-4 col-sm-12">
				<div class="card">
					<div class="card-body text-center bg-success">
						<h5 class="card-title text-light">Starter</h5>
						<h6 class="card-text text-light">Free</h6>
					</div>
					<div class="card-body">
						<p class="m-0">Lorem ipsum dolor sit amet.</p>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">
							<i class="fas fa-paint-brush"></i>
							item description
						</li>
						<li class="list-group-item">
							<i class="fab fa-instagram"></i>
							item description
						</li>
					</ul>
					<div class="card-body bg-light text-center">
						<button type="button" class="btn btn-success">Select plan</button>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-12">
				<div class="card">
					<div class="card-body text-center bg-warning">
						<h5 class="card-title text-light">Semi-pro</h5>
						<h6 class="card-text text-light">&dollar;1.99 / month</h6>
					</div>
					<div class="card-body">
						<p class="m-0">Lorem ipsum dolor sit amet.</p>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">
							<i class="fas fa-paint-brush"></i>
							item description
						</li>
						<li class="list-group-item">
							<i class="fab fa-instagram"></i>
							item description
						</li>
						<li class="list-group-item">
							<i class="fas fa-cogs"></i>
							item description
						</li>
					</ul>
					<div class="card-body bg-light text-center">
						<button type="button" class="btn btn-warning">Select plan</button>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-12">
				<div class="card">
					<div class="card-body text-center bg-danger">
						<h5 class="card-title text-light">Pro</h5>
						<h6 class="card-text text-light">&dollar;4.99 / month</h6>
					</div>
					<div class="card-body">
						<p class="m-0">Lorem ipsum dolor sit amet.</p>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">
							<i class="fas fa-paint-brush"></i>
							item description
						</li>
						<li class="list-group-item">
							<i class="fab fa-instagram"></i>
							item description
						</li>
						<li class="list-group-item">
							<i class="fas fa-cogs"></i>
							item description
						</li>
						<li class="list-group-item">
							<i class="fas fa-cloud"></i>
							item description
						</li>
					</ul>
					<div class="card-body bg-light text-center">
						<button type="button" class="btn btn-danger">Select plan</button>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="container" id="reviews">
		<h2 class="display-5 mt-5 text-center">Reviews</h2>

		<div class="row gy-4">
			<?php
            try {
	            // подключаемся к серверу
            	$conn = new PDO("mysql:host=localhost;dbname=landingpage;charset=utf8", "root", "");

	            $review_text = $conn->query("SELECT text_review FROM reviews");
	            $user_name = $conn->query('SELECT name_surname FROM users');


	            foreach ($review_text as $row) {
		            echo ('<div class="col-sm-12 col-md-6 col-lg-3">');
		            echo ('<i class="fas fa-quote-left text-secondary"></i>');

		            echo ('<p>' . $row["text_review"] . '</p>');

		            echo ('<p class="text-muted	">' . '&mdash; ' . $user_name->fetch()["name_surname"] . '</p>');

		            echo ('<i class="fas fa-quote-right text-secondary"></i>');
		            echo ('</div>');
	            }

            } catch (PDOException $e) {
	            echo "Connection failed: " . $e->getMessage();
            }
            ?>
		</div>
	</section>
	<script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>