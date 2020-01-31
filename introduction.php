<?php
include "includes/head.php";
?>

<body id="home" data-spy="scroll" data-target="#main-nav">
    <?php
    include "includes/nav.php";
    ?>

    <!-- SHOWCASE -->
    <section style="background:transparent url('img/back.jpg') no-repeat center center /cover" id="" class="py-5 primary-overlay">
        <div class="primary-overlay text-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6" id="score">

                        <h2 class="mt-5 py-1"><i class="fas fa-question-circle"></i>
                            What is IELTS?
                        </h2>
                        <p class="lead"> IELTS stand for The International English Language Testing System.It is an English language proficiency test for higher education and global migration</p>

                        <h2 class="mt-5 py-1"><i class="fas fa-user-tie"></i>
                            Who should do it?
                        </h2>
                        <p class="lead"> If you plane to migrate or doing higher study in</p>
                        <ul class="lead">
                            <li>Australia</li>
                            <li>Canada</li>
                            <li>New Zealand</li>
                            <li>UK ,Then you should do it.</li>
                        </ul>
                        <h2 class="mt-5 py-1"><i class="far fa-star"></i>
                            How it score?
                        </h2>
                        <p class="lead"> It uses nine-band scale to clear identify level of proficiency </p>
                        <ul class="lead">
                            <li>Band-score 1 non-user</li>
                            <li>Band-score 9 expert</li>
                        </ul>

                    </div>
                    <div class="col-lg-6">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NEWSLETTER -->
    <section id="newsletter" class="bg-dark text-white py-5">
        <?php include "includes/newsletter.php"; ?>
    </section>

    <!-- TEST FORMAT -->
    <section id="test_format" class="py-5">
        <?php include "includes/test_format.php"; ?>
    </section>

    <!-- ABOUT / WHY SECTION -->
    <section id="about" class="py-5 text-center bg-light">
        <?php include "includes/about.php"; ?>
    </section>

    <!-- AUTHORS -->
    <section id="authors" class="my-5 text-center">
        <?php include "includes/authors.php"; ?>
    </section>

    <!-- CONTACT -->
    <section id="contact" class="bg-light py-5">
        <?php include "includes/contact.php"; ?>
    </section>

    <!-- FOOTER -->
    <?php include "includes/footer.php"; ?>
</body>

</html>