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
		<h1>SEARCH BY ID</h1>
        <div class= "form" style="background-color: #EADDCA">
        	<input type="text" name="id" class="textfield" placeholder="STUDENT ID">

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
		$search = $_POST['id'];
		$query = "SELECT * from registration where id= '$search'";
		$data =mysqli_query($conn, $query);
		echo "<table border='1'>
      <tr>
      	<th>Student id</th>
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
		$result = mysqli_fetch_assoc($data);
        $name = $result['id'];
        echo "<tr>";
        echo "<td>".$name."</td>";
        echo "\r";
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
	}
?>