<?php
$conn=mysqli_connect("localhost","root","","student")or die(mysqli_error($conn));
$id=$_GET['id'];
echo $id;
$delete_query=mysqli_query($conn, "delete from registration where id=$id")or die(mysqli_error($conn));
if($delete_query){
    echo"<script>window.alert('success')</script>";
    header("refresh:4;url=table data.php");
}else{
    echo"<script>window.alert('failed')</script>";
    header("refresh:4;url=table data.php");
}
?>