<?php include 'header.php';?>
<style>
	.semester{
    width:570px;
      background:transparent;
    box-shadow:0 0 3px 0 black;
    background:#fff;
    padding:20px;
    margin:30px;
    border:2px solid green;
    text-align:center;
    border-radius:15px;
  }
  </style>
<div class="semester">
<div class="col-lg-4 col-md-4 col-sm-6">

<form action="connection.php" method="post" name="StudentRegistration" onsubmit="return(validate());">



	<table cellpadding="2" width="20%" bgcolor="99FFFF" align="center"
	cellspacing="2">
	<tr>
		<td><img src="photo/download.png" alt="" style="width:70px;height:70px"></td>
		<td colspan=3><b>UTKAL UNIVERSITY</b></td>
</tr>
<tr>
	<td> </td>
		<td colspan=3><b>VANI VIHAR BHUBANESWAR, 751004</b></td>
</tr>

	
		<tr>
		
	<td> </td>
	<td> </td>
	<td> </td>
	<td>Registration No.<input type="text" name="regisno" id="resistaion" size="10">
</td>

			
</tr>
<tr>
	<td> </td>
		<td colspan=3><b>Application form for master of computer apllication</b></td>

</tr>
<tr>
	<td> </td>
		<td colspan=3>Examination Of <input type="text" name="year" size="10"></td>
		
		
</tr>
<tr>
	<td> </td>
		<td colspan=2 >Subject: 
		<select name="Course">
			<option value="-1" selected>select..</option>
			<option value="B.Tech">B.TECH</option>
			<option value="MCA">MCA</option>
			<option value="MBA">MBA</option>
			<option value="BCA">BCA</option>
			</select></td>
		<td colspan=2>Semester: </td>
		<td>
			<select name="semester" >
				<option value="-1" selected>select..</option>
				<option value="ist">1st</option>
				<option value="2nd">2nd</option>
				<option value="3rd">3rd</option>
				<option value="4th">4th</option>
			</select></td>
		
</tr>
<tr >
		<td colspan=4><b>Particulars To Be Fieled In By The Candidate</b></td>
</tr>

		<tr>
			<td colspan=3 >1.Name</td>
			<td><input type="text" name="studentname" id="studentname" size="30"></td>
		</tr>

		<tr>
			<td colspan=3>2.Father Name</td>
			<td><input type="text" name="fathername" id="fathername"
			size="30"></td>
		</tr>
	
		<tr>
			<td colspan=3>3.Guadian Name</td>
			<td><input type="text" name="quadian" id="quadian" size="30"></td>
		</tr>

		<tr>
			<td colspan=3>4.Permanent Address</td>
			<td><input type="text" name="permanentaddress"id="personaladdress" size="30">
			</td>
		</tr>

		<tr>
			<td colspan=3 >5.Gender</td>
			<td>
				<input type="radio" name="gender" value="male" size="10">Male
				<input type="radio" name="gender" value="Female" size="10">Female
			</td>
		</tr>

		<tr>
		<td colspan=3>6.Nationality</td>
			<td>
			<select name="nation">
				<option value="-1" selected>select..</option>
				<option value="Indian">Indian</option>
				<option value="Mumbai"></option>
				
			</select></td>
		</tr>
		<tr>
		<td colspan=3>7.Community</td>
			<td>
			<select name="cast">
				
				<option value="OBC">OBC</option>
				<option value="SC/ST">SC/ST</option>
				<option value="General">General</option>
				
			</select></td>
		</tr>
		<tr >
			<td colspan=3>8.DOB</td>
			<td><input type="date" name="dob" id="dob" size="30"></td>
		</tr>
		<tr> 
		 <td colspan=3> 9.Year of passing of 10TH </td>
		 <td><select name="yop10">
			
			<option value="2013">2013</option>
			<option value="2010">2010</option>
			<option value="2012">2012</option>
			<option value="2011">2011</option>
		</select></td>

</tr>
<tr> 
		 <td colspan=3> 10.Year of passing of Master degree </td>
		 <td><select name="yopm">

			<option value="2021">2021</option>
			<option value=2022">2022</option>
			<option value="2023">2023</option>
			<option value="2024">2024</option>
		</select></td>

</tr>
<tr >
			<td colspan=3>11. Date of Addmision in Mca course</td>
			<td><input type="date" name="doa" id="doa" size="30"></td>
		</tr>
	

		
		
		<tr>
			<td colspan=3>12.Name of your college/Institution</td>
			<td><input type="text" name="college" id="college" size="20"></td>
		</tr>
		<tr>
			<td colspan=3>13.Name of the Examination center</td>
			<td><input type="text" name="center" id="center" size="20"></td>
		</tr>
		<tr> 
			<td colspan=3 >14.paper in semester</td>
			<td><textarea rows="4" cols="20" name="paper" id="paper"> </textarea></td>
</tr>
			<td>
				<input type="reset">
			</td>
			<td colspan=2>
				<input type="submit" value="Submit Form" name="save"/>
			</td>
		</tr>
		
	</table>
	
</form>
</div>
</div>
<?php include 'footer.php';?>