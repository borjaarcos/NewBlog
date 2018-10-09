<?php

session_start();
//definir dos variables de sesion
//bgcolor y textcolor
if(!isset($_SESSION['bgcolor'])){
    $_SESSION['bgcolor']=0;
}

if(!isset($_SESSION['textcolor'])){
    $_SESSION['textcolor']=225;
}
?>
<html>
    <head>
        <title>Colors</title>
    </head>
    <?php 
$bgcolor=$_SESSION['bgcolor'];
$textcolor=$_SESSION['textcolor'];
    echo '<body bgcolor="$bgcolor" text="$textcolor">';
?>
    </body>
</html>
