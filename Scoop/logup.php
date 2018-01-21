
<?php
$user1=$_POST["user"];
$pas1=$_POST["logpass"];
$conn = mysqli_connect("127.0.0.1", "root", null, "hadoop");
$s="select * from signup";
$flag=0;
//echo $s;
$result=mysqli_query($conn, $s);
while($row=mysqli_fetch_array($result)) {
    if($row[5]==$user1&&$row[7]==$pas1)
    {
        $flag=1;

        break;
    }
}
if($flag==1)
{
    $s1="select * from signup where email='".$user1."'";
    $result=mysqli_query($conn, $s1);
    $row=mysqli_fetch_array($result);
    session_start();
    $_SESSION["fname"]=$row[0];
    $_SESSION["lname"]=$row[1];
    $_SESSION["age"]=$row[2];
    $_SESSION["nation"]=$row[3];
    $_SESSION["gender"]=$row[4];
    $_SESSION["email"]=$row[5];
    $_SESSION["mobile"]=$row[6];
    $_SESSION["password"]=$row[7];
    echo '<script language="javascript">';
    echo 'alert("Succesfully Logged-in and press OK to continue")';
    echo '</script>';

   header("location:login.php");
}
else
{
    echo '<script language="javascript">';
    echo 'alert("Please Enter valid password or Email-id and press OK to continue")';
    echo '</script>';
header("location:home.php");
}


?>

