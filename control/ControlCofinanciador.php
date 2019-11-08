<?php 
class ControlCofinanciador{
    var $objCofinanciador;
    function __construct($objC){
        $this->objCofinanciador=$objC;
    }
    function guardar(){
        $objCtrCon= new CtrConexion();
        $objCtrCon->conectar("localhost", "root", "","bdtdg");
        $nombre=$this->objCofinanciador->getNombre();
        $tel=$this->objCofinanciador->getTelefono();
        $email=$this->objCofinanciador->getEmail();
        $idCof=$this->objCofinanciador->getId_cofinanciador();
        
        $comSql="INSERT INTO cofinanciador (id_cofinanciador, nombre, telefono, email) VALUES ('$idCof','$nombre','$tel','$email')";
      
     
        if($objCtrCon->ejecutarQuery($comSql)){
            echo "Datos Cofinanciador guardados";
        }else{
            echo "error";
        };

        
        $objCtrCon->cerrar();
    }
   

    function consultar(){
        $objCtrCon= new CtrConexion();
        $objCtrCon->conectar("localhost", "root", "","bdtdg");
        $idCof=$this->objCofinanciador->getId_cofinanciador();
    
        $comSql="SELECT * FROM cofinanciador where id_cofinanciador ='$idCof'";
      
        $info="";
        if($result=$objCtrCon->ejecutarQuery($comSql)){
        $row = $result->fetch_array(MYSQLI_ASSOC);
        $info=  "nombre: ".$row['nombre']."<br>".
                "telefono: ".$row['telefono']."<br>".
                "email: ".$row['email']."<br>";
            
            
        }else{
            echo"No se encontaron datos.";
        }
    
        $objCtrCon->cerrar();
        return $info;
    } 


    function eliminar(){
        $objCtrCon= new CtrConexion();
        $objCtrCon->conectar("localhost", "root", "","bdtdg");
        $idCof=$this->objCofinanciador->getId_cofinanciador();
        
        $comSql="DELETE FROM cofinanciador WHERE id_cofinanciador = '$idCof'";
            
     
        if($objCtrCon->ejecutarQuery($comSql)){
            echo "Datos Cofinanciador eliminados";
        }else{
            echo "error";
        };

        
        $objCtrCon->cerrar();
    }

    function actualizar(){
        $objCtrCon= new CtrConexion();
        $objCtrCon->conectar("localhost", "root", "","bdtdg");
       
        $nombre=$this->objCofinanciador->getNombre();
        $tel=$this->objCofinanciador->getTelefono();
        $email=$this->objCofinanciador->getEmail();
        $idCof=$this->objCofinanciador->getId_cofinanciador();
        

        $comSql="SELECT * FROM cofinanciador where id_cofinanciador='$idCof'";
      
     
        if($objCtrCon->ejecutarQuery($comSql)){

            $comSql="UPDATE cofinanciador SET nombre='$nombre',telefono='$tel',email='$email' WHERE id_cofinanciador='$idCof'";
            if($result=$objCtrCon->ejecutarQuery($comSql)){
                echo "Actualizado correctamente.";
            }else{
                echo "Error";
            }
            
        }else{
            echo"No existe el registo.";
        }

    }



}

?>