<?php
$file  = $_POST['file'];
echo $file," : File";
$host = "85.10.205.173:3306";
$dbusername = "vibhor";
$dbpassword = "vibhor123";
$dbname = "studentrecord";

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
//if($conn)
//{
//    echo "Connection Established";
//}
//else
//    echo "connection problem";

if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
        . mysqli_connect_error());
}
else {
    $sql = "INSERT INTO studentrecord (json) values ('$file')";
    if ($conn->query($sql)) {
        echo "New record is inserted sucessfully";
    } else {
        echo "Error: " . $sql . "" . $conn->error;
    }
    $conn->close();
}
