<?php
$servername ="localhost";
$username = "root";
$password = "";
$database = "sltc_project";

//create connection
$conn = mysqli_connect($servername,$username,$password,$database);

//check connection
if (mysqli_connect_errno();){
    die('DATABASE CONNECTION FAILD'.mysqli_connect_error());
}

$username  = mysqli_real_escape_string(&conn, $_POST['Username']); //$username=POST['Username'];  
$password = mysqli_real_escape_string($conn, $_POST['Password']);

$sql = "INSERT INTO logintb( Username , Password ) values('$Username','$Password')";
if mysqli_query($conn,$sql)===TRUE{
    echo "<script>alert('Details Added');window.loacation.href='log.php';</script>";
}
else{
    echo "Error:" .sql2 . "<br>" .mysqli_error($conn);
}
mysqli_close($conn);
?>