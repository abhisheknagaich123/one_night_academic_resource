<?php
require('connection.php');
require('function.php');
if (isset($_GET['type']) && $_GET['type'] != '') {
    $type = get_safe_value($con, $_GET['type']);
    $id = get_safe_value($con, $_GET['id']);
    if ($type == 'info') {

        $id; // Check if the ID is being captured correctly


        $sql = "SELECT subject_info.*, categories.categories 
        FROM subject_info 
        JOIN categories ON subject_info.categories_id = categories.id 
        WHERE subject_info.categories_id = '$id' 
        ORDER BY subject_info.id DESC";
        $res = mysqli_query($con, $sql);



    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Stylee.css">
    <title>Hello, world!</title>
</head>

<body>
    <?php

    while ($row = mysqli_fetch_assoc($res)) { ?>
        <section class="dark">
            <div class="container py-4">
                <h1 class="h1 text-center" id="pageHeaderTitle">
                    <?php echo $row['categories'] ?>
                </h1>

                <article class="postcard dark blue">

                    <div class="postcard__text">
                        <h1 class="postcard__title blue"><a href="#">
                                <?php echo $row['heading'] ?>
                            </a></h1>
                        <div class="postcard__subtitle small">
                            <time datetime="2020-05-25 12:00:00">
                                <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                            </time>
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt">
                            <?php echo $row['description'] ?>
                        </div>
                        <ul class="postcard__tagbox">

                        <li class="tag__item">
    <?php echo "<span class='fas fa-tag mr-2 badge badge-danger'><a href='?type=delete&id=" . $row['id'] . "'>Delete</a></span>"; ?>
</li>
<li class="tag__item">
    <?php echo "<span class='fas fa-tag mr-2 badge badge-waring'><a href='?type=delete&id=" . $row['id'] . "'>Edit</a></span>"; ?>
</li>

                           
                        </ul>
                    </div>
                </article>

            </div>
        </section>

    <?php } ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>