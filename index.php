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
            background-color: green;
        }
    </style>
    <title>Decrypt 2.0</title>
</head>

<body>
<?php include "navbar.php" ?>

<div class="parallax">
    <div class="inner">

        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
            <div class="banner_inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="home_left_img">
                                <img class="img-fluid" src="img/logo/decrypt_lock.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 p-0">
                            <div class="banner_content">
                                <h2 data-aos="fade-in">
                                    Decrypt 2.0
                                </h2>
                                <h3 id="tw_source">
                                    |
                                </h3>
                                <div class="d-flex align-items-center">
                                    <a id="play-home-video" class="video-play-button"
                                       href="https://www.youtube.com/watch?v=vParh5wE-tM">
                                        <span></span>
                                    </a>
                                    <div class="watch_video text-uppercase">
                                        watch the intro video
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--================End Home Banner Area =================-->

        <section class="about_us_area section_gap">
            <div class="container">
                <div class="row about_content align-items-center">
                    <div class="col-lg-6" data-aos="fade-in">
                        <div class="section_content">
                            <h6>Decrypt 2.0</h6>
                            <h1>It's time to Decrypt!</h1>
                            <p>
                                Decrypt 2.0, the CSE Open Day and exhibition is here to dazzle your minds.<br/>
                                Join us to learn all about CSE and have fun!</p>
                            <a class="primary_btn text-white" id="decrypt_learnmore">Show Events</a>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                        <div class="about_us_image_box justify-content-center">
                            <img class="img-fluid w-100" src="img/events/decrypt.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--================Start Recent Update Area =================-->
        <section class="recent_update_area py-4" id="recent_update_area">
            <div class="container">
                <div class="recent_update_inner">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="ideathon-tab" data-toggle="tab" href="#ideathon" role="tab"
                               aria-controls="ideathon" aria-selected="true" data-aos="zoom-in">
                                Ideathon
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="escape-tab" data-toggle="tab" href="#escape" role="tab"
                               aria-controls="escape"
                               aria-selected="false" data-aos="zoom-in">
                                Escape Room
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="gaming-tab" data-toggle="tab" href="#gaming" role="tab"
                               aria-controls="gaming"
                               aria-selected="false" data-aos="zoom-in">
                                Gaming Competition
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="workshop-tab" data-toggle="tab" href="#workshop" role="tab"
                               aria-controls="workshop"
                               aria-selected="false" data-aos="zoom-in">
                                Workshop
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="coding-tab" data-toggle="tab" href="#coding" role="tab"
                               aria-controls="coding"
                               aria-selected="false" data-aos="zoom-in">
                                Coding Competition
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="exhibition-tab" data-toggle="tab" href="#exhibition" role="tab"
                               aria-controls="exhibition"
                               aria-selected="false" data-aos="zoom-in">
                                Decrypt Exhibition
                            </a>
                        </li>
                    </ul>
                    <div style="height: 50px;"></div>
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
                                        <p>Ideathon is for those creative minds full of innovative ideas. Get your team
                                            ready and register now for a journey of knowledge and excellence.</p>
                                        <a class="primary_btn" href="ideathon.html">Learn More</a>
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
                                        <p>Experience the art of problem solving on a whole new level with the CSE
                                            Escape Room.
                                            Register now for a unique experience of fun adventure.</p>
                                        <a class="primary_btn" href="escaperoom.html">Learn More</a>
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
                                        <h1>All work and <br/>no play makes you a dull boy.. </h1>
                                        <p>That's exactly why we have a gaming competition for you!<br/>
                                            Join us to show off your masterhood with
                                            Decrypt Gaming Competition.</p>
                                        <a class="primary_btn" href="gamingcompetition.html">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="workshop" role="tabpanel" aria-labelledby="workshop-tab">
                            <div class="row recent_update_text">
                                <div class="col-lg-6">
                                    <div class="chart_img">
                                        <img class="img-fluid" src="img/events/workshop.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="section_content">
                                        <h6>Workshop</h6>
                                        <h1>Scared of PA1 & PA2?</h1>
                                        <p>Don't worry, we got you! Learn how to tackle your coding problems with the Decrypt Workshop. </p>
                                        <a class="primary_btn" href="workshop.html">Learn More</a>
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
                                        <h1>Talk is cheap.. <br/>Show me the code!</h1>
                                        <p>Show off your coding expertise with Coding Competition! Register your team today itself.</p>
                                        <a class="primary_btn" href="codingcompetition.html">Learn More</a>
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
                                        <h1>Caution!<br/>Computer Engineers in their natural habitat.. </h1>
                                        <p>Get a sneak peek of the Department of CSE with the Decrypt Exhibition. Come, See, Enjoy!</p>
                                        <a class="primary_btn" href="exhibition.html">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--================End Recent Update Area =================-->

    </div>
</div>

<?php include "footer.php" ?>
<?php include "scripts.php" ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/TypewriterJS/1.0.0/typewriter.min.js"></script>
<script>
    let tw_source = document.getElementById('tw_source');

    let typewriter = new Typewriter(tw_source, {
        loop: true,
        cursor: "<span class='cursor'></span>"
    });

    function shuffle(a) {
        var j, x, i;
        for (i = a.length - 1; i > 0; i--) {
            j = Math.floor(Math.random() * (i + 1));
            x = a[i];
            a[i] = a[j];
            a[j] = x;
        }
        return a;
    }

    let messages = [
        "Get ready to decrypt!",
        "Be prepared to have your mind blown",
        "Sit back, relax and think",
        "We guarantee a fun packed day",
        "No day like today to learn something new",
        "Too many reasons to not, not come",
        "Inspired by purpose driven by passion",
        "Bring your creative dreams to life",
        "Its never too late to start building your brand",
        "Creativity is intelligence having fun"
    ];

    shuffle(messages);

    typewriter = typewriter.deleteAll();

    for (let i = 0; i < messages.length; i++) {
        typewriter = typewriter.typeString(messages[i]).pauseFor(1500).deleteAll();
    }

    typewriter.start();

    $(document).ready(function () {
        $('.parallax').parallax({
            imageSrc: 'img/decrypt.jpeg'
        });
    });

    $("#decrypt_learnmore").click(function () {
        let offset = $("#recent_update_area").offset();
        offset.top -= 75;
        $('html, body').animate({
            scrollTop: offset.top
        });

    })

</script>
</body>
</html>