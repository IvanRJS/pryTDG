<?php

class CtrConexion{
	
	var $conn;
	function __construct(){
		$this->conn=null;
	}
    function conectar($servidor, $usuario, $password,$db){

    	try	{
			//$enlace = mysqli_connect($servidor, $usuario, $password, "");
			$this->conn = new mysqli($servidor, $usuario, $password, $db);
      	}
      	catch (Exception $e){
          	echo "ERROR AL CONECTARSE AL SERVIDOR ".$e->getMessage()."\n";
      	}

    }

    function cerrar() {
		try{
       $this->conn->close();
		}
      	catch (Exception $e){
          	echo "ERROR AL CONECTARSE AL SERVIDOR ".$e->getMessage()."\n";
      	}		
    }



	function ejecutarQuery($sql) {
			try	{
		
				$recordSet=$this->conn->query($sql);
				}
	
			catch (Exception $e) {
					echo " NO SE AFECTARON LOS REGISTROS: ". $e->getMessage()."\n";
			  }	
		return $recordSet;
			}   
}
?>
