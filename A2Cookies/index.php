<style>
    #h{
        color:red;
    }
</style>

<?php
session_start();

try{
$dades=(array)json_decode(file_get_contents('app/json.json'));

if(isset($_POST) && !empty($_POST['pass1']) && !empty($_POST['Email']))
     {
            foreach ($dades as $dada) 
                {

                  $email=htmlspecialchars($_POST['Email']);
                  $pass=htmlspecialchars($_POST['pass1']);
                  
                if($dada->email ==$email && $dada->pass == $pass)
                    {
                    
                    if($_POST['check'])
                    {
                          $_SESSION['Usuario']=$dada->name;
                          $_SESSION['Email']=$dada->pass;
                          $_SESSION['Password']=$dada->email;
                           setcookie("Usuario", $dada->name, time()+3600, "/A2", "dgonzalez.cesnuria.com");
                          setcookie("Password",$dada->pass, time()+3600, "/A2", "dgonzalez.cesnuria.com");
                          setcookie("Email",$dada->email, time()+3600, "/A2", "dgonzalez.cesnuria.com");
                          header("Location:pag2.php");
                          
                         
                    }
                      

                    header("Location:pag2.php");
                    }
                    
                }
                    
               
      }
       
}catch(Exception $e){
  echo 'Error:'.$e;
}

?>
<html>
    <head>
        <title>Menu principal</title>
    </head>
    <body>
       
        <h1>LOGIN</h1></br>
 <form action="<?= $SERVER['PHP_SELF'];?>" method="post">
       
       <p>Email: <input type="text" name="Email" value="<?php echo $_COOKIE['Email']; ?>"></p>
       <p>Password: <input type="password" name="pass1" value="<?php echo $_COOKIE['Password']; ?>"></p>
      <input type="checkbox" name="check" /> Recordar Contraseña<br>
      <br> <input type="submit" name="enviar" value="enviar"> 
  </form>
    </body>
</html>


