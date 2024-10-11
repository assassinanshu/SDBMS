<?php
include("connection.php");
?>
<html>
<head>
  <style>
    
  input[type=text], input[type=password], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color: orange;  
  outline: none; 
}
</style>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Student Database</title>

<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body style="background-color: #EADDCA">
	<div class = "center" style="background-color: #EADDCA">
		<form action="#" method="POST">
		<h1>UPDATE NAME</h1>
        <div class= "form" style="background-color: #EADDCA">
           <label> Student ID </label>   
          <input type="text" name="id" placeholder= "ID" size="15" required />    
        	<input type="text" name="fname" class="textfield" placeholder="First Name">
          <input type="text" name="mname" class="textfield" placeholder="Middle Name">
          <input type="text" name="lname" class="textfield" placeholder="Last Name">

        	<input type="submit" name="search" value="MODIFY" name="" class="btn">
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
    $id = $_POST['id'];
		$fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
		$query = "UPDATE registration SET fname = '$fname',mname = '$mname',lname = '$lname' where id='$id'";
   $data =mysqli_query($conn, $query); 
        if($data)
          {
            echo "Data Modified!";
        }
      else
      {
        echo "Try Again!";
      }
        }
        ?>
 