<?php
$conn = mysql_connect("localhost","root","Kishor.s90347844","mydata");
if($conn->connect_error){
    echo "connection failed";
} else{
    echo "connection successfull";
}
$conn = close();
?>