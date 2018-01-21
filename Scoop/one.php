<!DOCTYE html>
<html>
<head>

</head>
<body>
<?php
$s=$_POST["name"];
//echo '<a href="https://www.google.com/search?q=".$s"></a>';
echo "<script type=\"text/javascript\">location.href =\"https://www.google.com/search?q=\".$s\";</script>";
?>
</body>
</html>