<?php
    define('TITLE', 'Courses');
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


    if(isset($_REQUEST['delete'])){
        $sql = "DELETE FROM course WHERE course_id = {$_REQUEST['id']}";
        
        if($conn->query($sql) == TRUE){
            echo '<meta http-eqiv="refresh" content="0;URL=?deleted" />';
        }
        else{
            echo "Unable to Delete Data";
        }
    }
?>

<div class="col-sm-9 mt-5">
    <!-- Table -->
    <p class="bg-dark text-white p-2">List of Courses</p>
    <?php
        $sql = "SELECT * FROM course";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
    ?>
    <table class="table">
        <thread>
            <tr>
                <th scope="col">Course ID</th>
                <th scope="col">Name</th>
                <th scope="col">Author</th>
                <th scope="col">Action</th>
            </tr>
        </thread>
        <tbody>
            <?php 
            while($row = $result->fetch_assoc()){  ?>
            <tr>
                <th scope="row"><?php echo $row['course_id'] ?></th>
                <td> <?php echo $row['course_name'] ?> </td>
                <td> <?php echo $row['course_author'] ?> </td>
                <td>
                    <form action="editcourse.php" method="POST" class="d-inline">
                        <input type="hidden" name="id" value="<?php echo $row["course_id"] ?>">
                        <button type="submit" class="btn btn-info mr-3" name="view" value="View">
                            <i class="fas fa-pen"></i>
                        </button>
                    </form>
                    <form action="" method=" POST" class="d-inline">
                        <input type="hidden" name="id" value="<?php echo $row["course_id"] ?>">
                        <button type="submit" class="btn btn-secondary" name="delete" value="Delete">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </form>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <?php 
    }
    else{
        echo "0 Result";
    } 
    ?>
</div>


<div>
    <a class="btn btn-danger box" href="./addCourse.php">
        <i class="fas fa-plus fa-2x"></i>
    </a>
</div>
</div>


<?php
 
    include("./adminInclude/footer.php");
?>