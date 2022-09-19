<?php
$mainColor='#FFF';
if($_SERVER['REQUEST_METHOD']=='POST'){
$mainColor= $_POST['color'];
setcookie('background',$mainColor,time()+3600*24*30,'/');
}
if(isset($_COOKIE['background'])){
    $body=$_COOKIE['background'];
}else{
    $body=$mainColor;
}


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modify cookie</title>
</head>
<body style="background-color:<?php echo $body;?>">
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" >
    <input type ="color" name="color">
    <input type="submit" value="choose">
</body>
</html>