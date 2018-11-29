<?php
class zapatos{
    
    public function llistazapas(){
        // Mètode que valida un usuari
        // Retornarà el rol de l'usuari si aquest està registrat
        // o false si no ho està
        try{
            require_once "connexio.php";
            $cadenaConnexio="mysql:host=".$connexio["servidor"].";dbname=".$connexio['bd'];
            $db = new PDO($cadenaConnexio, $connexio["usuari"], $connexio["contrassenya"]); 
            $consulta = $db->prepare('SELECT nombre, categoria, img FROM zapatos');
        
            $consulta->execute();
            
            $zapatos=array();
            while($fila=$consulta->fetch()){ //asi estem creant un array(zapatos) en el cual nem a guardar el array que creare dins del while(zapato), cada fila fa referencia al mateix nº de fila de la BD.(perque la consulta es de tot *, si fora especifica niria per orden de consulta.)

                $zapato["nombre"]=$fila[0];
                $zapato["categoria"]=$fila[1];
                $zapato["img"]=$fila[2];
                array_push($zapatos, $zapato);
            }
            $db=null;
            return $zapatos;

        } catch (Exception $e){
            echo("Error:".$e->getMessage());
            $db=null;
        }
    }
    public function anadirzapas($nombre, $categoria, $img){
        // Mètode que valida un usuari
        // Retornarà el rol de l'usuari si aquest està registrat
        // o false si no ho està
        try{
            require_once "connexio.php";
            $cadenaConnexio="mysql:host=".$connexio["servidor"].";dbname=".$connexio['bd'];
            $db = new PDO($cadenaConnexio, $connexio["usuari"], $connexio["contrassenya"]); 
            $consulta = $db->prepare('SELECT *  FROM zapatos WHERE nombre = ? OR img= ?');// aqui los parametros deberan ser igual llamados que son en la BD
            $consulta->execute(array($nombre, $img));
            $resultado= $consulta->fetch();

            if ($resultado){
                ?>
                <div class="alert alert-dismissible alert-warning">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <h4 class="alert-heading">ERROR!</h4>
                <p class="mb-0">El producto que usted esta intentando añadir YA existe. <a href="formproduct.php" class="alert-link">Registrar producto nuevo</a>.</p>
              </div>
<?php

            }
            
            else {
                
            
            $consultados = $db->prepare("INSERT INTO `zapatos` (`nombre`, `categoria`, `img`) VALUES (?, ?, ?)");
            $consultados->execute(array($nombre, $categoria, $img));
            header ("location:products.php");
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

    