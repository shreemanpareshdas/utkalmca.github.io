<?php include 'header.php';?>
<div class="alert alert-success">
<?php
 
  //data base connection
  $server_name="localhost";
  $username="root";
  $password="";
  $database_name="mca";
  $conn =mysqli_connect( "localhost","root","","mca");
  if(!$conn){
    die("connection Failed :" .mysqli_connect_error());
  }
  if(isset($_POST['save']))
  {
    $regisno=$_POST['regisno'];
    $year=$_POST['year'];
    $Course=$_POST['Course'];
    $semester=$_POST['semester'];
    $studentname=$_POST['studentname'];
    $fathername=$_POST['fathername'];
    $quadian=$_POST['quadian'];
    $permanentaddress=$_POST['permanentaddress'];
    $gender=$_POST['gender'];
    $nation=$_POST['nation'];
    $cast=$_POST['cast'];
    $dob=$_POST['dob'];
    $yop10=$_POST['yop10'];
    $yopm=$_POST['yopm'];
    $doa=$_POST['doa'];
    $college=$_POST['college'];
    $center=$_POST['center'];
    $paper=$_POST['paper'];
    $sql_query="INSERT INTO formfillup (regisno,year,Course,semester,studentname,fathername,quadian,permanentaddress,gender,nation,cast,dob,yop10,yopm,doa,college,center,paper)
             VALUES ('$regisno','$year','$Course','$semester','$studentname','$fathername','$quadian','$permanentaddress','$gender','$nation','$cast','$dob','$yop10','$yopm','$doa','$college','$center','$paper')" ;
    if(mysqli_query($conn, $sql_query))
    {
      echo "<strong>you successfully !</strong> complet your semister form fill up";
      
    }
    else
    {
      echo "error" . $sql ."". mysqli_error($conn);
    }

    
 
    mysqli_close($conn);
  }


  
  

?>
</div>
<div class="alert alert-warning">
    <strong>make payment</strong> bellow!
</div>

<div class="col-lg-4 col-md-4 col-sm-6">
<form>
<input type="textbox" name="name" id="name" placeholder="Studentname"><br/><br/>
<input type="textbox" name="amt" id="amt" placeholder="Amount"><br/></br>
<input type="button" name="btn" id="btn" value="Pay Now" onclick="paynow()"/>


</form>
</div>

<script>

  function paynow(){
    var name=jQuery('#name').val();
    var amt=jQuery('#amt').val();
    jQuery.ajax({
                     type:'post',
                     url:'payment.php',
                    data:"&amt="+amt+"&name="+name,
                    success:function(result){
                            var options = {  
                      "key": "rzp_test_Np0nlpJk7Rju9y", // Enter the Key ID generated from the Dashboard   
                      "amount": amt*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise  
                      "currency": "INR",  
                      "name": "Utkal MCA department",  
                      "description": "Formfill up Transaction", 
                      "image": "photo/ulogo.png",  
             
                 "handler": function (response){     
                        jQuery.ajax({
                          type:'post',
                          url:'payment.php',
                          data:"payment_id="+response.razorpay_payment_id ,
                          success:function(result){
                            window.location.href="thanku.php";
                          }

                        })
                              }};
                             var rzp1 = new Razorpay(options);
                             rzp1.open();   
                            

  }

                          
                          })
  }

   
  </script>

<?php include 'footer.php';?>