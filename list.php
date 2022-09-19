<?php 
    // initialize errors variable
	// $errors = "";

	// connect to database
	$db = mysqli_connect("localhost", "root", "", "todo");

	// insert a quote if submit button is clicked
	if (isset($_POST['submit'])) {
		if (!empty($_POST['task'])) {
	
			$taskName = $_POST['task'];
			$sql = "INSERT INTO tasks (task) VALUES ('$taskName')";
			mysqli_query($db, $sql);
			header('location: list.php');
		}
	}
    // delete task
if (isset($_GET['del_task'])) {
	$id = $_GET['del_task'];

	mysqli_query($db, "DELETE FROM tasks WHERE id=".$id);
	header('location: list.php');
}


    $tasks = mysqli_query($db, "SELECT * FROM tasks");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do-List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>
	<div class="heading">
		<h2 style="font-style: 'Hervetica';">ToDo List </h2>
	</div>

	<form method="post" action="list.php" class="input_form">
      



		<input type="text" name="task" class="task_input" required>
		<button type="submit" name="submit" id="add_btn" class="add_btn">Add Task</button>
	</form>

    <br>
	<br>
<table class="table">
	<thead>
		<tr>
			<th>N</th>
			<th>Tasks</th>
			<th style="width: 60px;">Action</th>
		</tr>
	</thead>

	<tbody>
		<?php 
		// select all tasks if page is visited or refreshed
		

		$i=1; while ($row = mysqli_fetch_array($tasks)) { ?>
			<tr>
				<td> <?php echo $i; ?> </td>
				<td class="task"> <?php echo $row['task']; ?> </td>
				<td class="delete"> 
                <a href="list.php?del_task=<?php echo $row['id'] ?>">Delete</a> 
				</td>
			</tr>
		<?php $i++; } ?>	
	</tbody>
</table>
</body>
</html>