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
		<h1>UPDATE BY PHONE.NO</h1>
        <div class= "form" style="background-color: #EADDCA">
           <label> Student ID </label>   
          <input type="text" name="id" placeholder= "ID" size="15" required />    
        	<label>   
Phone :  
</label>    
<input type="text" name="phone" placeholder="phone no." size="10"/ required>

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
		$phno = $_POST['phone'];
		$query = "UPDATE registration SET phno = '$phno' where id='$id'";
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
 