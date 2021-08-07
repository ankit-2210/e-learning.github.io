<?php
    include("./dbConnection.php");
    session_start();
    if(!isset($_SESSION['stuLogEmail'])){
        echo "<script> location.href='loginorsignup.php' </script>";
    }
    else{
        header("Pragma: no-cache");
        header("Cache-Control: no-cache");
        header("Expires: 0");
        $stuEmail = $_SESSION['stuLogEmail'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="GENERATOR" content="Evrsoft First Page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/carousel.min.css">

    <!-- <link rel="stylesheet" href="css/own.carousel.default.css"> -->

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
        integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <title>Checkout</title>
</head>

<body>
    <div clas="container mt-5">
        <div class="row">
            <div class="col-sm-6 offset-sm-3 jumbotron">
                <h3 class="mb-5">Welcome to E-Learning Payment Page</h3>
                <form method="post" action="./PaytmKit/pgRedirect.php">
                    <div class="form-group row">
                        <label for="ORDER_ID" class="col-sm-4 col-form-label">Order ID</label>
                        <div class="col-sm-8">
                            <input id="ORDER_ID" class="form-control" tabindex="1" maxlength="20" size="20"
                                name="ORDER_ID" autocomplete="off" value="<?php echo "ORDS" . rand(10000,99999999) ?>"
                                readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="CUST_ID" class="col-sm-4 col-form-label">Student Email</label>
                        <div class="col-sm-8">
                            <input id="CUST_ID" class="form-control" tabindex="2" maxlength="12" size="12"
                                name="CUST_ID" autocomplete="off"
                                value="<?php if(isset($stuEmail)) { echo $stuEmail; } ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="TXN_AMOUNT" class="col-sm-4 col-form-label">Amount</label>
                        <div class="col-sm-8">
                            <input title="TXN_AMOUNT" class="form-control" tabindex="10" type="text" name="TXN_AMOUNT"
                                value="<?php if(isset($_POST['id'])) { echo $_POST ['id']; } ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-8">
                            <input id="INDUSTRY_TYPE_ID" class="form-control" tabindex="4" maxlength="12" type="hidden"
                                size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-8">
                            <input id="CHANNEL_ID" class="form-control" tabindex="4" maxlength="12" type="hidden"
                                size="12" name="CHANNEL_ID" autocomplete="off" value="WEB" readonly>
                        </div>
                    </div>
                    <div class="text-center">
                        <input value="Check out" type="submit" class="btn btn-primary" onclick="">
                        <a href="./courses.php" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
                <small class="form-text text-muted">Note: Complete Payment by Clicking Checkout Button</small>
            </div>
        </div>
    </div>


</body>

</html>

<?php
    }
?>