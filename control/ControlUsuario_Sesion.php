<?php 
class ControlUsuario_Sesion{
    var $objUsuario_Sesion;
    function __construct($objC){
        $this->objUsuario_Sesion=$objC;
    }
    function guardar(){
        $objCtrCon= new CtrConexion();
        $objCtrCon->conectar("localhost", "root", "","bdtdg");
        $privilegios=$this->objUsuario_Sesion->getPrivilegios();
        $usuario=$this->objUsuario_Sesion->getUsuario();
        $clave=$this->objUsuario_Sesion->getClave();
        $idpersona=$this->objUsuario_Sesion->getId_persona();
        
        $comSql="INSERT INTO usuario_sesion (id_persona, privilegios, usuario, clave) VALUES ('$idpersona','$privilegios','$usuario','$clave')";
      
     
        if($objCtrCon->ejecutarQuery($comSql)){
            echo "Datos guardados";
        }else{
            echo "error";
        };

        
        $objCtrCon->cerrar();
    }
   

    function consultar(){
        $objCtrCon= new CtrConexion();
        $objCtrCon->conectar("localhost", "root", "","bdtdg");
        $idpersona=$this->objUsuario_Sesion->getId_persona();
    
        $comSql="SELECT * FROM usuario_sesion where id_persona ='$idpersona'";
      
        $info="";
        if($result=$objCtrCon->ejecutarQuery($comSql)){
        $row = $result->fetch_array(MYSQLI_ASSOC);
        $info=  "privilegios: ".$row['privilegios']."<br>".
                "usuario: ".$row['usuario']."<br>".
                "clave: ".$row['clave']."<br>";
                
            
            
        }else{
            echo"No se encontaron datos.";
        }
    
        $objCtrCon->cerrar();
        return $info;
    } 


    function eliminar(){
        $objCtrCon= new CtrConexion();
        $objCtrCon->conectar("localhost", "root", "","bdtdg");
        $idpersona=$this->objUsuario_Sesion->getId_persona();
        
        $comSql="DELETE FROM usuario_sesion WHERE id_persona = '$idpersona'";
            
     
        if($objCtrCon->ejecutarQuery($comSql)){
            echo "Datos eliminados";
        }else{
            echo "error";
        };

        
        $objCtrCon->cerrar();
    }

    function actualizar(){
        $objCtrCon= new CtrConexion();
        $objCtrCon->conectar("localhost", "root", "","bdtdg");
       
        $privilegios=$this->objUsuario_Sesion->getPrivilegios();
        $usuario=$this->objUsuario_Sesion->getUsuario();
        $clave=$this->objUsuario_Sesion->getClave();
        $idpersona=$this->objUsuario_Sesion->getId_persona();
        

        $comSql="SELECT * FROM usuario_sesion where id_persona='$idpersona'";
      
     
        if($objCtrCon->ejecutarQuery($comSql)){

            $comSql="UPDATE usuario_sesion SET privilegios='$privilegios',usuario='$usuario',clave='$clave' WHERE id_persona='$idpersona'";
            if($result=$objCtrCon->ejecutarQuery($comSql)){
                echo "Actualizado correctamente.";
            }else{
                echo "Error";
            }
            
        }else{
            echo"No existe el registo.";
        }
        $objCtrCon->cerrar();
    }

    function validarLogin(){
        $objCtrCon= new CtrConexion();
        $objCtrCon->conectar("localhost", "root", "","bdtdg");

        $usuario=$this->objUsuario_Sesion->getUsuario();
        $clave=$this->objUsuario_Sesion->getClave();
        

        $comSql="SELECT * FROM usuario_sesion where usuario ='$usuario' AND clave='$clave'";
        if($result=$objCtrCon->ejecutarQuery($comSql)){
            if(mysqli_num_rows($result)>0 ){
                $row = $result->fetch_array(MYSQLI_ASSOC);
                $objCtrCon->cerrar();
                return array(
                    "privilegios"=>$row['privilegios'],
                    "usuario"=>$row['usuario'],
                    "pass"=>$row['clave']
                        );
            }
        }else{
            $objCtrCon->cerrar();
            return  null;
        }

    }

}

?>