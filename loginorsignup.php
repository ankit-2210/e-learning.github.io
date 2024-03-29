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


<div class="container jumbotron mb-5">
    <div class="row">
        <div class="col-md-4">
            <h5 class="mb-3">If Already Registered !! Login</h5>
            <form id="stuLoginForm">
                <div class="mb-3 form-group">
                    <i class="fas fa-envelope"></i><label for="stuLogemail" class="pl-2 font-weight-bold">Email</label>
                    <input type="email" class="form-control" placeholder="Email" name="stuLogemail" id="stuLogemail">

                </div>
                <div class="mb-3 form-group">
                    <i class="fas fa-key"></i>
                    <label for="stuLogpass" class="pl-2 font-weight-bold">Password</label>
                    <input type="password" class="form-control" id="stuLogpass" name="stuLogpass"
                        placeholder="Password">
                </div>
                <button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkLogBtn()">Login</button>
            </form>
            <br />
            <small id="statusLogMsg"></small>
        </div>
        <div class="col-md-6 offset-md-1">
            <h5 class="mb-3">New User || Sign Up</h5>
            <form role="form" id="stuRegForm">
                <div class="form-group">
                    <i class="fas fa-user"></i>
                    <label for="stuname" class="pl-2 font-weight-bold">Name</label>
                    <small id="statusMsg1"></small>
                    <input type="text" class="form-control" placeholder="Name" name="stuname" id="stuname">
                </div>
                <div class="form-group">
                    <i class="fas fa-envelope"></i>
                    <label for="stuemail" class="pl-2 font-weight-bold">Email</label>
                    <small id="statusMsg2"></small>
                    <input type="email" class="form-control" placeholder="Email" name="stuemail" id="stuemail">
                    <small class="form-text">We'll never share your email with anyone elese.</small>
                </div>
                <div class="form-group">
                    <i class="fas fa-key"></i>
                    <label for="stupass" class="pl-2 font-weight-bold">New Password</label>
                    <small id="statusMsg3"></small>
                    <input type="password" class="form-control" placeholder="Password" name="stupass" id="stupass">
                </div>
                <button type="button" class="btn btn-primary" id="signup" onclick="addStu()">Sign Up</button>
            </form></br>
            <small id="successMsg"></small>
        </div>
    </div>
</div>
<hr>
<script type="text/javascript" src="js/ajaxrequest.js"></script>
<?php
    // Contact Us
    include('./contact.php')
?>

<!-- Start Including footer -->
<?php
    include("./mainInclude/footer.php");
?>
<!-- End Including footer -->