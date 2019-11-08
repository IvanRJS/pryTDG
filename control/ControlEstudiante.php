<?php 
class ControlEstudiante{
    var $objEstudiante;
    function __construct($objE){
        $this->objEstudiante=$objE;
    }
    function Guardar(){
        $objCtrCon= new CtrConexion();
        $objCtrCon->conectar("localhost", "root", "","bdtdg");
        $idpersona=$this->objEstudiante->getId_persona();
        $nombres=$this->objEstudiante->getNombres();
        $apellidos=$this->objEstudiante->getApellidos();
        $tel=$this->objEstudiante->getTelefono();
        $email=$this->objEstudiante->getEmail();
        $tipo=$this->objEstudiante->getTipo();
        $idEst=$this->objEstudiante->getId_estudiante();
        $prom=$this->objEstudiante->getPromedio();
        
        $comSql="INSERT INTO persona (id_persona, nombres, apellidos, telefono, email, tipo) VALUES ('$idpersona','$nombres','$apellidos','$tel','$email','$tipo')";
      
     
        if($objCtrCon->ejecutarQuery($comSql)){
            echo "Datos Persona guardados";
        }else{
            echo "error";
        };

        $comSql="INSERT INTO Estudiante (id_persona, id_estudiante, promedio) VALUES ('$idpersona','$idEst',$prom)";

        if($objCtrCon->ejecutarQuery($comSql)){
            echo "Datos Estudiante guardados";
        }else{
            echo "error";
        };
       
        $objCtrCon->cerrar();
    }
   

    function consultar(){
        $objCtrCon= new CtrConexion();
        $objCtrCon->conectar("localhost", "root", "","bdtdg");
        $idpersona=$this->objEstudiante->getId_persona();
    
        $comSql="SELECT * FROM estudiante e inner join persona p
                where e.id_persona=p.id_persona AND e.id_persona='$idpersona'";
      
        $info="";
        if($result=$objCtrCon->ejecutarQuery($comSql)){
        $row = $result->fetch_array(MYSQLI_ASSOC);
        $info= "Promedio: ".$row['promedio']."<br>".
                "nombres: ".$row['nombres']."<br>".
                "apellidos: ".$row['apellidos']."<br>".
                "telefono: ".$row['telefono']."<br>".
                "email: ".$row['email']."<br>";
            
            
        }else{
            echo"No se encontaron datos.";
        }
    
        $objCtrCon->cerrar();
        return $info;
    } 

    function actualizar(){
        $objCtrCon= new CtrConexion();
        $objCtrCon->conectar("localhost", "root", "","bdtdg");
        $idpersona=$this->objEstudiante->getId_persona();
        $nombres=$this->objEstudiante->getNombres();
        $apellidos=$this->objEstudiante->getApellidos();
        $tel=$this->objEstudiante->getTelefono();
        $email=$this->objEstudiante->getEmail();
        $tipo=$this->objEstudiante->getTipo();
        $idEst=$this->objEstudiante->getId_estudiante();
        $prom=$this->objEstudiante->getPromedio();

        $comSql="SELECT * FROM persona where id_persona='$idpersona'";
        
     
        if($objCtrCon->ejecutarQuery($comSql)){
       

            $comSql="UPDATE persona SET nombres='$nombres',apellidos='$apellidos',telefono='$tel',email='$email',tipo='$tipo' WHERE id_persona=$idpersona";
            $comSql2="UPDATE estudiante SET id_estudiante=$idEst,promedio=$prom WHERE id_persona='$idpersona'";
            if($objCtrCon->ejecutarQuery($comSql)&&$objCtrCon->ejecutarQuery($comSql2)){
                echo "Actualizado correctamente.";
            }else{
                echo "Error";
            } 
            
        }else{
            echo"No se encontaron datos.";
        }

    }

    function eliminar(){
        $objCtrCon= new CtrConexion();
        $objCtrCon->conectar("localhost", "root", "","bdtdg");
        $idpersona=$this->objEstudiante->getId_persona();

        $comSql="DELETE FROM estudiante WHERE id_persona = '$idpersona'";
        $comSql2="DELETE FROM persona WHERE id_persona = '$idpersona'";
     
        if($objCtrCon->ejecutarQuery($comSql)&&$objCtrCon->ejecutarQuery($comSql2)){
            echo "Datos eliminados";
        }else{
            echo "error";
        }


    } 




}

?>