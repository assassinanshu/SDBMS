<?php
include("connection.php");
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Displaying ALL THE STUDENTS</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <form>
    <input type="submit" formaction="index.html" name="save" value="HOME" name="" class="btn" style="background-color: green;">
  </form>
    <h1>STUDENTS ENROLLED</h1>
  </head>
  <body>
</body>
</body>
</html>
<?php
  $query = "select * from registration";
  $connect = $conn-> query($query);
  echo "<table border='1'>
      <tr>
        <th>ID</th>
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
  if($connect-> num_rows > 0){
  while($result = $connect-> fetch_assoc())
          {
            $name = $result['id'];
            echo "<tr>";
        echo "<td>".$name."</td>";
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
    echo "</tr>";
          }
          echo "</table>";
        }
        ?>
  

