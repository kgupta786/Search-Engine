<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php
$first=$_POST["tb1"];
if($first!=null) {
    $last = $_POST["tb2"];
    if($last!=null) {
        $age = $_POST["age"];
        if($age!=null) {
            $nationality = $_POST["nation"];
            if($nationality!=null) {
                $gender = $_POST["gender"];
                $email = $_POST["email"];
                $mobile = $_POST["mobile"];
                $s1 = "select * from signup";
                $conn = mysqli_connect("127.0.0.1", "root", null, "hadoop");
                $result = mysqli_query($conn, $s1);
                $flag = 0;
                while ($row= mysqli_fetch_array($result)) {
                    if ($row[5] == $email||$row[6]==$mobile) {
                        $flag = 1;
                        break;
                    }
                }
                if ($flag == 1) {
                    echo '<script language="javascript">';
                    echo 'alert("Email or mobile already exists.Select the new-one")';
                    echo '</script>';

                } else {
                    if ($email != null) {

                        if ($mobile != null) {
                            $pass = $_POST["password"];
                            if ($pass != null) {
                                $password = $_POST["confirm"];
                                if ($pass == $password) {

                                    $conn = mysqli_connect("127.0.0.1", "root", null, "hadoop");
                                    $s = "insert into signup values('" . $first . "','" . $last . "','" . $age . "','" . $nationality . "','" . $gender . "','" . $email . "','" . $mobile . "','" . $pass . "')";
                                    mysqli_query($conn, $s);
                                    session_start();
                                    $_SESSION["email"]=$email;

                                    header("location:login.php");
                                } else {
                                    echo '<script language="javascript">';
                                    echo 'alert("Passwords did not matched")';
                                    echo '</script>';
                                    echo "<script type=\"text/javascript\">location.href='http://127.0.0.1/scoop/sign.php';</script>";
                                    die();
                                }
                            } else {
                                echo '<script language="javascript">';
                                echo 'alert("Please enter your password")';
                                echo '</script>';
                                echo "<script type=\"text/javascript\">location.href='http://127.0.0.1/scoop/sign.php';</script>";

                            }
                        } else {
                            echo '<script language="javascript">';
                            echo 'alert("Contact is required")';
                            echo '</script>';

                            echo "<script type=\"text/javascript\">location.href='http://127.0.0.1/scoop/sign.php';</script>";
                        }
                    } else {
                        echo '<script language="javascript">';
                        echo 'alert("email required")';
                        echo '</script>';
                        echo "<script type=\"text/javascript\">location.href='http://127.0.0.1/scoop/sign.php';</script>";

                    }
                }
            }else{ echo '<script language="javascript">';
                echo 'alert("Nationality not Specified")';
                echo '</script>';}
            echo "<script type=\"text/javascript\">location.href='http://127.0.0.1/scoop/sign.php';</script>";

        }
        else{ echo '<script language="javascript">';
            echo 'alert("Age must be entered")';
            echo '</script>';}
        echo "<script type=\"text/javascript\">location.href='http://127.0.0.1/scoop/sign.php';</script>";

    }
    else{ echo '<script language="javascript">';
        echo 'alert("Required field")';
        echo '</script>';}
    echo "<script type=\"text/javascript\">location.href='http://127.0.0.1/scoop/sign.php';</script>";

}
else {
    echo '<script language="javascript">';
    echo 'alert("Must Enter the Required Fields")';
    echo '</script>';
    echo "<script type=\"text/javascript\">location.href='http://127.0.0.1/scoop/sign.php';</script>";
}


?>
</body>
</html>