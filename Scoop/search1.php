<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php
$q=$_GET["name"];
session_start();
$_SESSION["query"]=$q;
//$s="hello";
//echo "<script type=\"text/javascript\">location.href='http://127.0.0.1/scoop/search.php?firstname='.$q.'';</script>";
header("location: search.php");
?>
</body>
</html>
