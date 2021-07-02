<?php
$conn =mysqli_connect( "localhost","root","","mca");
if(!$conn){
    die("connection Failed :" .mysqli_connect_error());
}
if(isset($_POST['login']))
{
    $name= $_POST['username1'];
    $password= $_POST['password1'];
    if(empty( $name)){
        array_push($error,"plz enter user name");
    }
    if(empty( $password)){
        array_push($error,"plz enter password");
    }
    if(count($error)==0){
        $query="SELECT * FROM  login WHERE username='$name' AND password='$password'";
        $results = mysqli_query($conn, $query);
  
        // $results = 1 means that one user with the
        // entered username exists
        if (mysqli_num_rows($results) == 1) {
             
            // Storing username in session variable
            $_SESSION['username'] = $name;
             
            // Welcome message
            $_SESSION['success'] = "You have logged in!";
             
            // Page on which the user is sent
            // to after logging in
            header('location: index.php');
        }
        else {
             
            // If the username and password doesn't match
            array_push($errors, "Username or password incorrect");
        }

     mysql_close($conn);
    }

    
  echo "login success fully";

?>