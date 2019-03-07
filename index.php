<!doctype html>
<html lang="en">

<head>
    <?php include "header.php" ?>
    <style>
        span.cursor {
            margin-left: 2px !important;
            display: inline-block;
            width: 10px;
            height: 0.7em;
            background-color: yellow;
        }
    </style>
    <title>Decrypt 2.0</title>
</head>

<body>
    <?php include "navbar.php" ?>

	<!--================Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="home_left_img">
							<img class="img-fluid" src="img/banner/home-left.png" alt="">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="banner_content">
							<h2 data-aos="fade-in">
								Decrypt 2.0
							</h2>
							<h3 id="tw_source">
								|
							</h3>
							<div class="d-flex align-items-center">
								<a id="play-home-video" class="video-play-button" href="https://www.youtube.com/watch?v=vParh5wE-tM">
									<span></span>
								</a>
								<div class="watch_video text-uppercase">
									watch the video
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================First Upcoming Games Area =================-->
	<section class="upcoming_events_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<h1>Upcoming Events</h1>
					</div>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-lg-3 col-md-6 col-sm-6" data-aos="flip-left">
					<div class="new_events_item">
						<img src="img/events/exhibition.jpeg" alt="" class="rounded">
						<div class="upcoming_title">
							<h3><a href="games.html">Decrypt Exhibition</a></h3>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6" data-aos="flip-left">
					<div class="new_events_item">
						<img src="img/events/ideathon.jpeg" alt="" class="rounded">
						<div class="upcoming_title">
							<h3><a href="games.html">Ideathon</a></h3>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6" data-aos="flip-left">
					<div class="new_events_item">
						<img src="img/events/escape.png" alt="" class="rounded">
						<div class="upcoming_title">
							<h3><a href="games.html">Escape Room</a></h3>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6" data-aos="flip-left">
					<div class="new_events_item">
						<img src="img/events/game.jpg" alt="" class="rounded">
						<div class="upcoming_title">
							<h3><a href="games.html">Gaming Competition</a></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Upcoming Games Area =================-->

	<!--================Start Timeline ========================-->

<!--	<section class="timeline-section">-->
<!--		<div class="container">-->
<!--			<div class="timeline-wrapper">-->
<!--				<div class="timeline">-->
<!--					<dl class="timeline--entry">-->
<!--						<dt class="timeline--entry__title" data-aos="zoom-in">7th March 2019</dt>-->
<!--						<dd class="timeline--entry__detail" data-aos="zoom-in">Registration Opens for Ideathon</dd>-->
<!--					</dl>-->
<!--					<dl class="timeline--entry">-->
<!--						<dt class="timeline--entry__title" data-aos="zoom-in">7th March 2019</dt>-->
<!--						<dd class="timeline--entry__detail" data-aos="zoom-in"> Registration Opens for Ideathon</dd>-->
<!--					</dl>-->
<!--					<dl class="timeline--entry">-->
<!--						<dt class="timeline--entry__title" data-aos="zoom-in">7th March 2019</dt>-->
<!--						<dd class="timeline--entry__detail" data-aos="zoom-in">Registration Opens for Ideathon</dd>-->
<!--					</dl>-->
<!--					<dl class="timeline--entry">-->
<!--						<dt class="timeline--entry__title" data-aos="zoom-in">7th March 2019</dt>-->
<!--						<dd class="timeline--entry__detail" data-aos="zoom-in">Registration Opens for Ideathon</dd>-->
<!--					</dl>-->
<!--					<dl class="timeline--entry">-->
<!--						<dt class="timeline--entry__title" data-aos="zoom-in">7th March 2019</dt>-->
<!--						<dd class="timeline--entry__detail" data-aos="zoom-in">Registration Opens for Ideathon</dd>-->
<!--					</dl>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</section>-->
	<!--================End Timeline =================-->

	<!--================Start Recent Update Area =================-->
	<section class="recent_update_area py-4">
		<div class="container">
			<div class="recent_update_inner">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
							Ideathon
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
						 aria-selected="false">
							Escape Room
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
						 aria-selected="false">
							Gaming Competition
						</a>
					</li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                           aria-selected="false">
                            Workshop
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                           aria-selected="false">
                            Coding Competition
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                           aria-selected="false">
                            Exhibition
                        </a>
                    </li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
						<div class="row recent_update_text">
							<div class="col-lg-6">
								<div class="chart_img">
									<img class="img-fluid" src="img/recent_up.png" alt="">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="section_content">
									<h6>About Us</h6>
									<h1>We Believe that <br>Interior beauty Lasts Long</h1>
									<p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards
										especially in the workplace. That’s why it’s crucial that as women.</p>
									<a class="primary_btn" href="#">Learn More</a>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<div class="row recent_update_text">
							<div class="col-lg-6">
								<div class="chart_img">
									<img class="img-fluid" src="img/recent_up.png" alt="">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="section_content">
									<h6>About Us</h6>
									<h1>We Believe that <br>Interior beauty Lasts Long</h1>
									<p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards
										especially in the workplace. That’s why it’s crucial that as women.</p>
									<a class="primary_btn" href="#">Learn More</a>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade show active" id="contact" role="tabpanel" aria-labelledby="contact-tab">
						<div class="row recent_update_text">
							<div class="col-lg-6">
								<div class="chart_img">
									<img class="img-fluid" src="img/recent_up.png" alt="">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="section_content">
									<h6>About Us</h6>
									<h1>We Believe that <br>Interior beauty Lasts Long</h1>
									<p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards
										especially in the workplace. That’s why it’s crucial that as women.</p>
									<a class="primary_btn" href="#">Learn More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Recent Update Area =================-->


    <?php include "footer.php" ?>
    <?php include "scripts.php" ?>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/TypewriterJS/1.0.0/typewriter.min.js"></script>
	<script>
		var tw_source = document.getElementById('tw_source');

		var typewriter = new Typewriter(tw_source, {
			loop: true,
			cursor: "<span class='cursor'></span>"
		});

		typewriter
				.deleteAll()
				.typeString('Hello World!')
				.pauseFor(2500)
				.deleteAll()
				.typeString('It is time to DECRYPT')
				.pauseFor(2500)
				.start();
	</script>
</body>
</html>