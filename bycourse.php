<?php
include("connection.php");
?>
<html>
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Student Database</title>

<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body style="background-color: #EADDCA">
	<div class = "center" style="background-color: #EADDCA">
		<form action="#" method="POST">
		<h1>SEARCH BY COURSE</h1>
        <div class= "form" style="background-color: #EADDCA">
        	<label>   
		Course :  
		</label>   
  		<select class="textfield" name="course"> 
	 	<option value="Course">Course</option>  
		<option value="BCA">BCA</option>  
		<option value="BBA">BBA</option>  
		<option value="B.Tech">B.Tech</option>  
		<option value="MBA">MBA</option>  
		<option value="MCA">MCA</option>  
		<option value="M.Tech">M.Tech</option> 
		<option value="LLB">LLB</option> 
		<option value="B.Com">B.Com</option> 
		<option value="B.Sc">B.Sc</option> 
		<option value="BHM">BHM</option>  
		<option value="B.Des">B.Des</option> 
		</select> 


        	<input type="submit" name="search" value="SEARCH" name="" class="btn">
			<input type="submit" value="CLEAR" name="" class="btn">
			<input type="submit" formaction="index.html" name="save" value="HOME" name="" class="btn" style="background-color: green;">
		</div>
	</form>
</div>

</body>
</html>
<?php
	if(isset($_POST['search']))
	{
		$search = $_POST['course'];
		$query = "SELECT * from registration where course= '$search'";
  $connect = $conn-> query($query);
  echo "<table border='1'>
      <tr>
        <th>ID</th>
         <th>Firstname</th>
         <th>Middlename</th>
         <th>Lastname</th>
         <th>DOB</th>
         <th>Course</th>
         <th>Gender</th>
         <th>Phone Number</th>
         <th>Address</th>
         <th>Email</th>
      </tr>";
  if($connect-> num_rows > 0){
  while($result = $connect-> fetch_assoc())
          {
            $name = $result['id'];
            echo "<tr>";
        echo "<td>".$name."</td>";
        $name = $result['fname'];
    echo "<td>".$name."</td>";
    $name = $result['mname'];
    echo "<td>".$name."</td>";
    $name = $result['lname'];
    echo "<td>".$name."</td>";
    $name = $result['dob'];
    echo "<td>".$name."</td>";
    $name = $result['course'];
    echo "<td>".$name."</td>";
    $name = $result['gender'];
    echo "<td>".$name."</td>";
    $name = $result['phno'];
    echo "<td>".$name."</td>";
    $name = $result['address'];
    echo "<td>".$name."</td>";
    $name = $result['email'];
    echo "<td>".$name."</td>";
    echo "</tr>";
          }
          echo "</table>";
        }}
        ?>
 