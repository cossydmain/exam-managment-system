<?php
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    
       $select_query=mysqli_query($conn, "select * from admin where username='$username' and password='$password'")
       or die(mysqli_error($conn));
       $num=mysqli_num_rows($select_query);
       if($num==1){
           foreach($select_query as $record){
               $_SESSION['username']=$record['username'];
               $_SESSION['password']=$record['password'];
           }
           echo "<script>window.alert('login succesfull!!')</script>";
           header("refresh:0;url=table_data.php");
       }else{
           echo"<script>window.alert('login failed!!')</script>";
           header("refresh:0;url=index.php");
       }
}
?>