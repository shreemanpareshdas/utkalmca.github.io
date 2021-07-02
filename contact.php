<?php include 'header.php';?>
<div class="alert alert-success">
<?php
 $conn =mysqli_connect( "localhost","root","","mca");
if(!$conn){
  die("connection Failed :" .mysqli_connect_error());
}
if(isset($_POST['send']))
{
	$name= $_POST['sname'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $rollno= $_POST['rollno'];
    $comments= $_POST['comments'];
	$sql_query="INSERT INTO contact (sname,email,phone,rollno,comments) VALUES('$name',' $email',' $phone','$rollno','$comments')";
	if(mysqli_query($conn, $sql_query))
    {
      echo "<strong> successfully !</strong> submit your issue";
	  
      
    }
    else
    {
      echo "error" . $sql ."". mysqli_error($conn);
    }

    
 
    mysqli_close($conn);
  }


  
  

?>
</div>
your issue will solve soon !

<?php include 'footer.php';?>



