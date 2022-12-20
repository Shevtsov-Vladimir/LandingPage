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

<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<div class="container">
			<a class="navbar-brand fw-bold" id="#section-hero">
				<i class="fas fa-camera-retro"></i>
				App insta
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="section-hero">To the top</a>
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
		<h2 class="display-6">Lorem ipsum dolor sit amet</h2>
		<p>Lorem ipsum dolor sit amet</p>
		<p>Lorem ipsum dolor sit amet</p>
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
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
			industry's
			standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
			make a
			type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
			remaining essentially unchanged.</p>
		<p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
			recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
	</section>

	<section id="section-trailer" class="mt-5" id="trailer">
		<h2 class="diaplay-5 text-center fw-normal">App Name trailer</h2>
		<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
		<div class="container ratio ratio-16x9">
			<iframe src="https://www.youtube.com/embed/NpEaa2P7qZI"></iframe>
		</div>
	</section>
	<section class="container text-center" id="slider">
		<h2 class="display-5 mt-5">Trap app in the gap</h2>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
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
					<img src="img/2220x1665-danger.png" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>First slide label</h5>
						<p>Some representative placeholder content for the first slide.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="img/2220x1665-primary.png" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>Second slide label</h5>
						<p>Some representative placeholder content for the second slide.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="img/2220x1665-success.png" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>Third slide label</h5>
						<p>Some representative placeholder content for the third slide.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="img/2220x1665-warning.png" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>Fourth slide label</h5>
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
	<div class="continer d-flex flex-column align-items-center justify-content-center">
		<h1 class="mt-2">Features</h1>
		<div class="row d-flex align-items-start justify-content-center">
			<div class="py-3 col-12 col-md-6 col-lg-3 d-flex flex-column align-items-start d-flex flex-column align-items-center justify-content-center "
				style="width: 18rem;">
				<svg class="mb-2 text-info" xmlns="http://www.w3.org/2000/svg" width="50" height="50"
					fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
					<path
						d="M15.825.12a.5.5 0 0 1 .132.584c-1.53 3.43-4.743 8.17-7.095 10.64a6.067 6.067 0 0 1-2.373 1.534c-.018.227-.06.538-.16.868-.201.659-.667 1.479-1.708 1.74a8.118 8.118 0 0 1-3.078.132 3.659 3.659 0 0 1-.562-.135 1.382 1.382 0 0 1-.466-.247.714.714 0 0 1-.204-.288.622.622 0 0 1 .004-.443c.095-.245.316-.38.461-.452.394-.197.625-.453.867-.826.095-.144.184-.297.287-.472l.117-.198c.151-.255.326-.54.546-.848.528-.739 1.201-.925 1.746-.896.126.007.243.025.348.048.062-.172.142-.38.238-.608.261-.619.658-1.419 1.187-2.069 2.176-2.67 6.18-6.206 9.117-8.104a.5.5 0 0 1 .596.04z" />
				</svg>
				<div class="d-flex flex-column align-items-center justify-content-center">
					<h5 class="card-title text-center mb-4">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the
						card's
						content.</p>
					<a href="#" class="btn  bg-info">Go somewhere</a>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 d-flex flex-column align-items-center d-flex flex-column align-items-center justify-content-center m-3 "
				style="width: 18rem;">
				<svg class=" text-info mb-2" xmlns="http://www.w3.org/2000/svg" width="50" height="50"
					fill="currentColor" class="bi bi-browser-safari" viewBox="0 0 16 16">
					<path fill-rule="evenodd"
						d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5z" />
				</svg>
				<div class="d-flex flex-column align-items-center justify-content-center">
					<h5 class="card-title text-center mb-4">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the
						card's
						content.</p>
					<a href="#" class="btn  bg-info">Go somewhere</a>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 d-flex flex-column align-items-center d-flex flex-column align-items-center justify-content-center m-3 "
				style="width: 18rem;">
				<svg class="text-info mb-2" xmlns="http://www.w3.org/2000/svg" width="50" height="50"
					fill="currentColor" class="bi bi-apple" viewBox="0 0 16 16">
					<path
						d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
				</svg>
				<div class="d-flex flex-column align-items-center justify-content-center">
					<h5 class="card-title text-center mb-4">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the
						card's
						content.</p>
					<a href="#" class="btn  bg-info">Go somewhere</a>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 d-flex flex-column align-items-center d-flex flex-column align-items-center justify-content-center m-3 "
				style="width: 18rem;">
				<svg class="text-info" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
					class="bi bi-android" viewBox="0 0 16 16">
					<path
						d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0z" />
				</svg>
				</svg>
				<div class="d-flex flex-column align-items-center justify-content-center">
					<h5 class="card-title text-center mb-4">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the
						card's
						content.</p>
					<a href="#" class="btn  bg-info">Go somewhere</a>
				</div>
			</div>
		</div>
	</div>

	<section>
		<h1 class="mt-4 text-center">Choose your plan</h1>
		<div class="d-flex flex-wrap align-items-start justify-content-center">
			<div class="px-4 d-flex justify-content-center align-items-start">
				<div class="card" style="width: 18rem;">
					<div class="card-body bg-success">
						<h5 class="card-title text-center text-white">Starter</h5>
						<p class="card-text text-center text-white">Free</p>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">An item</li>
						<li class="list-group-item">A second item</li>
					</ul>
					<div class="d-flex flex-column align-items-center justify-content-center bg-light">
						<a href="#" class="btn bg-success text-white m-3">Go somewhere</a>
					</div>
				</div>
			</div>

			<div class=" d-flex align-items-center justify-content-center">
				<div class="card" style="width: 18rem;">
					<div class="card-body bg-warning">
						<h5 class="card-title text-center text-white">Semi-pro</h5>
						<p class="card-text text-center text-white">$1.99 / month</p>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">An item</li>
						<li class="list-group-item">A second item</li>
						<li class="list-group-item">A third item</li>
					</ul>
					<div class="d-flex flex-column align-items-center justify-content-center bg-light">
						<a href="#" class="btn bg-warning text-white m-3">Go somewhere</a>
					</div>
				</div>
			</div>

			<div class="px-4 d-flex align-items-center justify-content-center">
				<div class="card" style="width: 18rem;">
					<div class="card-body bg-danger">
						<h5 class="card-title text-center text-white">Semi-pro</h5>
						<p class="card-text text-center text-white">$4.99 / month</p>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">An item</li>
						<li class="list-group-item">A second item</li>
						<li class="list-group-item">A third item</li>
					</ul>
					<div class="d-flex flex-column align-items-center justify-content-center bg-light">
						<a href="#" class="btn bg-danger text-white m-3">Go somewhere</a>
					</div>
				</div>
			</div>
		</div>

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

		<!-- <section class="container text-muted" id="reviews">
			<h2 class="display-5 text-black text-center mt-5">Reviews</h2>
			<div class="row">
				<div class="col-12 col-md-6 col-lg-3 d-flex flex-column align-items-center mt-3">
					<figure>
						<blockquote class="blockquote">
							<p><i class="fas fa-quote-left"></i> Lorem Ipsum is simply dummy text of the printing and
								typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
								the
								1500s, when an unknown printer took a galley of type and scrambled it to make a type
								specimen book. <i class="fas fa-quote-right"></i></p>
						</blockquote>
						<figcaption class="blockquote-footer">
							Someone famous in <cite title="Source Title">Source Title</cite>
						</figcaption>
					</figure>
				</div>

				<div class="col-12 col-md-6 col-lg-3 d-flex flex-column align-items-center mt-3">
					<figure>
						<blockquote class="blockquote">
							<p><i class="fas fa-quote-left"></i> Lorem Ipsum is simply dummy text of the printing and
								typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
								the
								1500s, when an unknown printer took a galley of type and scrambled it to make a type
								specimen book. <i class="fas fa-quote-right"></i></p>
						</blockquote>
						<figcaption class="blockquote-footer">
							Someone famous in <cite title="Source Title">Source Title</cite>
						</figcaption>
					</figure>
				</div>

				<div class="col-12 col-md-6 col-lg-3 d-flex flex-column align-items-center mt-3">
					<figure>
						<blockquote class="blockquote">
							<p><i class="fas fa-quote-left"></i> Lorem Ipsum is simply dummy text of the printing and
								typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
								the
								1500s, when an unknown printer took a galley of type and scrambled it to make a type
								specimen book. <i class="fas fa-quote-right"></i></p>
						</blockquote>
						<figcaption class="blockquote-footer">
							Someone famous in <cite title="Source Title">Source Title</cite>
						</figcaption>
					</figure>
				</div>

				<div class="col-12 col-md-6 col-lg-3 d-flex flex-column align-items-center mt-3">
					<figure>
						<blockquote class="blockquote">
							<p><i class="fas fa-quote-left"></i> Lorem Ipsum is simply dummy text of the printing and
								typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
								the
								1500s, when an unknown printer took a galley of type and scrambled it to make a type
								specimen book. <i class="fas fa-quote-right"></i></p>
						</blockquote>
						<figcaption class="blockquote-footer">
							Someone famous in <cite title="Source Title">Source Title</cite>
						</figcaption>
					</figure>
				</div>

			</div>
		</section> -->

		<section class="bg-secondary text-white" id="section_newsletter">
			<div class="container">
				<h2 class="display-5 text-center pt-5">Сhoose your plan</h2>
				<p class=" text-center">Lorem Ipsum is simply dummy text of the printing.</p>
				<div class="row">
					<div class="col-12 col-md-6">
						<div class="mb-3">
							<div class="form-check">
								<input type="text" class="form-control" id="exampleFormControlInput1"
									placeholder="Firstname Lastname" name="names">
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="mb-3">
								<input type="email" class="form-control" id="exampleFormControlInput1"
									placeholder="mail@example.com" name="emails">
							</div>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-12">

							<form action="register.php" method="POST">
								<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
								<label class="form-check-label text-light" for="flexCheckDefault">
									I have read and accept the <a href="#" class="stretched-link">terms and
										conditions</a>.
								</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col col-md-6">
						<p class="text-light">You can unsubcribe from the mailing list at any time.</p>
					</div>
					<div class="col col-md-6 d-flex justify-content-end mb-5">
						<button type="submit" class="btn btn-dark">Sign up</button>
						</form>
					</div>
				</div>
			</div>
		</section>

		<footer class="container my-5">
			<div class="row">
				<div class="col-12 col-md-6 col-lg-3 d-flex flex-column">
					<h6 class="fw-bold">Quick links</h6>
					<a href="#">Home</a>
					<a href="#">What's new?</a>
					<a href="#">Support</a>
					<a href="#">My account</a>
					<a href="#">Cancel subscription</a>
				</div>
				<div class="col-12 col-md-6 col-lg-3 d-flex flex-column">
					<h6 class="fw-bold">Information</h6>
					<a href="#">About us</a>
					<a href="#">Jobs</a>
					<a href="#">Press info</a>
					<a href="#">Contact</a>
					<a href="#">Partnership</a>
				</div>
				<div class="col-12 col-md-6 col-lg-3 d-flex flex-column">
					<h6 class="fw-bold">Follow us</h6>
					<a href="#">
						<i class="fab fa-facebook"></i>
						Facebook
					</a>
					<a href="#">
						<i class="fab fa-instagram"></i>
						Instagram
					</a>
					<a href="#">
						<i class="fab fa-twitter"></i>
						Twitter
					</a>
					<a href="#">
						<i class="fab fa-youtube"></i>
						YouTube
					</a>
					<a href="#">
						<i class="fab fa-linkedin"></i>
						LinkedIn
					</a>
				</div>
				<div class="col-12 col-md-6 col-lg-3 d-flex flex-column">
					<h6 class="fw-bold">Our location</h6>
					<h6 class="fw-bold">App Name</h6>
					<p>350 5th Avenue<br>New Your, NY 10118
						<br><i class="fas fa-phone"></i><a href="#"> (212) 736-3100</a>
						<br><i class="fa fa-box"></i><a href="#"> info@appname.com</a>
						<br><button type="button" class="m-2 btn text-white bg-secondary">Change languge</button>
					</p>
				</div>
			</div>
			<div class="row d-block text-muted">
				<div class="col-12">
					&copy; App Name, Inc. All rights reserved. <a href="#">Terms of use and privacy policy.</a>
				</div>
			</div>
		</footer>


		<?php

    $host = "localhost";
    $db = "appName";
    $user = "root";
    $pass = '';
    $charset = 'utf8';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $pdo = new PDO($dsn, $user, $pass);
    $res = $pdo->query("SELECT 4 FROM reviews");
    $data = $res->fetchAll();

    try {
	    $conn = new PDO("mysql:host=localhost;dbname=", "root", "");

    } catch (PDOException $e) {
	    echo "Database error: " . $e->getMessage();
    }

    ?>






		<script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>