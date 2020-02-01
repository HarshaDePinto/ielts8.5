<?php
include "includes/head.php";
?>

<body id="home" data-spy="scroll" data-target="#main-nav">
    <?php
    include "includes/nav.php";
    ?>

    <!-- SHOWCASE -->
    <section id="showcase" class="py-5">
        <div class="primary-overlay text-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-center" id="score">

                        <h1 class="display-2 mt-5 pt-5">
                            IELTS For Immigration...
                        </h1>
                        <p class="lead">What is IELTS? Who should do it? How it score?</p>
                        <a href="introduction.php" class="btn button1 btn-lg text-white">
                            <i class="fas fa-arrow-right"></i> Read More
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <!-- <img src="img/book.png" alt="" class="img-fluid d-none d-lg-block"> -->
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