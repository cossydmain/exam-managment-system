<?php include('navbar.php')?>
<?php include('sidebar.php')?>
<?php
$conn=mysqli_connect("localhost","root","","student")or die(mysqli_error($conn));
$id=$_GET['id'];
   echo $id;
$select_query=mysqli_query($conn,"select * from registration where id =$id")or die(mysqli_error($conn));
foreach($select_query as $record){
    $id=$record['id'];
    $name=$record['name'];
    $adm=$record['adm'];
    $age=$record['age'];
    $gender=$record['gender'];
    $class=$record['class'];

}   
?>

<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Student Profile</h4>
                            </div>
                            <div class="content">
                                <form  name="upadate_form" action="" method="POST">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>ID</label>
                                                <input type="text"name="id" class="form-control" disabled value="<?php echo $id;?>"> 
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="Username" value="<?php echo $name;?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label >Adm No</label>
                                                <input type="email" name="adm" class="form-control" value=£<?php echo $adm;?>>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <input type="text" name="gender" class="form-control"  value="<?php echo $gender;?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Age</label>
                                                <input type="text" name="age" class="form-control"  value="<?php echo $age;?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" name="Address" class="form-control"  value="<?php echo $Address;?>">
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" name="submit" class="btn btn-info btn-fill pull-right" value="update profile">
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="assets/img/faces/face-3.jpg" alt="..."/>

                                      <h4 class="title">Cossy<br />
                                         <small>254</small>
                                      </h4>
                                    </a>
                                </div>
                                <p class="description text-center"> "Lamborghini Mercy <br>
                                                    Your chick she so thirsty <br>
                                                    I'm in that two seat Lambo"
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <?php
     if(isset($_POST['submit'])){
         $name=$_POST['name'];
         $adm=$_POST['adm'];
         $age=$_POST['age'];
         $gender=$_POST['gender'];
         $class=$_POST['class'];
         echo $name;
         echo $adm;
         $update_query=mysqli_query($conn,"update registration set name='$name', adm='$adm', gender='$gender', age='$age', class='$class', where id='$id',")or die (mysqli_error($conn));
         if($update_query){
             ?>
             <script>
                 window.alert('success');
                 window.location.href='table_data.php';
             </script>
             <?php

            // echo"<script>window.alert(' update success')</script>";
             //header("refresh:0;url=table data.php");
         }else{
             echo"<script>window.alert('failed')</script>";
             header("refresh:0;url=table data.php");
         }

     }


?>
    <?php include('footer.php')?>
