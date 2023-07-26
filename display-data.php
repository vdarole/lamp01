<!DOCTYPe html>
<html lang="en">
<head>
        <title> Job-Search </title>


        <link rel="stylesheet" href="style.css">

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  white-space: nowrap;
}

tr:nth-child(even) {
  background-color: rgba(150, 212, 212, 0.4);
}

th:nth-child(even),td:nth-child(even) {
  background-color: rgba(150, 212, 212, 0.4);
}
</style>


</head>


<body>

<!-- Start menu -->
<div class="topnav">
<a href="about-us.html">About</a>
<a href="user-register.html">Post Your Details</a>
<a href="search-job.html">Candidate Details</a>
<a href="index.html">Home</a>
</div>
<!-- End menu -->

<h1 style="text-align: center;"><span style="color: #ff0000;"><strong>Welcome to Job-Search.com</strong></span></h1>

<p>&nbsp;</p>
<image src="/images/job-search2.jpg" alt="Job-Search2" width="100" height="50" />


<h2>Below are search results</h2>
<p>&nbsp;</p>
</div>
<table>
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
<td><?php echo $res['sr_no'] ?></td>
<td><?php echo $res['f_name'] ?></td>
<td><?php echo $res['l_name'] ?></td>
<td><?php echo $res['gender'] ?></td>
<td><?php echo $res['email'] ?></td>
<td><?php echo $res['mobile'] ?></td>
<td><?php echo $res['dob'] ?></td>
<td><?php echo $res['address'] ?></td>
<td><?php echo $res['a_qualification'] ?></td>
<td><?php echo $res['g_certification'] ?></td>
<td align="center"><?php echo $res['y_experience'] ?></td>
<td><?php echo $res['c_company'] ?></td>
<td><?php echo $res['l_company'] ?></td>
<td><?php echo $res['location'] ?></td>
<td align="center"><?php echo $res['n_period'] ?></td>
<td><?php echo $res['h_technology'] ?></td>
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


