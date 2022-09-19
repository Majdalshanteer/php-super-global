<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  url: <input type="text" name="url"  placeholder="www.example.com">

  <?php
  echo"<br><br>";
  ?>
  <input type="submit" value="Go">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // collect value of input field
  $webLink = $_POST['url'];
  if (empty($webLink)) {
    echo "Write your url";
  } else {
    //redirected method
    header("Location: http://$webLink", true, 301);
exit();
  }
  echo"<br><br>";

}

?>




</body>
</html>