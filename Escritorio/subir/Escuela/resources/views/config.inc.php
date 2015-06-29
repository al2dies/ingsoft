<?php


// 
//  Creamos una función para realizar la conexión
//
function conectar(){
	$host     = 'localhost';
	$usuario = 'root';
	$password = 'root';
	$b_datos  = 'escuela';
	
	// Si no se realizó la conexión
	if ( ! $conex = mysql_connect($host,$usuario,$password)) {
	    echo "Error al realizar la conexión - ".mysql_error();
		exit();
	}
	
	// Si no se seleccionó la Base de Datos
	if ( ! mysql_select_db($b_datos) ) {
	    echo "Error al seleccionar la Base de Datos - ".mysql_error();
		exit();
	}	
	// retorno la conexion
	return $conex;
}

function conexion(){
	$hos     = 'localhost';
	$usuari = 'root';
	$passwor = 'root';
	$b_dato  = 'escuela';
	
	// Si no se realizó la conexión
	if ( ! $con = mysql_connect($hos,$usuari,$passwor)) {
	    echo "Error al realizar la conexión - ".mysql_error();
		exit();
	}
	
	// Si no se seleccionó la Base de Datos
	if ( ! mysql_select_db($b_dato) ) {
	    echo "Error al seleccionar la Base de Datos - ".mysql_error();
		exit();
	}	
	// retorno la conexion
	return $con;
}

// -----------------------------------------------------------------------------------------
//   Función para ejecutar una consulta
//   Si la consulta es de selección, nos retornara el resultado,
//   Si la consulta es de modificación retornara verdadero o falso
//   Parametros:   
//             $sql  : Consulta 
//             $conex: indicador de conexión
// -----------------------------------------------------------------------------------------
function ejecutar_sql($sql, $conex){
	if ( !$resultado = mysql_query($sql, $conex) ) {
		echo "Error al ejecutar la consulta SQL  <br>".mysql_error();
		exit();
	}
	return $resultado;
}
function ejecutar($sl, $con){
	if ( !$resul = mysql_query($sl, $con) ) {
		echo "Error al ejecutar la consulta SQL  <br>".mysql_error();
		exit();
	}
	return $resul;
}

?>