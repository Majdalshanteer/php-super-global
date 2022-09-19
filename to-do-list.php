<?php
SESSION_start();
// if($_SERVER['REQUEST_METHOD']=='POST'){
//     echo $_POST['text']."<br";

    if (isset($_SESSION['submit'])) {
	
			 $task = $_POST['text'];
          
    }	
		
?>

<form method='POST' action="<?php echo $_SERVER['PHP_SELF']?>">
Task Name: <input type="text" name="text" required style="width:30%;">

<button type="submit" name="submit" id="add_btn" class="add_btn">Add Task</button>


</form>


<table>
	<thead>
		<tr>
			<th>N</th>
			<th>Tasks</th>
		
		</tr>
	</thead>

	<tbody>
		<?php 
        
    if (isset($_SESSION['submit'])) {
        for($i=0;$i<count($_SESSION['text']);$i++){?>

            <tr>
            <td> <?php echo $i; ?> </td>
            <td class="task"> <?php
            echo $_SESSION['text'][$i];
               echo $task ;
         } ?>
            
         </td>
           
            </td>
        </tr>
	
	</tbody>

    <?php } ?>
</table>
