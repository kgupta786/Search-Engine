<!DOCTYPE html>
<html>
<head>
<link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
<?php
session_start();
$first=$_POST["fname"];
$_SESSION["fname"]=$first;
    $last = $_POST["lname"];
$_SESSION["lname"]=$last;
        $age = $_POST["age"];
$_SESSION["age"]=$age;

                $mobile = $_POST["no"];
$_SESSION["mobile"]=$mobile;



                        $conn = mysqli_connect("127.0.0.1", "root", null, "hadoop");
                        $s = "update signup set firstname='" . $first . "', lastname='" . $last . "',age='" . $age . "', mobile='" . $mobile . "',password='" . $pass . "' where email='".$_POST["id"]."'    ";
                        mysqli_query($conn, $s);

                        echo "<script type=\"text/javascript\">location.href='http://127.0.0.1/scoop/login.php'</script>";


?>
</body>
</html>