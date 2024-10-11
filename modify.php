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
		<form action="#" method="POST" style="background-color: #EADDCA">
		<div class="container">  
  <center style="background-color: #EADDCA">  <h1> Student Details Modification Form</h1> </center>  
  <hr>  
  <label> Student ID </label>   
<input type="text" name="id" placeholder= "ID" size="15" required /> 
  <label> Firstname </label>   
<input type="text" name="fname" placeholder= "Firstname" size="15" required />   
<label> Middlename: </label>   
<input type="text" name="mname" placeholder="Middlename" size="15" required />   
<label> Lastname: </label>    
<input type="text" name="lname" placeholder="Lastname" size="15"required />  
<label for="birthday">Date Of Birth:</label>
<input type="date" id="birthday" name="bday"> 
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
<input type="text" name="phone" placeholder="phone no." size="10"/ required>   
Current Address :  
<textarea cols="80" rows="5" name="address" placeholder="Current Address" value="address" required>  
</textarea>  
 <label for="email"><b>Email</b></label>  
 <input type="text" placeholder="Enter Email" name="email" required>  
    
    <button type="submit" name="modify" class="btn">MODIFY</button>
    <input type="submit" formaction="index.html" name="save" value="HOME" name="" class="btn" style="background-color: green;">
	</form>
</div>

</body>
</html>
<?php
  if(isset($_POST['modify']))
  {
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $bday = $_POST['bday'];
    $course = $_POST['course'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $add = $_POST['address'];
    $email = $_POST['email'];

        $query = "UPDATE registration SET fname = '$fname',mname = '$mname',lname = '$lname',dob = '$bday',course = '$course',gender = '$gender',phno ='$phone',add='$add', email = '$email' where id='$id'";
        $data =mysqli_query($conn, $query); 
        if($data)
          {
            echo "<span class='jaggu'>Data Modified!";
        }
      else
      {
        echo "Try Again!";
      }
  }