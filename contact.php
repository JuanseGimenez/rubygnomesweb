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

			<title>Ruby Gnomes - Contact</title>

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
					<div class="col-md-8 col-md-offset-2">
						<div class="half-hero-content">
							<div class="v-content-alignment">						
								<h1 class="white text-center">
									Contact us
								</h1>
								<p class="white text-center">
									Tell us how we can help you!
								</p>		
							</div>				
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="contact-form">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<h1>get in touch</h1>
							<p class="x2">
								You are very close to take one of the best decisions of your life, get in touch with us, and soon one of our gnomes will get in touch with you.
							</p>
							<form action="sendmail.php" method="post" id="contact-form">
								<div class="row">
									<div class="field-content x2 col-md-6">
										<label for="name">Name</label>
										<input type="text" id="name" name="name" placeholder="Full Name">
									</div>
									<div class="field-content x2 col-md-6">
										<label for="email">email</label>
										<input type="text" id="email" name="email" placeholder="example@mail.com">
									</div>
									<div class="field-content x2 col-md-12">
										<label for="message">message</label>
										<textarea type="text" id="message" name="message" placeholder="Enter your message" rows="5"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<button id="contact-form" type="submit" class="button">Submit</button>
									</div>
								</div>
							</form>
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
