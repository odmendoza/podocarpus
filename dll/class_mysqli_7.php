<?php
class clase_mysqli7{

	/*variables de conexoion*/
	var $BaseDatos;
	var $Servidor;
	var $Usuario;
	var $Clave;

	/*identificacion de error y texto de error*/
	var $Errno = 0;
	var $Error = "";

	/*identificacion de conexion y consulta*/
	var $Conexion_ID=0;
	var $Consulta_ID=0;

  	public function __construct($host="", $user="", $pass="", $db="") {
  		$this->BaseDatos=$db;
		$this->Servidor=$host;
		$this->Usuario=$user;
		$this->Clave=$pass;
  	}

	/*conexion al servidor de db*/
	function conectar($host, $user, $pass, $db){
		if($db != "")$this->BaseDatos=$db;
		if($host != "")$this->Servidor=$host;
		if($user != "")$this->Usuario=$user;
		if($pass != "")$this->Clave=$pass;
		/*conectar al servidor*/
		$this->Conexion_ID = new mysqli($this->Servidor, $this->Usuario, $this->Clave, $this->BaseDatos);
		if(!$this->Conexion_ID){
			$this->Error="Ha fallado la conexion";
			return 0;
		}
		return$this->Conexion_ID;
	}

	/*funcion para ejecutar sentencias sql*/
  	function consulta($sql=""){
		if($sql==""){
			$this->Error="NO hay ninguna sentencia sql";
			return 0;
		}
		/*Ejecutar la cunsulta*/
		//$this->Consulta_ID=$this->Conexion_ID->query($sql);
		$this->Consulta_ID=mysqli_query($this->Conexion_ID,$sql);

		if(!$this->Consulta_ID){
			print $this->Conexion_ID->error;
			//$this->Errno->error;
		}
		return $this->Consulta_ID;
	}

	/*retorna el numero de campos de la consulta*/
	function numcampos(){
		return mysqli_num_fields($this->Consulta_ID);
	}

	/*retorna de campos de la consulta*/
	function numregistros(){
		return mysqli_num_rows($this->Consulta_ID);
	}

	/*funcion para mostrar la consulta en forma de tabla*/
	function verconsulta(){
		echo "<table class='table'>";
		echo "<thead>";
		echo "<tr>";
		for ($i=0; $i < $this->numcampos() ; $i++) {
			//echo "<td>".$this->nombrecampo($i)."</td>";
			echo  "<td scope='col'>".mysqli_fetch_field_direct($this->Consulta_ID, $i)->name."</td>";
		}
		echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
		while ($row=mysqli_fetch_array($this->Consulta_ID)) {
			echo "<tr>";
			for ($i=0; $i < $this->numcampos(); $i++) { 
				echo "<td scope='row'>".$row[$i]."</td>";
			}
			echo "</tr>";
		}
        echo "</tbody>";
		echo "</table>";
	}


	/*funcion para mostrar la consulta en forma de tabla*/
	function verconsultacrud(){
        echo "<table class='table'>";
        echo "<thead>";
        echo "<tr>";
        for ($i=0; $i < $this->numcampos() ; $i++) {
            //echo "<td>".$this->nombrecampo($i)."</td>";
            echo  "<td scope='col'>".mysqli_fetch_field_direct($this->Consulta_ID, $i)->name."</td>";
        }
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while ($row=mysqli_fetch_array($this->Consulta_ID)) {
            echo "<tr>";
            for ($i=0; $i < $this->numcampos() - 1; $i++) {
                echo "<td scope='row'>".$row[$i]."</td>";
            }
            echo "<td scope='row'> <img src='".$row[6]."' class='img-fluid'</td>";
            //Edite
            echo '<td><a href="edit-specie.php?id='.$row[0].'">';
            echo '<button type="button"><i class="fas fa-edit"></i></button>';
            echo '</a></td>';
            // Delete
            echo '<td><a href="actions/delete.php?id='.$row[0].'">';
            echo '<button type="button"><i class="fas fa-trash-alt"></i></button>';
            echo '</a></td>';
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
	}

	/*Retorna una lista de la consulta*/
	function consulta_lista(){
		while ($row = mysqli_fetch_array($this->Consulta_ID)) {
			for ($i=0; $i < $this->numcampos(); $i++) { 
				$row[$i];
			}
			return $row;
		}
	}

	/*Renorna in json de la consulta*/
	function consulta_json(){
		while ($row = mysqli_fetch_array($this->Consulta_ID)) {
			$data[]=$row;
		}
		echo json_encode(array("sensores"=>$data));
	}

	/*Retorna un json de una consulta*/
	function consulta_busqueda_json(){
		if($this->numcampos() > 0){
			while ($row = mysqli_fetch_array($this->Consulta_ID)) {
				$data[]=$row;
			}
		    $resultData = array('status' => true, 'postData' => $data);
	    }else{
	    	$resultData = array('status' => false, 'message' => 'No Post(s) Found...');
	    }

	    echo  json_encode($resultData);
	}
}
?>