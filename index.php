<?php
require('connection.php');

$sql = "select * from categories where status=1 order by categories asc";
$res = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>one_night_academic_resource</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon
    <link href="img/favicon.ico" rel="icon"> -->

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



    <!-- Category Start -->
    <?php
    require('Subject_Category.php');

    ?>
    <!-- Category Start -->





    <!-- Registration Start -->
    <?php
    require('Regpage.php');

    ?>
    <!-- Registration End -->


    <!-- Team Start -->
    <?php
    require('Team.php');

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