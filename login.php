<?php include 'header.php';?>
<div class="alert alert-success">
<?php
 $conn =mysqli_connect( "localhost","root","","mca");
 if(!$conn){
   die("connection Failed :" .mysqli_connect_error());
 }
 if(isset($_POST['signup']))
 {
	 $name= $_POST['username'];
	 $password= $_POST['password'];
	 $phone= $_POST['mobile'];
	 
	 $sql_query="INSERT INTO login (username,password,phone_no) VALUES('$name',' $password',' $phone')";
	 if(mysqli_query($conn, $sql_query))
    {
      echo "<strong> successfully !</strong>Register";
	  
      
    }
    else
    {
      echo "error" . $sql ."". mysqli_error($conn);
    }

    
 
    mysqli_close($conn);
  }

?>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
           
            <!-- Form -->
            <form id="register_sign_up" action="success.php" class="signup_form" method ="POST" autocomplete="off">
                <h2>login here</h2>
               
                <div class="form-group">
                    <label>Username / Email</label>
                    <input type="email" name="username1" class="form-control user_name" placeholder="Email Address" requried />
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password1" class="form-control pass_word" placeholder="Password" requried />
                </div>
              
                <input type="submit" name="login" class="btn" value="login"/>
            </form>
            <!-- /Form -->
        </div>
    </div>
</div>
 <?php include 'footer.php';?>