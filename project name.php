<?php
$starttime = microtime(true); // Top of page
// Code

//PHP_SELF Returns the filename of the currently executing script
echo $_SERVER['PHP_SELF'];
echo "<br>";

echo "<br>";
// SCRIPT_NAME Returns the path of the current script
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo "<br>";
// REQUEST_TIME Returns the timestamp of the start of the request 
echo $_SERVER['REQUEST_TIME'];

echo "<br>";
echo "<br>";

?>

<?php 
 
// $count_page = ("hitcount.txt");
// $hits = file($count_page);
// $hits[0] ++;
 
// $fp = fopen($count_page , "w");
// fputs($fp , "$hits[0]");
// fclose($fp);
// echo 'counter on Refresh is\ number of visitors: ' .$hits[0];
 
?> 

<?php
session_start();
$_SESSION['name']='majd';
// include 'c.php';

if(empty($_SESSION['counter'])){
    $_SESSION['counter']=1;
}else{
    $_SESSION['counter']++;
}
echo "you veiwed this page ".$_SESSION['counter']. "times ";
echo "<br>";
echo "<br>";

$endtime = microtime(true); // Bottom of page

printf("Page loaded in %f seconds", $endtime - $starttime );
?>