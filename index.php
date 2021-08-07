<!-- Start Including header -->
<?php
    include("./dbConnection.php");
    include("./mainInclude/header.php");
?>
<!-- End Including header -->


<!-- Start Video Background -->
<div class="container-fluid remove-vid-marg">
    <div class="vid-parent">
        <!-- <video playsinline autoplay muted loop> -->
        <video>
            <source src="video/banvid.mp4">
        </video>
        <div class="vid-overplay"></div>
    </div>
    <div class="vid-content">
        <h1 class="my-content">Welcome to iSchool</h1>
        <small class="my-content">Learn and Implement</small> <br>

        <?php
            if(isset($_SESSION['is_login']) == false){
                echo ' <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#stuRegModalCenter"
                style="margin-top: 13px;">Get Started</a>';
            }
            else{
                echo '<a href="Student/studentProfile.php" class="btn btn-primary" style="margin-top: 13px;">My Profile</a>';
            }
        ?>


    </div>
</div>
<!-- End Video Background -->

<!-- Start Text Banner -->
<div class="container-fluid bg-danger txt-banner">
    <div class="row bottom-banner">
        <div class="col-sm">
            <h5><i class="fas fa-book-open mr-3"></i> 100+ Online Courses</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fas fa-users mr-3"></i> Expert Instructors</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fas fa-keyboard mr-3"></i> Lifetime Access</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fas fa-rupee-sign mr-3"></i> Money Back Guarantee*</h5>
        </div>
    </div>
</div>
<!-- End Text Banner -->




<!-- Start Most Popular Course -->
<div class="container mt-5">
    <h1 class="text-center">Popular Course</h1>

    <!-- Start Most Popular Course 1st Card Deck -->
    <div class="card-deck mt-4">
        <?php
            $sql = "SELECT * FROM course LIMIT 3";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $course_id = $row['course_id'];
        ?>

        <a href="coursedetails.php?course_id=<?php echo $course_id ?>" class="btn"
            style="text-align: left; padding: 0px; margin: 0px;">
            <div class="card">
                <img src="<?php echo str_replace('..', '.', $row['course_img']) ?>" class="card-img-top" alt="Guitar">
                <div class="card-body">
                    <h5 class="card-title"> <?php echo $row['course_name'] ?> </h5>
                    <p class="card-text"> <?php echo $row['course_desc'] ?> </p>
                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">Price: <small><del>&#8377 <?php echo $row['course_original_price'] ?>
                            </del></small><span class="font-weight-bolder">&#8377 <?php echo $row['course_price'] ?>
                        </span>
                    </p><a class="btn btn-primary text-white font-weight-bolder float-right"
                        href="coursedetails.php?course_id=<?php echo $course_id ?>">Enroll</a>
                </div>
            </div>
        </a>
        <?php
                }
            }
        ?>
    </div>
    <!-- End Most Popular Course 1st Card Deck -->

    <!-- Start Most Popular Course 2nd Card Deck -->
    <div class="card-deck mt-4">
        <?php
            $sql = "SELECT * FROM course LIMIT 3, 3";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $course_id = $row['course_id'];
        ?>

        <a href="coursedetails.php?course_id=<?php echo $course_id ?>" class="btn"
            style="text-align: left; padding: 0px; margin: 0px;">
            <div class="card">
                <img src="<?php echo str_replace('..', '.', $row['course_img']) ?>" class="card-img-top" alt="Guitar">
                <div class="card-body">
                    <h5 class="card-title"> <?php echo $row['course_name'] ?> </h5>
                    <p class="card-text"> <?php echo $row['course_desc'] ?> </p>
                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">Price: <small><del>&#8377 <?php echo $row['course_original_price'] ?>
                            </del></small><span class="font-weight-bolder">&#8377 <?php echo $row['course_price'] ?>
                        </span>
                    </p><a class="btn btn-primary text-white font-weight-bolder float-right"
                        href="coursedetails.php?course_id=<?php echo $course_id ?>">Enroll</a>
                </div>
            </div>
        </a>
        <?php
                }
            }
        ?>
    </div>
    <!-- End Most Popular Course 2nd Card Deck -->

    <div class="text-center m-2">
        <a class="btn btn-danger btn-sm" href="#">View All Course</a>
    </div>

</div>

<!-- End Most Popular Course -->




<!-- Start Contact us-->
<?php
        include("./contact.php");
   ?>
<!-- End Contact Us -->



<div class="container-fluid mt-5" style="background-color: #4B7289" id="Feedback">
    <h1 class="text-center testyheading p-4" style="margin-top: 20px;"> Student's Feedback</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="testimonial-carousel section-padding owl-carousel"
                style="padding: 10px 0 60px; margin: 5% auto 0;">

                <?php
                    $sql = "SELECT s.stu_name, s.stu_occ, s.stu_img, f.f_content FROM student AS s JOIN feedback AS f ON s.stu_id = f.stu_id";
                    $result = $conn->query($sql);
                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            $s_img = $row['stu_img'];
                            $n_img = str_replace('..', '.', $s_img);
                ?>

                <div class="testimonial"
                    style="background: #fff; text-align: center; padding: 10%; border-radius: 100px 0 100px 0 ;">
                    <div class="pic"
                        style="width: 100px; height: 100px; display: block; border-radius: 50%; overflow: hidden; margin: 0 auto;">
                        <img src="<?php echo $n_img ?>" alt="" style="width: 100%;">
                    </div>
                    <div class=" testimonial-prof">
                        <h4> <?php echo $row['stu_name'] ?> </h4>
                        <small> <?php echo $row['stu_occ'] ?> </small>
                    </div>
                    <p class=" description">
                        <?php echo $row['f_content']; ?>
                    </p>
                </div>

                <?php
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</div>

<!-- <div class="container-fluid mt-5" style="background-color: #4B7289; height: 500px" id="Feedback">
    <div class="wrapper" style="  width: 1570px; margin: 0 auto;">
        <div class="testimonial-carousel section-padding owl-carousel" style="padding: 60px 0;" margin: 5% auto 0;>
            <div class="single-testi"
                style="background: #fff; text-align: center; padding: 10%; border-radius: 100px 0 100px 0 ;">
                <div class="img-area"
                    style="width: 100px; height: 100px; display: block; border-radius: 50%; overflow: hidden; margin: 0 auto;">
                    <img src="image/stu/user-2.png" style="width: 100%;">
                </div>
                <div class="img-text">
                    <h2 style="text-transform: uppercase;  ">Sonam</h2>
                    <h3>Web Developer</h3>

                    <hr>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                </div>
            </div>

        </div>
    </div>
</div> -->








<div class='container-fluid bg-danger'>
    <div class="row text-white text-center p-1">
        <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-facebook"></i> Facebook </a>
        </div>
        <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-twitter"></i> Twitter </a>
        </div>
        <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-whatsapp"></i> WhatsApp </a>
        </div>
        <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-instagram"></i> Instagram </a>
        </div>
    </div>
</div>


<div class="container-fluid p-4" style="background-color: #E9ECEF">
    <div class="container" style="background-color: #E9ECEF">
        <div class="row text-center">
            <div class="col-sm">
                <h5>About Us</h5>
                <p>iSchool provides universal access to the world's best education, partnering with top
                    inuversities
                    and organization sto offer courses online.</p>
            </div>
            <div class="col-sm">
                <h5>Category</h5>
                <a class="text-dark" href="#">Web Development</a> <br>
                <a class="text-dark" href="#">Web Designing</a> <br>
                <a class="text-dark" href="#">Android App Dev</a> <br>
                <a class="text-dark" href="#">iOS Development</a> <br>
                <a class="text-dark" href="#">Data Analysis</a> <br>
            </div>
            <div class="col-sm">
                <h5>Contact Us</h5>
                <p>iSchool Pvt Ltd <br> Near Police Camp II <br> Bokaro, Jharkhand ,<br> Ph. 000000000</p>
            </div>
        </div>
    </div>
</div>




<!-- Start Including footer -->
<?php
    include("./mainInclude/footer.php");
?>
<!-- End Including footer -->