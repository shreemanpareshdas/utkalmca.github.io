<?php include 'header.php';?>
<style>
.collapsible {
  background-color:brown;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.collapsible:after {
  content: '\002B';
  color: white;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.content {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color: #f1f1f1;
}
table, th, td {
  border: 2px solid black;
}
</style>

<img src="photo/exam.jpg" alt="" class="img-fluid img-rounded" style="margin: left 20px;">

<h3 style="background-color:burlywood;color:blue;margin-top:20px;text-align:center">MCA 2 YR. (REGULAR MODE), PROGRAMME CODE : 020304</h3>
<button class="collapsible">Eligibility/No. of Seats/Duration </button>
<div class="content">
    <p><b>Eligibility:</b></p>
    <ul>
<li> Any Graduate Degree under 10+2+3 pattern recognized by the Utkal University with pass in Mathematics or Statistics as a subject at least in +2 or Senior Secondary Level are eligible for 3 year course .</li>
 
 
 
 <li> Those who have Passed Bachelor of Computer Application(BCA)/Bachelor of Science with Computer Science (Hons.) / Bachelor of Science in Information Technology (B.Sc.(IT)) / Bachelor of Science in Information Technology & Management (B.Sc.(ITM))/ Bachelor of Science in Information System & Telecommunications(B.Sc.(IST))recognized by Utkal University are eligible for 2 year course .
 
 The first and second semesters shall be waived for all those who have passed BCA / B. Sc. ( Comp. Sc (H) ) / B. Sc (IT) / B. Sc (ITM)/B.Sc.(IST) i.e. conditions under B. They shall be directly admitted into third semester.</li>
 
 <li>ONLINE ADMISSION TEST ALONG WITH CAREER MARKING AND PERSONAL INTERVIEW THROUGH WEBINAR SHALL BE DONE FOR COMPUTER SCIENCE PROGRAMME. </li>

</ul>
<p><b>No. of Seats</b>	40</p>
<p><b>Duration:</b>	Two Academic Years.(4 Semester)</p>
</div>
<button class="collapsible">FEES </button>
<div class="content">
<table border:2px solid>
  <tr>
    <th>Purpose </th>
    <th>At the time of Admission </th>
    <th>Second Year </th>
  </tr>
  <tr>
    <td>Course fees </td>
    <td>Rs 29000</td>
    <td>Rs 25000 </td>
  </tr>
  <tr>
    <td>Admission </td>
    <td>Rs 960 </td>
    <td>Rs 920 </td>
  </tr>
  <tr>
    <td> Exam Fees</td>
    <td>Rs  1620</td>
    <td>Rs  1620</td>
  </tr>
</table>

</div>
<button class="collapsible">MODE/MEDIUM OF INSTRUCTION </button>
<div class="content">
<h5>The Course is offered under the Regular Mode. CHOICE BASED CREDIT SEMESTER (CBCS) is followed.</h5>

<b>Medium of Instruction in Exam : English</b>

</div>
<button class="collapsible">Selection Process /exam pattern</button>
<div class="content">
    <h4 style="background-color:yellow;color:blue;">Selection Process</h4>
    <p><b>Eligibility Criteria</b></p>
<pre>
Qualifying exam: University entrance test

Bachelor’s degree in any stream with an aggregate of 50% and Mathematics or Statistics as one of the main subjects at Class 12 with</pre>
<p>Ranking process= 40% of career + 60% of entrance mark</p>
<h4 style="background-color:yellow;color:blue;">exam pattern</h4>

<p>Online Test shall consist at 100 Multiple Choice Questions covering Reasoning,+2 level math,probability,statistic,Comprehension, English Language and Quantitative Techniques.</p>

</div>


<button class="collapsible"> Laboratory Details</button>
<div class="content">
<h4 style="color:blue;"> >Four Computer Laboratories with 180 Desktop Computers, 4 IBM Servers.</h4>
<div class="container">
            <div class="row">
            
                   

            <div class="col-lg-4 col-md-6 col-12">
					<div class="our-team">
                    <img src="photo/lab2.jpg" alt="" class="img-fluid img-rounded" >
                    <p> Computer Labourtory for Programming and Data-Science with 180 number computers with five labourtories and four number of server.</p>
                    </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
					<div class="our-team">
                    <img src="photo/lab1.jpg" alt="" class="img-fluid img-rounded" >
                    <p>  Specialised labouratory for Communications.</p>
                    </div>
                    </div>
</div>
</div>
</div>
</div>
<button class="btn"><i class="fa fa-download"></i> <a href="">downlod sylabus/previous exam Questions/project quide</a></button>



<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>
<?php include 'footer.php';?>
