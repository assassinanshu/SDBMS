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
    <h1>UPDATE COURSE</h1>
        <div class= "form" style="background-color: #EADDCA">
           <label> Student ID </label>   
          <input type="text" name="id" placeholder= "ID" size="15" required />    
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
    $course = $_POST['course'];
    $query = "UPDATE registration SET course = '$course' where id='$id'";
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
 