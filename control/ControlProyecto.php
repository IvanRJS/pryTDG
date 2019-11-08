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
    

$comandoSql="INSERT INTO PROYECTO (titulo, fechaInsc, fechaini, fechafin, cofinanciado, presupuesto, porccof, estado, observaciones, tipo_proyecto) VALUES ('$titulo','$fins','$ffin','$fini','$cof',$pre,$pcof,'$est','$obs','$tipo')";

$objCtrCon= new CtrConexion();
$objCtrCon->conectar("localhost", "root", "","BDTDG");
if($objCtrCon->ejecutarQuery($comandoSql)){
    echo "Datos Guardados";
}else{
    echo "error, no se gurdaron los datos";
}
$objCtrCon->cerrar();

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
    echo "Datos Actualizados";
}else{
    echo "error";
}

$objCtrCon->cerrar();

}

function eliminar(){
    $objCtrCon= new CtrConexion();
    $objCtrCon->conectar("localhost", "root", "","bdtdg");
    $id=$this->objProyecto->getId();

    $comSql="DELETE FROM proyecto WHERE id_proyecto = $id";
  
 
    if($objCtrCon->ejecutarQuery($comSql)){
        echo "Datos eliminados";
    }else{
        echo "error";
    }

    $objCtrCon->cerrar();
} 

function consultar(){
    $objCtrCon= new CtrConexion();
    $objCtrCon->conectar("localhost", "root", "","bdtdg");
    $id=$this->objProyecto->getId();

    $comSql="SELECT * FROM proyecto where id_proyecto=$id";
  
    $info="";
    if($result=$objCtrCon->ejecutarQuery($comSql)){
    $row = $result->fetch_array(MYSQLI_ASSOC);
    $info= "Titulo: ".$row['titulo']."<br>".
            "Fecha inscripcion: ".$row['fechaInsc']."<br>".
            "Fecha Inicio: ".$row['fechaini']."<br>".
            "Fecha Fin: ".$row['fechafin']."<br>".
            "Cofinanciado: ".$row['cofinanciado']."<br>".
            "Presupuesto: ".$row['presupuesto']."<br>".
            "Porcentaje Cofinanciado: ".$row['porccof']."<br>".
            "Estado: ".$row['estado']."<br>".
            "Observaciones: ".$row['observaciones']."<br>".
            "Tipo proyecto: ".$row['tipo_proyecto']."<br>";
        
        
    }else{
        echo"No se encontaron datos.";
    }

    $objCtrCon->cerrar();
    return $info;
} 



}


?>