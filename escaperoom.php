<!doctype html>
<html lang="en">

<head>
    <?php include 'header.php' ?>
    <title>Decrypt 2.0</title>
</head>

<body>
<?php include 'navbar.php' ?>


<div class="ideathon_parallax">
    <div class="inner">

        <section class="about_us_area section_gap text-white">
            <div class="d-flex align-items-center my-5 py-5">
                <div class="container">
                    <div class="text-center">
                        <h1>ESCAPE ROOM</h1>
                    </div>
                </div>
            </div>

            <div class="container text-center" data-aos="fade-in">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">

                        <h3><strong>Escape room is…</strong></h3>
                        <p>
                            Escape room is a strategic game in which the players solve a set of puzzles using clues,
                            hints
                            and strategies to accomplish an assigned task. Players compete in pre-determined groups of
                            six.
                            A single team from each E-group will be accepted. Players are expected to unveil all the
                            secrets
                            and complete the mission within a set time limit. VThe earliest team to succeed shall win.
                        </p>
                        <br/>
                        <h3><strong>Who are the lucky ones?</strong></h3>
                        <p>
                            Escape room is open for all students from the ’18 batch who have an undying passion for
                            puzzles
                            and riddles, build up a team with five other people just as enthusiastic as you are from
                            your
                            own E-group and come to witness this one of a kind adventure organized just for you!
                        </p>
                        <br/>

                        <h3><strong>Why bother to participate?</strong></h3>
                        <p>
                            It’s not every day you get a chance to participate in a game so incredibly planned! When was
                            the
                            last time anyone entered an escape room for free? Allow yourself the privilege of
                            encountering
                            new dimensions in mystery solving.
                        </p>
                        <br/>
                        <h3><strong>What will you learn?</strong></h3>
                        <p>
                            Where else would you get to learn the ways of solving puzzles and approaching strategies
                            you’d
                            get to learn here. Let your brain be teased for a while with all the complex algorithms. It
                            wouldn’t hurt to give a try!
                        </p>
                    </div>

                    <div class="col-md-2"></div>
                </div>
            </div>
        </section>
    </div>
</div>
<!--===========winners awards=============-->
<!-- <section class="bg_decrypt section_gap">
    <div class="container">
        <div class="d-flex align-items-center mb-5 pb-5">
            <div class="container">
                <div class="text-center text-white">
                    <h2>Prizes</h2>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4 p-5 bg_prize hvr-grow-rotate">
                <img src="img/winner.png" alt="First Place"/>
                <div class="centered">First<br/> Rs 10,000</div>
            </div>
            <div class="col-md-4 p-5 bg_prize hvr-grow-rotate">
                <img src="img/winner.png" alt="Second Place"/>
                <div class="centered">Second<br/> Rs 8,000</div>
            </div>
            <div class="col-md-4 p-5 bg_prize hvr-grow-rotate">
                <img src="img/winner.png" alt="Third Place"/>
                <div class="centered">Third<br/> Rs 5,000</div>
            </div>
        </div>
        <div class="escaperoom_facts">
            <p>FYI: Certain Items are Hidden Inside<br/>
                Finders <span class="fa fa-arrow-right"></span> <strong>Keepers</strong></p>
        </div>
    </div>
</section> -->

<!-- <section class="bg_decrypt section_gap">
    <div class="container">
        <div class="d-flex align-items-center mb-5 pb-5" data-aos="fade-up">
            <div class="container">
                <div class="text-center text-white">
                    <h2>Registration</h2>
                </div>
            </div>
        </div>
        <div class="additional_links text-center">
            <div class="mt-5" data-aos="fade-up">
                <a href="assets/placeholder.pdf" target="_blank" class="p-4">
                    &nbsp;&nbsp;&nbsp;&nbsp;Download Ruleset&nbsp;&nbsp;&nbsp;&nbsp;
                </a>
            </div>
            <div class="mt-5" data-aos="fade-up">
                <a href="assets/placeholder.pdf" target="_blank" class="p-4">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Register Now&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </a>
            </div>
            <p data-aos="fade-up">Registration closes on <strong>25th of March</strong></p>
        </div>
    </div>
</section> -->

<!--================Contact info============-->
<div class="contacts_parallax">
    <div class="inner">
        <section class="about_us_area section_gap text-white">
            <div class="d-flex align-items-center my-2 py-2">
                <div class="container">

                    <div class="d-flex align-items-center mb-5 pb-5">
                        <div class="container">
                            <div class="text-center text-white">
                                <h2>Contact Us</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row text-center d-flex justify-content-center">
                        <div class="col-sm-6 col-md-4 hvr-shrink">
                            <div class="profile-card">
                                <div class="profile-img">
                                    <img src="img/team/sasindu.jpeg"
                                         alt="Team Image" class="rounded-circle"/>
                                </div>
                                <div class="profile-content">
                                    <h2 class="title">Sasindu Dilshara
                                        <span>076 881 1875</span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!--================End Timeline =================-->

<?php include 'footer.php' ?>
<?php include 'scripts.php' ?>

<script>

    // Parallax
    $(document).ready(function () {
        $('.ideathon_parallax').parallax({
            imageSrc: 'img/escaperoom/escaperoombackground.png'
        });

        $('.contacts_parallax').parallax({
            imageSrc: background
        });
    });
</script>
</body>
</html>
