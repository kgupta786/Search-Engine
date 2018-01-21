<?php
session_start();
if(!isset($_SESSION["email"]))
{
    header("location:home.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <link href="css/bootstrap.css" rel="stylesheet">
<script src="jquery-1.11.3.min.js"></script>
    <script src="dist/jquery.validate.js"></script>

</head>
<body>
<div class="container-fluid">
    <div class="row">
<div class="col-sm-4" style="min-height: 750px;background-color: #f2f2f2"></div>
        <div class="col-sm-4" style="min-height: 750px">
<br>

            <img src="account.png" style="width: 480px ;height: 100px;">
            <br>
            <br>
            <br>
            <br>
            <br>
            <form action="calci.php" method="post">
            <div class="form-group">
           First-Name<input type="text"  name="fname" class="form-control" value="<?php
                echo $_SESSION["fname"];
                ?>" >
                <br>
            Last-Name<input type="text"  name="lname" class="form-control" value="<?php
                echo $_SESSION["lname"];
                ?>">
                <br>            Age<input type="text" name="age" class="form-control" value="<?php
                echo $_SESSION["age"];
                ?>">
                <br>E-mail<input type="text" readonly name="id" class="form-control" value="<?php
                echo $_SESSION["email"];
                ?>">
                <br>Mobile no.<input type="text" name="no" class="form-control" value="<?php
                echo $_SESSION["mobile"];
                ?>">
              <br><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="submit" class="btn btn-success" value="Update My Account">
        </div>
            </form></div>
        <div class="col-sm-4" style="min-height: 750px;background-color: #f2f2f2"></div>
</div>
</div>

</body>
</html>