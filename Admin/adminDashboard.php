<?php
    define('TITLE', 'DashBoard');
    if(!isset($_SESSION)){
        session_start();
    }

    include("./adminInclude/header.php");
    include("../dbConnection.php");

    // If admin is logged in
    if(isset($_SESSION['is_admin_login'])){
        $adminEmail = $_SESSION['adminLogEmail'];

    }
    // If admin is not logged in then redirect to index.php
    else{
        echo "<script> location.href='../index.php'; </script>";
    }

    $sql = "SELECT * FROM course";
    $result = $conn->query($sql);
    $totalcourse = $result->num_rows;

    $sql = "SELECT * FROM student";
    $result = $conn->query($sql);
    $totalstu = $result->num_rows;

    $sql = "SELECT * FROM courseorder";
    $result = $conn->query($sql);
    $totalsold = $result->num_rows;

    if(isset($_REQUEST['delete'])){
        $sql = "DELETE FROM courseorder WHERE course_id = {$_REQUEST['id']}";
        
        if($conn->query($sql) == TRUE){
            echo '<meta http-eqiv="refresh" content="0;URL=?deleted" />';
        }
        else{
            echo "Unable to Delete Data";
        }
    }

?>


<div class="col-sm-9 mt-5">
    <!--  Start Upper Side Views -->
    <div class="row mx-5 text-center">
        <!-- Start Courses -->
        <div class="col-sm-4 mt-5">
            <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                <div class="card-header">Courses</div>
                <div class="card-body">
                    <h4 class="card-title">
                        <?php echo $totalcourse; ?>
                    </h4>
                    <a class="btn text-white" href="courses.php">View</a>
                </div>
            </div>
        </div>
        <!-- End Courses -->
        <!-- Start Students -->
        <div class="col-sm-4 mt-5">
            <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                <div class="card-header">Students</div>
                <div class="card-body">
                    <h4 class="card-title">
                        <?php echo $totalstu; ?>
                    </h4>
                    <a class="btn text-white" href="students.php">View</a>
                </div>
            </div>
        </div>
        <!-- End Students -->
        <!-- Start Sold -->
        <div class="col-sm-4 mt-5">
            <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                <div class="card-header">Sold</div>
                <div class="card-body">
                    <h4 class="card-title">
                        <?php echo $totalsold; ?>
                    </h4>
                    <a class="btn text-white" href="sellReport.php">View</a>
                </div>
            </div>
        </div>
        <!-- End Sold -->
    </div>
    <!-- End Upper Side Views -->


    <!-- Start Course Details -->
    <div class="mx-5 mt-5 text-center">
        <!-- Table -->
        <p class="bg-dark text-white p-2">Course Ordered</p>
        <?php
            $sql = "SELECT * FROM courseorder";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
        ?>
        <table class="table">
            <thread>
                <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">Course ID</th>
                    <th scope="col">Student Email</th>
                    <th scope="col">Order Date</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Action</th>
                </tr>
            </thread>
            <tbody>
                <?php
                    while($row = $result->fetch_assoc()){
                ?>
                <tr>
                    <th scope="row"> <?php echo $row['order_id']; ?> </th>
                    <td> <?php echo $row['course_id']; ?> </td>
                    <td> <?php echo $row['stu_email']; ?> </td>
                    <td> <?php echo $row['order_date']; ?> </td>
                    <td> <?php echo $row['amount']; ?> </td>
                    <td>
                        <form action="" method=" POST" class="d-inline">
                            <input type="hidden" name="id" value="<?php echo $row["course_id"] ?>">
                            <button type="submit" class="btn btn-secondary" name="delete" value="Delete">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <?php
            }
            else{
                echo "0 Result";
            }
        ?>
    </div>
    <!-- End Course Details -->
</div>

</div>
<!-- End row close from header -->
</div>
<!-- End container-fluid from header -->


<?php
    include("./adminInclude/footer.php");
?>