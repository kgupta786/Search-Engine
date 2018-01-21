
<!DOCTYPE html>
<html>

<head>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <form action="" method="get">
        <div class="row" style="min-height: 130px; background-color: #f2f2f2;border:none">
            <div class="form-group">
                <input type="text" style="width: 600px;margin-top: 40px;margin-left: 30px;border-bottom: groove"  name="tbfirst" value="<?php session_start(); echo $_SESSION["query"] ?>" class="form-control" id="name">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2" style=";min-height: 1050px;background-color: #f2f2f2">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <table class="table table-striped table-hover" style="height: 300px">


                    <tr>
                        <td><a href="images.php"><span style="margin-left: 35%;text-align: justify">Images</span></a> </td>
                    </tr>
                    <tr>
                        <td><a href="videos.php"><span style="text-align: justify;margin-left: 35%"> Videos</span></a> </td>
                    </tr>
                    <tr>
                        <td><a href="others.php"><span style="margin-left: 35%;text-align: justify">Others</span></a> </td>
                    </tr>
                    <tr>
                        <td><a href="setting.php"><span style="margin-left: 30%;text-align: justify">My Settings</span></a> </td>
                    </tr>
                    <tr>
                        <td><a href="account.php"><span style="margin-left: 20%;text-align: justify">Account Settings</span></a> </td>
                    </tr>







                </table>


            </div>

            <div class="col-sm-10">


                <?php
                $s1 = "select * from search where query like '".$_SESSION["query"]."%' ";

                $conn = mysqli_connect("127.0.0.1", "root", null, "hadoop");
                $result = mysqli_query($conn, $s1);


                while($row=mysqli_fetch_array($result))
                {

                    $s="<div class ='row '>";
                    $s=$s."<span style='font-family: Calibri;font-size: 35px'>".$row[0]."</span>";

                    $s=$s."<span style='font-family: Calibri-light;font-size: 25px'><a href='$row[1]'><br>";
                    $s=$s.$row[1]."</a></span><br>";
                    $s=$s."<span style='font-family: Calibri-light;font-size: 25px'>".$row[2]."</span>";

                    $s=$s."</div>";
                    $s=$s."<hr>";
                    echo $s;
                }


                ?>

            </div>
        </div>
    </form>
</div>
</body>
</html>