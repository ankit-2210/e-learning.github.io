<?php
    define('TITLE', 'Student Feedback');
    if(!isset($_SESSION)){
        session_start();
    }

    include("./stuInclude/header.php");
    include("../dbConnection.php");


    // If admin is logged in
    if(isset($_SESSION['is_login'])){
        $stuEmail = $_SESSION['stuLogEmail'];

    }
    // If admin is not logged in then redirect to index.php
    else{
        echo "<script> location.href='../index.php'; </script>";
    }

    $sql = "SELECT * FROM student WHERE stu_email = '$stuEmail' ";
    $result = $conn->query($sql);
    if($result->num_rows == 1){
        $row = $result->fetch_assoc();
        $stuId = $row["stu_id"];
    }


    if(isset($_REQUEST['submitFeedbackBtn'])){
        // Checking for empty fields
        if(($_REQUEST['f_content'] == "")){
            // msg displayed if required field missing
            $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
        }
        else{
            // Assigning User Values to Variable
            $fcontent = $_REQUEST['f_content'];
            
            $sql = "INSERT INTO feedback (f_content, stu_id) VALUES ('$fcontent', '$stuId')";
            
            if($conn->query($sql) == True){
                // below msg display on form submit success
                $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Submitted Succesfully !</div>';
            }
            else{
                // below msg display on form submit failed
                $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Submit </div>';
            }
        }
    }

?>



<div class="col-sm-6 mt-5">
    <form action="" method="POST" class="mx-5" enctype="multipart/form-data">
        <div class="form-group">
            <label for="stuId">Student ID</label>
            <input type="text" class="form-control" id="stuId" name="stuId"
                value="<?php if(isset($stuId)) { echo $stuId; } ?>" readonly>
        </div>
        <div class="form-group">
            <label for="f_content">Write Feedback:</label>
            <textarea type="text" class="form-control" id="f_content" name="f_content"></textarea>
        </div>
        <button type="submit" class="btn btn-danger" name="submitFeedbackBtn">Submit</button>
        <?php if(isset($passmsg)) { echo $passmsg; } ?>
        <!-- <a href="courses.php" class="btn btn-secondary">Close</a> -->
    </form>
</div>
</div>
</div>


<?php
    include('./stuInclude/footer.php');
?>