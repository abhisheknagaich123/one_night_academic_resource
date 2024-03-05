<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Subjects</h5>
            <h1>Explore Top Subjects</h1>
        </div>
        <div class="row">
            <?php

            while ($row = mysqli_fetch_assoc($res)) { ?>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img id="midsize" class="object-fit-contain border rounded" class="img-fluid"
                            src="admin/images/<?php echo $row['subject_image'] ?>" alt="">
                        <a class="cat-overlay text-white text-decoration-none"
                            href="subjectdata.php?type=infodata&id=<?php echo $row['id']; ?>" target="_blank">
                            <h4 class="text-white font-weight-medium">
                                <?php echo $row['categories']; ?>
                            </h4>
                            <span>100 Courses</span>
                        </a>

                    </div>
                </div>

            <?php } ?>
        </div>
    </div>
</div>