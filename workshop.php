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
                        <h1>DECRYPT WORKSHOP</h1>
                    </div>
                </div>
            </div>

            <div class="container text-center" data-aos="fade-in">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <p>
                            The workshop is a session mainly intended to give an insight into how a problem, whether
                            real-life or programming, could be tackled using life-hacking techniques that would lead to
                            a
                            better and faster solution. It will also focus on introducing the participants to the
                            amazing
                            life inside CSE.
                        </p>
                        <br/>
                        <h3><strong>Who can participate?</strong></h3>

                        <p>
                            All interested students from ‘18 batch of University of Moratuwa are
                            warmly
                            welcome to participate in the workshop.
                        </p>
                        <br/>
                        <h3><strong>Why should you participate?</strong></h3>

                        <p>
                            You would never know when you would be confronted with a problem! So it’s always better to
                            be
                            prepared with the correct set of techniques to approach the solution. And that is exactly
                            where
                            your code should begin! The workshop will guide you into writing a successful code easier
                            and
                            faster.
                        </p>
                        <br/>
                        <h3><strong>What do you get by participating?</strong></h3>

                        <p>
                            Programming may become a challenge not because you cannot code, but because you cannot
                            organize
                            your thoughts to formulate a proper solution. Coding is all about following the right track,
                            and
                            this is where the techniques and tips introduced at the workshop might come in handy for
                            you!
                        </p>
                        <br/>
                        <br/>
                        <h1 class="text-warning"><strong>STAY TUNED FOR MORE INFO</strong></h1>
                    </div>

                    <div class="col-md-2"></div>
                </div>
            </div>
        </section>
    </div>
</div>
<!--===========winners awards=============-->

<!--================Contact info============-->
<!-- <div class="contacts_parallax">
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
                                    <img src="http://s1.1zoom.me/b5346/617/Sherlock_Holmes_Men_Benedict_Cumberbatch_518637_640x960.jpg" alt="Team Image"/>
                                </div>
                                <div class="profile-content">
                                    <h2 class="title">Henry Polles
                                        <span>078 9966789</span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 hvr-shrink">
                            <div class="profile-card">
                                <div class="profile-img">
                                    <img src="http://s1.1zoom.me/b5346/617/Sherlock_Holmes_Men_Benedict_Cumberbatch_518637_640x960.jpg" alt="Team Image"/>
                                </div>
                                <div class="profile-content">
                                    <h2 class="title">Henry Polles
                                        <span>078 9966789</span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 hvr-shrink">
                            <div class="profile-card">
                                <div class="profile-img">
                                    <img src="http://s1.1zoom.me/b5346/617/Sherlock_Holmes_Men_Benedict_Cumberbatch_518637_640x960.jpg" alt="Team Image"/>
                                </div>
                                <div class="profile-content">
                                    <h2 class="title">Henry Polles
                                        <span>078 9966789</span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div> -->

<section class="bg_decrypt section_gap">
    <div class="container-fluid">
        <div class="d-flex align-items-center mb-5 pb-5">
            <div class="container">
                <div class="text-center text-white">
                    <h2>Workshop - 2018</h2>
                </div>
            </div>
        </div>
        <div class="text-center">
            <div id="lightgallery">
                <a href="img/workshop/img_1.jpg">
                    <img src="img/workshop/img_1.jpg" class="hvr-shrink" alt="Gallery"/>
                </a>
                <a href="img/workshop/img_2.jpg">
                    <img src="img/workshop/img_2.jpg" class="hvr-shrink" alt="Gallery"/>
                </a>
                <a href="img/workshop/img_3.jpg">
                    <img src="img/workshop/img_3.jpg" class="hvr-shrink" alt="Gallery"/>
                </a>
                <a href="img/workshop/img_4.jpg">
                    <img src="img/workshop/img_4.jpg" class="hvr-shrink" alt="Gallery"/>
                </a>
                <a href="img/workshop/img_5.jpg">
                    <img src="img/workshop/img_5.jpg" class="hvr-shrink" alt="Gallery"/>
                </a>
                <a href="img/workshop/img_6.jpg">
                    <img src="img/workshop/img_6.jpg" class="hvr-shrink" alt="Gallery"/>
                </a>
                <a href="img/workshop/img_7.jpg">
                    <img src="img/workshop/img_7.jpg" class="hvr-shrink" alt="Gallery"/>
                </a>
                <a href="img/workshop/img_8.jpg">
                    <img src="img/workshop/img_8.jpg" class="hvr-shrink" alt="Gallery"/>
                </a>
            </div>
        </div>
    </div>
</section>
<!--================End Timeline =================-->

<?php include 'footer.php' ?>
<?php include 'scripts.php' ?>

<script>
    // Gallery Activation
    gallery = document.getElementById('lightgallery');
    lightGallery(gallery, {
        mode: 'lg-fade',
        cssEasing: 'cubic-bezier(0.25, 0, 0.25, 1)'
    });

    gallery.addEventListener('onAfterOpen', function () {
        $(".navbar").hide();
    });
    gallery.addEventListener('onBeforeClose', function () {
        $(".navbar").show();
    });


    // Parallax
    $(document).ready(function () {
        $('.ideathon_parallax').parallax({
            imageSrc: 'img/workshop/workshopbackground.jpg'
        });

        $('.contacts_parallax').parallax({
            imageSrc: background
        });
    });
</script>
</body>
</html>
