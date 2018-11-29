<?php
class Usuari{
    
    public function validaUsuari($usuari, $pass){
        // Mètode que valida un usuari
        // Retornarà el rol de l'usuari si aquest està registrat
        // o false si no ho està
        try{
            require_once "connexio.php";
            $cadenaConnexio="mysql:host=".$connexio["servidor"].";dbname=".$connexio['bd'];
            $db = new PDO($cadenaConnexio, $connexio["usuari"], $connexio["contrassenya"]); 
            $consulta = $db->prepare('SELECT rol FROM Usuari WHERE login = ? AND Password = ?');
        
            $consulta->execute(array($usuari, $pass));
            
            $role=false;
            while($fila=$consulta->fetch()){
                $role=$fila[0];
            }
            $db=null;
            return $role;
        } catch (Exception $e){
            echo("Error:".$e->getMessage());
            $db=null;
        }
    }
    public function registUsuari($usuari, $pass, $correu){
        // Mètode que valida un usuari
        // Retornarà el rol de l'usuari si aquest està registrat
        // o false si no ho està
        try{
            require_once "connexio.php";
            $cadenaConnexio="mysql:host=".$connexio["servidor"].";dbname=".$connexio['bd'];
            $db = new PDO($cadenaConnexio, $connexio["usuari"], $connexio["contrassenya"]); 
            $consulta = $db->prepare('SELECT *  FROM Usuari WHERE login = ? OR email= ?');
            $consulta->execute(array($usuari, $correu));
            $resultado= $consulta->fetch();

            if ($resultado){
                ?>
                <div class="alert alert-dismissible alert-warning">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <h4 class="alert-heading">ERROR!</h4>
                <p class="mb-0">El usuario con el que esta intentando iniciar session YA existe. <a href="loginform.php" class="alert-link">Registrar usuario nuevo</a>.</p>
              </div>
<?php

            }
            
            else {
                
            
            $consultados = $db->prepare("INSERT INTO `Usuari` (`login`, `rol`, `password`, `email`) VALUES (?, 'user', ?, ?)");
            $consultados->execute(array($usuari, $pass, $correu));
            header ("location:login.php");
            }
            $db=null;
            
        } 
        catch (Exception $e){
            echo("Error:".$e->getMessage());
            $db=null;
        }
    }
}
?>