<?php
require('connection.php');



if (isset($_GET['type']) && $_GET['type'] != '') {
    $type = get_safe_value($con, $_GET['type']);


        if ($type == 'infodata') {
            $id = get_safe_value($con, $_GET['id']);

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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ONAR</title>
      <link rel="icon" type="image/x-icon" href="admin/favicon_io/favicon-16x16.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        #scrollable-content {
            max-height: 450px;
            /* Set your preferred max height */
            overflow-y: auto;
            border: 2px solid #ccc;
            margin-top: 10px;
        }

        #scrollable-content12 {
            max-height: 500px;
            /* Set your preferred max height */
            overflow-y: auto;
            border: 1px solid #ccc;
            margin-top: 10px;
            margin-bottom: 10px;
        }
    </style>
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <div class="container-fluid">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="d-flex align-items-center justify-content-between bg-secondary w-100 text-decoration-none"
                    data-toggle="collapse" href="#navbar-vertical" style="height: 50px; ">
                    <!-- <h5 class="text-primary m-0"><i class="fa fa-book-open mr-2"></i>Subjects</h5> -->
                    <!-- <i class="fa fa-angle-down text-primary"></i> -->
                    <p class="text-primary m-0"> One Night Academic Resource</p>
                    <img src="admin/favicon_io/favicon.ico">

                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light"
                    id="navbar-vertical" style="width: calc(100% - 30px); z-index: 9;">
                    <div class="navbar-nav w-100">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown"> <i
                                    class="fa fa-angle-down float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">

                            </div>
                        </div>

                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav py-0">

                            <!--                         <a href="index.php" class="nav-item nav-link">Home</a>
 -->
                        </div>
                        <a class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block" href="index.php"
                            target=_blank>Home</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-3" id="scrollable-content">
            <nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-end">
                <nav class="nav nav-pills flex-column">
                    <ol>
                        <?php
                        // Fetch data and store it in an array
                        $data = array();
                        while ($row = mysqli_fetch_assoc($res)) {
                            $data[] = $row;
                            echo '<li><a class="nav-link" href="#' . $row['id'] . '">' . $row['heading'] . '</a></li>';
                        }
                        ?>
                    </ol>


                </nav>
            </nav>
        </div>

        <div class="col-8" id="scrollable-content12">
            <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true"
                class="scrollspy-example-2" tabindex="0">

                <?php
                foreach ($data as $row) { ?>
                    <div id="<?php echo $row['id'] ?>">
                        
                        <h4>
                            <?php echo $row['heading'] ?>
                        </h4>
                        <p>
                            <?php echo $row['description'] ?>
                        </p>
                    </div>
                <?php } ?>




            </div>
        </div>
    </div>

    <footer style="background-color: #deded5;">

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2024 Copyright:
            <a class="text-dark" href="#">ONAR.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>