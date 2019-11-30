<?php
class ControlProducto{

var $objProducto;

function __construct($objProducto){
    $this->objProducto=$objProducto;
}


function consultar(){
    $objCtrCon= new CtrConexion();
    $objCtrCon->conectar("localhost", "root", "","bdtdg");
    $id=$this->objProducto->getId_producto();

    $comSql="SELECT * FROM producto";
  
    $info= array();
    if($result=$objCtrCon->ejecutarQuery($comSql)){
         $i=0;
    while($row = $result->fetch_array(MYSQLI_ASSOC)){
        $info[$i][0]= $row['id_producto'];
        $info[$i][1]= $row['fecha'];
        $info[$i][2]= $row['categoria_producto'];
        
        $i++;
    }
   
           
        
    }else{
        echo"No se encontaron datos.";
    }

    $objCtrCon->cerrar();
    return $info;
} 



}


?>