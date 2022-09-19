<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


</head>
<body style="margin:50px;">
    <h1>List of students</h1>
<table class="table border">
  <tr>
    <th>StudentID</th>
    <th>first name</th>
    <th>Middle name</th>
    <th>family name</th>
    <th>Date of birth</th>
    <th>degree</th>
    <th>Major</th>
    <th>Address</th>
    <th>Age</th>
    <th>Tell-number</th>
  </tr>
  <?php
// Create connection
// $conn = new mysqli($servername, $username, $password ,"table name");

  $connection =new mysqli("localhost", "root", "", "students");

// Check connection
  if($connection->connect_error){
    die("connection failed: ". $connection->connect_error);
  }



  $sql = "SELECT * FROM students";
  $result =$connection->query($sql);
  if(!$result){
    die("Invalid query: ". $connection->error);
  }
  while($row=$result->fetch_assoc()){

    echo" <tr>
    <td>".$row["StudentID"] ."</td>
    <td>".$row["first name"]."</td>
    <td>".$row["Middle name"]."</td>
    <td>".$row["family name"]."</td>
    <td>".$row["Date of birth"]."</td>
    <td>".$row["degree"]."</td>
    <td>".$row["Major"]."</td>
    <td>".$row["Address"]."</td>
    <td>".$row["Age"]."</td>
    <td>".$row["Tell-number"]."</td>
  </tr>";
  }
 
 ?>
</table>

    
</body>
</html>