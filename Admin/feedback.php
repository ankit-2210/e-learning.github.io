<?php
    define('TITLE', 'Feedback');
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
        $sql = "DELETE FROM feedback WHERE f_id = {$_REQUEST['id']}";
        
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
    <p class="bg-dark text-white p-2">List of Feedback</p>
    <?php
        $sql = "SELECT * FROM feedback";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
    ?>
    <table class="table">
        <thread>
            <tr>
                <th scope="col">Feedback ID</th>
                <th scope="col">Content</th>
                <th scope="col">Student</th>
                <th scope="col">Action</th>
            </tr>
        </thread>
        <tbody>
            <?php 
            $sno = 0;
            while($row = $result->fetch_assoc()){  $sno = $sno+1; ?>
            <tr>
                <th scope="row"><?php echo $sno ?></th>
                <td> <?php echo $row['f_content'] ?> </td>
                <td> <?php echo $row['stu_id'] ?> </td>
                <td>
                    <form action="" method=" POST" class="d-inline">
                        <input type="hidden" name="id" value="<?php echo $row["f_id"] ?>">
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



</div>


<?php
 
    include("./adminInclude/footer.php");
?>