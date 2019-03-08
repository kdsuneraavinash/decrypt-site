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

	<!--================Start Recent Update Area =================-->
	<section class="recent_update_area py-4">
		<div class="container">
			<div class="recent_update_inner">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="ideathon-tab" data-toggle="tab" href="#ideathon" role="tab" aria-controls="ideathon" aria-selected="true">
							Ideathon
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="escape-tab" data-toggle="tab" href="#escape" role="tab" aria-controls="escape"
						 aria-selected="false">
							Escape Room
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="gaming-tab" data-toggle="tab" href="#gaming" role="tab" aria-controls="gaming"
						 aria-selected="false">
							Gaming Competition
						</a>
					</li>
                    <li class="nav-item">
                        <a class="nav-link" id="workshop-tab" data-toggle="tab" href="#workshop" role="tab" aria-controls="workshop"
                           aria-selected="false">
                            Workshop
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="coding-tab" data-toggle="tab" href="#coding" role="tab" aria-controls="coding"
                           aria-selected="false">
                            Coding Competition
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="exhibition-tab" data-toggle="tab" href="#exhibition" role="tab" aria-controls="exhibition"
                           aria-selected="false">
                            Decrypt Exhibition
                        </a>
                    </li>
				</ul>
				<div class="tab-content" id="myTabContent">

					<div class="tab-pane fade show active" id="ideathon" role="tabpanel" aria-labelledby="ideathon-tab">
						<div class="row recent_update_text">
							<div class="col-lg-6">
								<div class="chart_img">
									<img class="img-fluid" src="img/events/ideathon.jpg" alt="">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="section_content">
									<h6>Ideathon</h6>
									<h1>Every problem is<br/> an opportunity for a creative mind.</h1>
									<p>Ideathon is for those creative minds full of innovative ideas. Get your team ready and register now for a journey of knowledge and excellence.</p>
									<a class="primary_btn" href="#">Learn More</a>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="escape" role="tabpanel" aria-labelledby="escape-tab">
						<div class="row recent_update_text">
							<div class="col-lg-6">
								<div class="chart_img">
									<img class="img-fluid" src="img/events/escape.jpg" alt="">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="section_content">
									<h6>Escape Room</h6>
									<h1>We all need a little escape from reality once in a while.</h1>
									<p>Experience the art of problem solving on a whole new level with the CSE Escape Room.
                                    Register now for a unique experience of fun adventure.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="gaming" role="tabpanel" aria-labelledby="gaming-tab">
						<div class="row recent_update_text">
							<div class="col-lg-6">
								<div class="chart_img">
									<img class="img-fluid" src="img/events/game.jpg" alt="">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="section_content">
									<h6>Gaming Competition</h6>
									<h1>All work and <br/>no play makes you dull...</h1>
									<p>That's exactly why we have a gaming competition for you!<br/>
                                        Join us to show off your masterhood with
                                        Decrypt Gaming Competition.</p>
								</div>
							</div>
						</div>
					</div>
                    <div class="tab-pane fade" id="workshop" role="tabpanel" aria-labelledby="workshop-tab">
                        <div class="row recent_update_text">
                            <div class="col-lg-6">
                                <div class="chart_img">
                                    <img class="img-fluid" src="img/events/workshop.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="section_content">
                                    <h6>Workshop</h6>
                                    <h1>We Believe that <br>Interior beauty Lasts Long</h1>
                                    <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards
                                        especially in the workplace. That’s why it’s crucial that as women.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="coding" role="tabpanel" aria-labelledby="coding-tab">
                        <div class="row recent_update_text">
                            <div class="col-lg-6">
                                <div class="chart_img">
                                    <img class="img-fluid" src="img/events/coding.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="section_content">
                                    <h6>Coding Competition</h6>
                                    <h1>We Believe that <br>Interior beauty Lasts Long</h1>
                                    <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards
                                        especially in the workplace. That’s why it’s crucial that as women.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="exhibition" role="tabpanel" aria-labelledby="exhibition-tab">
                        <div class="row recent_update_text">
                            <div class="col-lg-6">
                                <div class="chart_img">
                                    <img class="img-fluid" src="img/events/exhibition.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="section_content">
                                    <h6>Decrypt Exhibition</h6>
                                    <h1>We Believe that <br>Interior beauty Lasts Long</h1>
                                    <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards
                                        especially in the workplace. That’s why it’s crucial that as women.</p>
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
		let tw_source = document.getElementById('tw_source');

        let typewriter = new Typewriter(tw_source, {
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