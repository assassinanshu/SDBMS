<!DOCTYPE html>
<?php
include("connection.php");
?>  
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
  <center>  <h1> Student Data Modification Form</h1> </center>  
  <hr>  
  <label> ID </label>   
<input type="text" name="sid" placeholder= "STUDENT ID" size="15" required />   
<label> GPA: </label>   
<input type="text" name="gpa" placeholder="GPA" size="15" required />   
<label> Attendance: </label>    
<input type="text" name="attendance" placeholder="Attendance" size="15"required />  
<label> Open Elective: </label>    
<input type="text" name="oe" placeholder="OE" size="15"required /> 
<div>  
    
    <button type="submit" name="save" class="registerbtn">Register</button>   
    <input type="submit" formaction="index.html" name="save" value="HOME" name="" class="btn" style="background-color: green;"> 
</form>  
</body>  
</html>
<?php
  if(isset($_POST['save']))
  {
    error_reporting(0);
    $sid = $_POST['sid'];
    $gpa = $_POST['gpa'];
    $attendance = $_POST['attendance'];
    $oe = $_POST['oe'];

        $query = "UPDATE data SET gpa = '$gpa', attendance = '$attendance', OE = '$oe' where sid='$sid'";
        $data = mysqli_query($conn,$query); 
        if($data)
          {
            //echo "<script>alert('Success!');</script>";
        }
      else
      {
      }
  }
  ?>