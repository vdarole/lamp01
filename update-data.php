<!-- Full Code of php file for mySql database connection with html form -->
<?php
include 'connection.php';

if(isset($_POST['save']))
{
$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$a_qualification = $_POST['a_qualification'];
$g_certification = $_POST['g_certification'];
$y_experience = $_POST['y_experience'];
$c_company = $_POST['c_company'];
$l_company = $_POST['l_company'];
$location = $_POST['location'];
$n_period = $_POST['n_period'];
$h_technology = $_POST['h_technology'];

//echo $h_technology;



$sql_query = "INSERT INTO emp_details (f_name,l_name,gender,email,mobile,dob,address,a_qualification,g_certification,y_experience,c_company,l_company,location,n_period,h_technology)
 VALUES ('$f_name','$l_name','$gender','$email','$mobile','$dob','$address','$a_qualification','$g_certification','$y_experience','$c_company','$l_company','$location','$n_period','$h_technology')" ;

if (mysqli_query($conn, $sql_query))
{
//echo "Registation is completed successfully !!!. We will update you in short notice"; 
}
else
{
echo "Error: " . $sql . "" . mysqli_error($conn);
} 

mysqli_close($conn);


}


?>



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
<h2 style="text-align: center;">Registation is completed successfully !!!.<br> We will update you <h2>

<h3 style="text-align: center;"><a href="index.html">Back to Home</a></h3>
<p>&nbsp;</p>


</body>
</html>
