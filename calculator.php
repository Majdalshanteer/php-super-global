
<?php

?>
<!DOCTYPE html>

<head>
	<title>Calculator  in PHP </title>
</head>

<?php 
 $res = '';
 
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
   $res = '';

// if (is_numeric($num1) && is_numeric($num2))
if ($num1!=0 && $num2!=0) {
    switch ($operator) {
        case "Add +":
           $res = $num1 + $num2;
            break;
        case "Subtract -":
           $res = $num1 - $num2;
            break;
        case "Multiply *":
            $res = $num1 * $num2;
            break;
        case "Divide /":
            $res = $num1 / $num2;
    }
}
 
?>

<body>
    <div >
	<h1 style="color:pink">PHP  Calculator</h1>
	  <form action="" method="post" >
            <p>
                <label for="num1">Number one:</label>
                <input type="number" name="num1"  required="required" value="<?php echo $num1; ?>" /> 
            </p>
            <p>
            <label for="num2">  Number two: </label>
                <input type="number" name="num2"  required="required" value="<?php echo $num2; ?>" />
            </p>
           
          
            <input type="submit" name="operator" value="Add +" />
            <input type="submit" name="operator" value="Subtract -" />
            <input type="submit" name="operator" value="Multiply *" />
            <input type="submit" name="operator" value="Divide /" />  
             <br>
             <br>
            <p>
            <label   for="num2"> <b>Result: </b></label>
                <input style=" font-weight:bold" readonly="readonly" name="res" value="<?php echo $res; ?>" > 
            </p>
	  </form>
    </div>
</body>
</html>