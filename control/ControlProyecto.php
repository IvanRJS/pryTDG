<?php
class ControlProyecto{

var $objProyecto;

function __construct($objProyecto){
    $this->objProyecto=$objProyecto;
}

function guardar(){
    $titulo=$this->objProyecto->getTitulo();
    $fins=$this->objProyecto->getFechaInsc();
    $fini=$this->objProyecto->getFechaIni();
    $ffin=$this->objProyecto->getFechaFin();
    $cof=$this->objProyecto->getCofinanciado();
    $pre=$this->objProyecto->getPresupuesto();
    $pcof=$this->objProyecto->getPorcCof();
    $est=$this->objProyecto->getEstado();
    $obs=$this->objProyecto->getObservaciones();
    $tipo=$this->objProyecto->getTipoProyecto();
    

$comSql="INSERT INTO PROYECTO (titulo, fechaInsc, fechafin, fechaini, cofinanciado, presupuesto, porccof, estado, observaciones, tipo_proyecto) VALUES ('$titulo','$fins','$ffin','$fini','$cof',$pre,$pcof,'$est','$obs','$tipo')";

$objCtrCon= new CtrConexion();
$objCtrCon->conectar("localhost", "root", "","BDTDG");

if($objCtrCon->ejecutarQuery($comSql)){
    $objCtrCon->cerrar();
    return true;
}
    $objCtrCon->cerrar();
    return false;

}

function actualizar(){

    $objCtrCon= new CtrConexion();
    $objCtrCon->conectar("localhost", "root", "","bdtdg");
    $id=$this->objProyecto->getId();
    $titulo=$this->objProyecto->getTitulo();
    $fins=$this->objProyecto->getFechaInsc();
    $fini=$this->objProyecto->getFechaIni();
    $ffin=$this->objProyecto->getFechaFin();
    $cof=$this->objProyecto->getCofinanciado();
    $pre=$this->objProyecto->getPresupuesto();
    $pcof=$this->objProyecto->getPorcCof();
    $est=$this->objProyecto->getEstado();
    $obs=$this->objProyecto->getObservaciones();
    $tipo=$this->objProyecto->getTipoProyecto();
    $tipo=$this->objProyecto->getTipoProyecto();

$comSql="UPDATE PROYECTO SET TITULO='$titulo',FECHAINSC='$fins',FECHAFIN='$ffin',FECHAINI='$fini',COFINANCIADO='$cof',PRESUPUESTO='$pre',PORCCOF='$pcof',ESTADO='$est',OBSERVACIONES='$obs',TIPO_PROYECTO='$tipo' where id_proyecto=$id";


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
    $id=$this->objProyecto->getId();

    $comSql="DELETE FROM proyecto WHERE id_proyecto = $id";
  

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
    $id=$this->objProyecto->getId();

    $comSql="SELECT * FROM proyecto where id_proyecto=$id";
  
    $info="";
    if($result=$objCtrCon->ejecutarQuery($comSql)){
    $row = $result->fetch_array(MYSQLI_ASSOC);
    $info= ["id"=>$row['id_proyecto'],
            "titulo"=>$row['titulo'],
            "fechaIns"=>$row['fechaInsc'],
            "fechaIni"=>$row['fechaini'],
            "fechaFin"=>$row['fechafin'],
            "cofinanciado"=>$row['cofinanciado'],
            "presupuesto"=>$row['presupuesto'],
            "porcentaje"=>$row['porccof'],
            "estado"=>$row['estado'],
            "observaciones"=>$row['observaciones'],
            "tipo"=>$row['tipo_proyecto']];
        
        
    }else{
        echo"No se encontaron datos.";
    }

    $objCtrCon->cerrar();
    return $info;
} 



}


?>