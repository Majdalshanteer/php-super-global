
<?php
session_start();          
$_SESSION['taskName']=array(); 
$task_name=$_POST['task']; 

array_push($_SESSION['taskName'],$task_name);   


		
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>


<form method="POST" >
Task Name: <input type="text" name="task" required style="width:30%;">

<button type="submit" name="submit" id="add_btn" class="add_btn">Add Task</button>

<?php

?>


</form>
<table class="table">
	<thead>
		<tr>
			<th>Number of task</th>
			<th>Tasks</th>
			
		</tr>
	</thead>

	<tbody>
        <tr>
      <?php  if (isset($_SESSION['taskName']) && !empty($_SESSION['taskName'])) {?>
    <?php for($i = 0 ; $i < count($_SESSION['taskName']) ; $i++) {?>
        <td> <?php echo $i; ?> </td>
    <?php echo '<td>'.$_SESSION['taskName'][$i].'</td>';
     } } ?>
			
		
			</tr>
	
	</tbody>
</table>
