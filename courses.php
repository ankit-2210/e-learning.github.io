<!-- Start Including header -->
<?php
    include("./dbConnection.php");
    include("./mainInclude/header.php");
?>
<!-- End Including header -->


<!-- Start Course Page Banner -->
<div class="container-fluid bg-dark">
    <div class="row">
        <img src="./image/coursebanner.jpg" alt="courses"
            style="height: 700px; width: 100%; object-fit: cover; box-shadow: 10px;">
    </div>
</div>
<!-- End Course Page Banner -->




<!-- Start All Course -->
<div class="container mt-5">
    <h1 class="text-center">All Course</h1>

    <div class="row mt-4">
        <?php
            $sql = "SELECT * FROM course";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $course_id = $row['course_id'];
        ?>
        <div class="col-sm-4 mb-4">
            <a href="coursedetails.php?course_id=<?php echo $course_id ?>" class="btn"
                style="text-align: left; padding: 0px; margin: 0px;">
                <div class="card">
                    <img src="<?php echo str_replace('..', '.', $row['course_img']) ?>" class="card-img-top"
                        alt="Guitar">
                    <div class="card-body">
                        <h5 class="card-title"> <?php echo $row['course_name'] ?> </h5>
                        <p class="card-text"> <?php echo $row['course_desc'] ?> </p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">Price: <small><del>&#8377
                                    <?php echo $row['course_original_price'] ?>
                                </del></small><span class="font-weight-bolder">&#8377
                                <?php echo $row['course_price'] ?></span>
                        </p><a class="btn btn-primary text-white font-weight-bolder float-right"
                            href="coursedetails.php?course_id=<?php echo $course_id ?>">Enroll</a>
                    </div>
                </div>
            </a>
        </div>
        <?php
                }
            }
        ?>

    </div>


</div>
<!-- End All Course -->


<!-- Start Including footer -->
<?php
    include("./mainInclude/footer.php");
?>
<!-- End Including footer -->