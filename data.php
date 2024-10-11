<?php
include("connection.php");
?> 
<!DOCTYPE html> 
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: #EADDCA;  
}  
.container {  
    padding: 50px;  
  background-color: #EADDCA;  
}  
  
input[type=text],textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
}  
</style>  
</head>  
<body>  
<form action="#" method="POST">  
  <div class="container">  
  <center>  <h1> Student Registeration Form</h1> </center>  
  <hr>  
  <label> ID </label>   
<input type="text" name="id" placeholder= "STUDENT ID" required />   
<label> GPA: </label>   
<input type="text" name="gpa" placeholder="GPA" required />   
<label> Attendance: </label>    
<input type="text" name="attend" placeholder="ATTENDANCE" required />  
 <label> OPEN ELECTIVE: </label>    
<input type="text" name="oe" placeholder="OPEN ELECTIVE" required />    
    <button type="submit" name="save" class="registerbtn">Register</button>      
</div>
</form>
</body>  
</html>
<?php
  if(isset($_POST['save']))
  {
    $id = $_POST['id'];
    $gpa = $_POST['gpa'];
    $attendance = $_POST['attend'];
    $oe = $_POST['oe'];

        $query = "INSERT INTO data (sid,gpa,attendance,OE) VALUES ('$id', '$gpa','$attendance','$oe')";
        $data = mysqli_query($conn,$query); 
        if($data)
          {
            echo "<script>alert('Success!');</script>";
        }
      else
      {
      }
  }
  ?>