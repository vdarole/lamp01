<!DOCTYPe html>
<html lang="en">
<head>
        <title> Job-Search </title>
        <link rel="stylesheet" href="style.css">
</head>


<body>

<!-- Start menu -->
<div class="topnav">
<a href="about-us.html">About</a>
<a href="user-register.html">Post your information</a>
<a href="search-job.html">Search for a Job</a>
<a href="index.html">Home</a>
</div>
<!-- End menu -->

<h1 style="text-align: center;"><span style="color: #ff0000;"><strong>Welcome to Job-Search.com</strong></span></h1>

<p>&nbsp;</p>
<image src="/images/job-search2.jpg" alt="Job-Search2" width="100" height="50" />


<h2>Below are search results</h2>
<p>&nbsp;</p>
</div>
<table  align="center">
<thead>
<tr>

<th>SR-NO</th>
<th>First Name</th>	
<th>Last Name</th>	
<th>Gender</th>
<th>Enter Email</th>	
<th>Enter Mobile</th>	
<th>Date of Birth</th>	
<th>Address</th>	
<th>Academic Qualification</th>	
<th>Global Certification</th>	
<th>Year of Experience</th>	
<th>Current working company</th>	
<th>Last working company</th>	
<th>Job Location</th>	
<th>Notice period</th>	
<th>Hand on Technology</th>
</tr>
</thead>

<?php

include 'connection.php';

if(isset($_POST['save']))
{
$gender = $_POST['gender'];
$location = $_POST['location'];
$h_technology = $_POST['h_technology'];
}

$sql_query = "select * from  emp_details where location='$location' and gender='$gender' and h_technology='$h_technology' ";
$query = mysqli_query($conn,$sql_query);
$nums = mysqli_num_rows($query);
while ($res = mysqli_fetch_array($query)) {
?>



<tr>
<th><?php echo $res['sr_no'] ?></th>
<th><?php echo $res['f_name'] ?></th>
<th><?php echo $res['l_name'] ?></th>
<th><?php echo $res['gender'] ?></th>
<th><?php echo $res['email'] ?></th>
<th><?php echo $res['mobile'] ?></th>
<th><?php echo $res['dob'] ?></th>
<th><?php echo $res['address'] ?></th>
<th><?php echo $res['a_qualification'] ?></th>
<th><?php echo $res['g_certification'] ?></th>
<th><?php echo $res['y_experience'] ?></th>
<th><?php echo $res['c_company'] ?></th>
<th><?php echo $res['l_company'] ?></th>
<th><?php echo $res['location'] ?></th>
<th><?php echo $res['n_period'] ?></th>
<th><?php echo $res['h_technology'] ?></th>





</tr>

<?php
}
$conn-> close();
?>



</table>


<h3 style="text-align: center; botton: 10px;"><a href="index.html">Back to Home</a></h3>
<p>&nbsp;</p>


</body>
</html>


