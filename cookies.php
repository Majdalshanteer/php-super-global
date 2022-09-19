<?php
setcookie("school","channel",time()+(3600*24*30),"/","localhost",TRUE,TRUE);

//check if cookie active on your device
if(count($_COOKIE)>0){
    echo " active";
}else{
    echo"no";
}
//print all cookie
echo"<pre>";
print_r($_COOKIE);
echo"</pre>";
//modify cookie
