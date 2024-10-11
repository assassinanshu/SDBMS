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
		<h1>DELETE STUDENT DATA</h1>
        <div class= "form" style="background-color: #EADDCA">
        	<input type="text" name="eid" class="textfield" placeholder="Employee ID">

        	<input type="submit" name="search" value="DELETE" name="" class="btn">
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
		$search = $_POST['eid'];
		$query = "DELETE from registration where id= '$search'";
		$data =mysqli_query($conn, $query);

		if($data)
        	{
        		echo "Data Deleted";
    		}
    	else
    	{
    		echo "Failed to Delete Data";
    	}
	}
?>