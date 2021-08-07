<!-- Start Footer -->
<div class="container-fluid bg-dark text-center p-2">
    <small class="text-white">Copyright &copy; 2021 || Designed By E-Learning || <a href="#login" data-bs-toggle="modal"
            data-bs-target="#adminLoginModalCenter">Admin Login</a></small>
</div>
<!-- End Footer -->



<!-- Start Student Registration Modal -->

<!-- Modal -->
<div class="modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledby="stuRegModalCenterLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="stuRegModalCenterLabel">Student Registration</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Start Student Registration Form -->
                <?php
                    include('studentRegistration.php');
                ?>
                <!-- End Student Registration Form -->
            </div>
            <div class="modal-footer">
                <span id="successMsg"></span>
                <button type="button" class="btn btn-primary" id="signup" onclick="addStu()">Sign Up</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- End Student Registration Modal -->


<!-- Start Student Login Modal -->
<!-- Modal -->
<div class="modal fade" id="stuLoginModalCenter" tabindex="-1" aria-labelledby="stuLoginModalCenterLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="stuLoginModalCenterLabel">Student Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Start Student Login Form -->
                <form id="stuLoginForm">
                    <div class="mb-3 form-group">
                        <i class="fas fa-envelope"></i><label for="stuLogemail"
                            class="pl-2 font-weight-bold">Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="stuLogemail"
                            id="stuLogemail">

                    </div>
                    <div class="mb-3 form-group">
                        <i class="fas fa-key"></i>
                        <label for="stuLogpass" class="pl-2 font-weight-bold">Password</label>
                        <input type="password" class="form-control" id="stuLogpass" name="stuLogpass"
                            placeholder="Password">
                    </div>
                </form>
                <!-- End Student Login Form -->
            </div>
            <div class="modal-footer">
                <small id="statusLogMsg"></small>
                <button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkLogBtn()">Login</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- End Student Login Modal -->



<!-- Start Admin Login Modal -->
<!-- Modal -->
<div class="modal fade" id="adminLoginModalCenter" tabindex="-1" aria-labelledby="adminLoginModalCenterLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="adminLoginModalCenterLabel">Admin Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Start Admin Login Form -->
                <form id="adminLoginForm">
                    <div class="mb-3 form-group">
                        <i class="fas fa-envelope"></i><label for="adminLogemail"
                            class="pl-2 font-weight-bold">Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="adminLogemail"
                            id="adminLogemail">

                    </div>
                    <div class="mb-3 form-group">
                        <i class="fas fa-key"></i>
                        <label for="adminLogpass" class="pl-2 font-weight-bold">Password</label>
                        <input type="password" class="form-control" id="adminLogpass" name="adminLogpass"
                            placeholder="Password">
                    </div>
                </form>
                <!-- End Admin Login Form -->
            </div>
            <div class="modal-footer">
                <small id="statusAdminLogMsg"></small>
                <button type="button" class="btn btn-primary" id="adminLoginBtn"
                    onclick="checkAdminLogin()">Login</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- End Admin Login Modal -->




<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.js"></script>

<!-- Custom Javascript -->
<script type="text/javascript" src="index.js"></script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

<!-- Owl Carousel Js file -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

<!-- isotope plugin Js file -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>



<script type="text/javascript" src="js/ajaxrequest.js"></script>
<script type="text/javascript" src="js/adminajaxrequest.js"></script>
</body>



</html>