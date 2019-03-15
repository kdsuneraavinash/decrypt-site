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
                        <h1>DECRYPT EXHIBITION</h1>
                    </div>
                </div>
            </div>

            <div class="container text-center" data-aos="fade-in">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <h3><strong>Decrypt Exhibition organized by CSE</strong></h3>
                    </div>

                    <div class="col-md-2"></div>
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
            imageSrc: 'img/exhibition/exhibitionbackground.jpg'
        });
    });
</script>
</body>
</html>

