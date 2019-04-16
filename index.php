
<html>
   <header>
       <title>Login</title> 
       <link rel="stylesheet" href="bootstrap/css/bootsrap.css">
   </header>
  <body>
    <div class="container">
       <div class="row" style="height:100px;"></div>
       <div class="row"> 
           <div class="col-sm-2"></div>
           <div class="col-sm-6">
               <form class="login-form" action="process_login.php" method="POST">
                 <h3>LOGIN</h3>
                 <div class="form group">
                    <input type="text" name="username" class="form-control" placeholder="username"><br><br/>
                    <input type="password" name="password" class="form-control" placeholder="password"><br><br/>
                    <input type="submit" name="submit" class="btn btn-primary" placeholder="login" style="width:150px;">
                 </div>
               </form>
           </div>
           <div class="col-sm-2"></div>
       </div>
    
    </div>
  
  
  </body>





</html>