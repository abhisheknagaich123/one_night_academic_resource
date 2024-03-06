<?php
require('connection.php');

$sql = "select * from categories where status=1 order by categories asc";
$res = mysqli_query($con, $sql);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>ONAR</title>
    <link rel="icon" type="image/x-icon" href="admin/favicon_io/favicon-16x16.png">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">



    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        /* Set a fixed width and height for all images */
        #midsize {


            object-fit: contain;
            object-position: center;

            background: #34495e;
            border: 1px solid #34495e;
            width: 200px;
            height: 200px;

        }

        body {
            background-color: #FFEBEE
        }

        .card {
            width: 700px;
            border: none;
            border-radius: 14px !important
        }

        .area1 {
            background-color: ;
            border-top-left-radius: 14px !important;
            border-top-right-radius: 14px !important;
            padding-top: 83px !important
        }

        .image {
            top: -62px;
            position: relative
        }

        .image img {
            box-shadow: 5px 6px 6px 2px #e9ecef
        }

        .area2 {
            background-color: ;
            border-bottom-left-radius: 14px !important;
            border-bottom-right-radius: 14px !important
        }

        .name {
            font-size: 25px;
            font-weight: 650
        }

        .information {
            color: ;
            font-weight: 500;
            font-size: 18px
        }

        .list-icons {
            display: inline-flex;
            color: #C5CAE9
        }

        .list-icons li {
            list-style: none;
            padding: 12px;
            border-radius: 10px;
            width: 49px;
            margin-right: 10px
        }

        .list-icons li i {
            font-size: 17px;
            color: #fff
        }

        @media (max-width:700px) {
            .list-icons {
                display: block
            }
        }

        .facebook {
            background: #3b5998
        }

        .instagram {
            background: #3f729b
        }

        .youtube {
            background: #ff0000
        }

        .whatsapp {
            background: #4dc247
        }

        .pinterest {
            background: #cb2027
        }
    </style>
</head>

<body>
    <!-- Topbar Start -->


    <!-- Navbar Start -->
    <?php
    require('navbar.php');

    ?>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <?php
    require('Carousel.php');

    ?>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="img/about.jpg" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="text-left mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">About Us</h5>
                        <h1>Innovative Way To Learn</h1>
                    </div>
                    <p>
                        Our innovative website strives to support students facing last-minute exam preparations by
                        providing a dynamic and efficient learning platform. Tailored to cater to the urgency of
                        studying on the night before exams, our website employs a user-friendly interface and a curated
                        repository of essential questions. This approach ensures that students can engage in focused and
                        effective learning, optimizing their study sessions for improved exam performance</p>
                    <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Category Start -->
    <?php
    require('Subject_Category.php');

    ?>
    <!-- Category Start -->





    <!-- Registration Start -->

    <!-- Registration End -->


    <!-- Team Start -->
    <?php
    require('Founder.php');

    ?>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <?php
    require('Testimonial.php');

    ?>
    <!-- Testimonial End -->




    <!-- Footer Start -->
    <?php
    require('footer.php');

    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>