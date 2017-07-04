<!DOCTYPE html>
<html lang="en">
	<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<meta name="author" content="RubyGnomes">
			<meta name="title" content="RubyGnomes || We develop your dreams"/>
			<meta name="description" content="We take care of developing your ideas in the fastest and most organized way. If you have a technological idea and do not know how to carry it forward, then we are the ones!" />
			<meta name="keywords" content="Ruby on Rails,Software Development,Infrastructure Management,Mobile application development,Social Networks Development,Mainframe Migration,UI/UX,Drupal Development,Angular js,React js"/>
			<meta name="robots" content="index,follow,all"/>
			<meta name="Distribution" content="Global"/>
			<link rel="icon" href="assets/img/favicon.png">

			<title>Ruby Gnomes - Products</title>

			<link rel="stylesheet" href="assets/css/bootstrap.min.css">
			<link rel="stylesheet" href="assets/css/bootstrap-theme.css">
			<link rel="stylesheet" href="assets/css/font-awesome.min.css">
			<link rel="stylesheet" href="assets/css/bootstrap-editable.css">
			<link rel="stylesheet" href="assets/css/style.css">
	</head>

	<body>

		<?php include 'modules/header.php'; ?>


		<section class="hero-half">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="half-hero-content">
							<div class="v-content-alignment">
								<h1 class="white text-center">
									<span>our</span> products
								</h1>
								<p class="white text-center">
									Besides working with our clients, we take the time to develop products of our own. These are some of them.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="products-page">
		 	<div class="product-bg">
				<div class="container">
					<div class="row product-container">
						<div class="col-md-5 col-sm-6 text-right">
							<h2 class="x2">Carmelo</h2>
							<p class="x2">
								Carmelo.club is the definive tool where you organize your trips, with friends, or with people who share your thesame passions. With this application you can choose a destination, the routes and the way to travel, you will receive advice from people who have made the same trip and you will enjoy discounts and exclusive offers for your adventure.
                But there is still more, because with Carmelo you will not only know new places with new people, you will also be able to share your knowledge about the places you already know and be rewarded for it. Write local guides, upload photos, share your opinion or give good tips on your favorite places.
							</p>
							<img src="assets/img/projects/project-large-1.png" alt="" class="bg-cover img-responsive visible-xs">
						</div>
						<div class="col-md-6 col-md-offset-1 col-sm-6 hidden-xs">
							<img src="assets/img/projects/project-large-1.png" alt="" class="bg-cover img-responsive">
						</div>
					</div>
				</div>
			</div>
			<div class="product-bg grey">
				<div class="container">
					<div class="row product-container">
						<div class="col-xs-12 col-md-6 col-sm-6 hidden-xs">
							<img src="assets/img/projects/project-large-2.png" alt="" class="bg-cover img-responsive">
						</div>
						<div class="col-xs-12 col-md-5 col-md-offset-1 col-sm-6">
							<h2 class="x2">Nosologic</h2>
							<p class="x2">
                Nosologic is a management system focused on professionals, private and public health. With the objective of facilitating the management of clinical history, this idea is born which also provides an excellent system of management of shifts, inventory and clinical histories, besides serving as a point of review and input of data to a neural network that will learn from the diagnostics In order to assist doctors and professionals in the diagnosis of diseases. Based on a supervised data model and giving the user full control of its history, we can diagnose all kinds of conditions from the mobile phone before they become a danger to the individual or his environment.
							</p>
							<img src="assets/img/projects/project-large-2.png" alt="" class="bg-cover img-responsive visible-xs">
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php include 'modules/footer.php'; ?>
	



		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800|Oswald:200,300,400,500,600,700" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="dist/js/bootstrap.min.js"></script>


		
		<script>
		
			$(window).on("scroll", function() {
				if($(window).scrollTop() > 50) {
					$(".toggle-header").addClass("active");
					} else {
					$(".toggle-header").removeClass("active");
				}
			});

			$('#mobile-menu-button').click(function() {
			 	$('.mobile-nav').toggleClass('expanded')
			 	$('body').toggleClass('no-scroll-y')
			 	$(".toggle-header").toggleClass('menu-open');

			});

			(function() {

			  var toggles = document.querySelectorAll(".c-hamburger");

			  for (var i = toggles.length - 1; i >= 0; i--) {
			    var toggle = toggles[i];
			    toggleHandler(toggle);
			  };

			  function toggleHandler(toggle) {
			    toggle.addEventListener( "click", function(e) {
			      e.preventDefault();
			      (this.classList.contains("is-active") === true) ? this.classList.remove("is-active") : this.classList.add("is-active");
			    });
			  }

			})();
		</script>



	</body>
</html>
