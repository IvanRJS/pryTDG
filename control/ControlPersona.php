<?php
class ControlPersona{
    var $objPersona;
    function __construct($objP){
        $this->objPersona=$objP;
    }

    function guardar(){
        $objCtrCon= new CtrConexion();
        $objCtrCon->conectar("localhost", "root", "","bdtdg");
        $idpersona=$this->objPersona->getId_persona();
        $nombres=$this->objPersona->getNombres();
        $apellidos=$this->objPersona->getApellidos();
        $tel=$this->objPersona->getTelefono();
        $email=$this->objPersona->getEmail();
        $tipo=$this->objPersona->getTipo();
        
        $comSql="INSERT INTO persona (id_persona, nombres, apellidos, telefono, email, tipo) VALUES ('$idpersona','$nombres','$apellidos','$tel','$email','$tipo')";
      
     
        if($objCtrCon->ejecutarQuery($comSql)){
            $objCtrCon->cerrar();
            return true;
        }
            $objCtrCon->cerrar();
            return false;
        
    }

    function eliminar(){
        $objCtrCon= new CtrConexion();
        $objCtrCon->conectar("localhost", "root", "","bdtdg");
        $idpersona=$this->objPersona->getId_persona();

        $comSql="DELETE FROM persona WHERE id_persona = '$idpersona'";
      
     
        if($objCtrCon->ejecutarQuery($comSql)){
            $objCtrCon->cerrar();
            return true;
        }
            $objCtrCon->cerrar();
            return false;


    } 

    function consultar(){
        $objCtrCon= new CtrConexion();
        $objCtrCon->conectar("localhost", "root", "","bdtdg");
        $idpersona=$this->objPersona->getId_persona();

        $comSql="SELECT * FROM persona where id_persona='$idpersona'";
      
     
        if($result=$objCtrCon->ejecutarQuery($comSql)){
        $row = $result->fetch_array(MYSQLI_ASSOC);
        $info= ["id"=>$row['id_persona'],
                "nombres"=>$row['nombres'],
               "apellidos"=>$row['apellidos'],
               "telefono"=>$row['telefono'],
               "email"=>$row['email'],
               "tipo"=>$row['tipo']];
            
        }else{
            echo"No se encontaron datos.";
        }
        $objCtrCon->cerrar();
        return $info;
    } 


    function actualizar(){
        $objCtrCon= new CtrConexion();
        $objCtrCon->conectar("localhost", "root", "","bdtdg");
        $idpersona=$this->objPersona->getId_persona();
        $nombres=$this->objPersona->getNombres();
        $apellidos=$this->objPersona->getApellidos();
        $tel=$this->objPersona->getTelefono();
        $email=$this->objPersona->getEmail();
        $tipo=$this->objPersona->getTipo();

        $comSql="SELECT * FROM persona where id_persona='$idpersona'";

            $comSql="UPDATE persona SET nombres='$nombres',apellidos='$apellidos',telefono='$tel',email='$email',tipo='$tipo' WHERE id_persona=$idpersona";
            if($objCtrCon->ejecutarQuery($comSql)){
                $objCtrCon->cerrar();
                return true;
            }
                $objCtrCon->cerrar();
                return false;
        

    }


}
?>