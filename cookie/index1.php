<?php
//inicio de sesion
session_start();
//variable de sesion count

if(!isset($_SESSION['count'])){
    $_SESSION['count']=0;
    
}else{
    $_SESSION['count']++;
}
?>
<html>
    <head>
        <title>Cookies</title>
    </head>
    <body>
<?php 
$cont=$_SESSION['count'];
echo 'Hola , has visitado esta página '.$cont.' veces ';
//elimina el valor de la variable session
//unset($_SESSION['count']);
?>
    </body>
</html>



