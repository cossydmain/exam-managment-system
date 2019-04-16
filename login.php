<?php
SESSION_start();
$conn=mysqli_connect("localhost","root","","student")or die(mysqli_error($conn));

if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $select_query=mysqli_query($conn,"SELECT * FROM admin WHERE username='$username'AND password='$password'")or die(mysqli_error($conn));
    $num=mysqli_num_rows($select_query);

    if($num ==1){

        foreach($select_query as $record){
            $_SESSION['username']=record['username'];
            $_SESSION['password']=record['password'];
            $_SESSION['password']=TRUE;
        }
        echo "<script>window.alert('login successful')</script>";
        header("refresh:0;url=table_data.php");
    }else{
        echo "<script>window.alert('login failed')</script>";
        header("refresh:0;url=index.php");
    }
}
?>