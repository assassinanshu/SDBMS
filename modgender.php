<?php
include("connection.php");
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Software Development</title>

<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body style="background-color: #EADDCA">
  <div class = "center" style="background-color: #EADDCA">
    <form action="#" method="POST">
    <h1>UPDATE BY GENDER</h1>
        <div class= "form" style="background-color: #EADDCA">
           <label> Student ID </label>   
          <input type="text" name="id" placeholder= "ID" size="15" required />    
          <label>   
Gender :  
</label><br>  
<input type="radio" value="Male" name="gender" checked > Male   
<input type="radio" value="Female" name="gender"> Female   
<input type="radio" value="Other" name="gender"> Other  
  
</div>  
<label>   
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
    $gender = $_POST['gender'];
    $query = "UPDATE registration SET gender = '$gender' where id='$id'";
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
 