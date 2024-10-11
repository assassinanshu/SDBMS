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
<title>Student Database</title>
</head>  
<body>  
<form action="#" method="POST">  
  <div class="container">  
  <center>  <h1> Student Registeration Form</h1> </center>  
  <hr>  
  <label> Firstname </label>   
<input type="text" name="fname" placeholder= "Firstname" size="15" required />   
<label> Middlename: </label>   
<input type="text" name="mname" placeholder="Middlename" size="15" required />   
<label> Lastname: </label>    
<input type="text" name="lname" placeholder="Lastname" size="15"required />  
<label for="birthday">Date Of Birth:</label>
<input type="date" id="birthday" name="dob"> 
<div>  
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
</div>  
<div>  
<label>   
Gender :  
</label><br>  
<input type="radio" value="Male" name="gender" checked > Male   
<input type="radio" value="Female" name="gender"> Female   
<input type="radio" value="Other" name="gender"> Other  
  
</div>  
<label>   
Phone :  
</label>    
<input type="text" name="phno" placeholder="phone no." required>   
Current Address :  
<textarea cols="80" rows="5" name="address" placeholder="Current Address" value="address" required>  
</textarea>  
 <label for="email"><b>Email</b></label>  
 <input type="text" placeholder="Enter Email" name="email" required>  
    
    <button type="submit" name="save" class="registerbtn">Register</button> 
    <input type="submit" formaction="index.html" name="save" value="HOME" name="" class="btn" style="background-color: green;">   
</form>  
</body>  
</html>
<?php
  if(isset($_POST['save']))
  {
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $course = $_POST['course'];
    $gender = $_POST['gender'];
    $phno = $_POST['phno'];
    $address = $_POST['address'];
    $email = $_POST['email'];

        $query = "INSERT INTO registration (fname,mname,lname,dob,course,gender,phno,address,email) VALUES ('$fname', '$mname','$lname','$dob','$course','$gender','$phno','$address','$email')";
        $data = mysqli_query($conn,$query);   
        if($data)
          {
            echo "<script>alert('Success!');</script>";
        }
      else
      {
        echo "<script>alert('Try Again!');</script>";
      }
  }
  ?>