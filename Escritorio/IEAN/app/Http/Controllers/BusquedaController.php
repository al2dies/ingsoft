<?php
namespace App\Http\Controllers;
class BusquedaController extends Controller {

public function menu(){

return view('menu');

}

	public function iralmenu(){

		  $usuario     = $_POST['usu'];
	$contrasena  = $_POST['pass'];


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
	
	$conex= conectar();
	
	$sql = "SELECT * FROM usuario WHERE email = '$usuario' AND password = '$contrasena'";

	
	function ejecutar_sql($sql, $conex){
	if ( !$resultado = mysql_query($sql, $conex) ) {
		echo "Error al ejecutar la consulta SQL  <br>".mysql_error();
		exit();
	}
	return $resultado;
}
	$resultado = ejecutar_sql($sql, $conex);

	
	if (mysql_num_rows($resultado) != 0) {


		return  View('menu');
			} else{
		echo "<br><center><font color='red' size='5'>Usuario o contraseña incorrectas</font></center></br>";
		return View('inicio');
	}
	
	// Limpiamos el resultado
	mysql_free_result($resultado);
	
	// cerramos la conexión
	mysql_close($conex);

	}

	public function buscarasial()
	{
		return view('buscarasignaturaalumno');
	}

	public function buscarcodreg()
	{

		return view('busquedaasigal');
	}


	public function modificacionasig()
	{

       $codigo     = $_GET['cod'];
		$asignatura  = $_GET['nomb'];
// Creamos la conexion al servidor
// Si ocurre algun error muestra el mensaje de la funcion die() y termina la ejecución del script
$conexion = mysql_connect('localhost','root','root') or die('Error de conexión - '.mysql_error());

// Despues de conectado seleccionamos la Base de Datos
mysql_select_db('escuela');


$sql = "UPDATE  `escuela`.`asignaturaalumno` SET  `asignatura` ='$asignatura' WHERE  `asignaturaalumno`.`codigo` =$codigo;";
// Ejecutamos la consulta
if (mysql_query($sql, $conexion)) {
     echo "<br><center><font color='red' >asignatura modificada al alumno  sa</font></center>" ;
     return view('registroasignaturasalumnos');
} else {
	echo "Error al ejecutar la consulta - ".mysql_error();

	}



}

	public function buscarasipro()
	{

		return view('buscarasignaturaprofesor');
	}


public function buscarcodregpro()
	{

		return view('busquedaasigpro');
	}




public function modificacionasigpro()
	{

       $codigo     = $_GET['cod'];
		$asignatura  = $_GET['nomb'];
		



// Creamos la conexion al servidor
// Si ocurre algun error muestra el mensaje de la funcion die() y termina la ejecución del script
$conexion = mysql_connect('localhost','root','root') or die('Error de conexión - '.mysql_error());

// Despues de conectado seleccionamos la Base de Datos
mysql_select_db('escuela');


$sql = "UPDATE  `escuela`.`asignaturaprofesor` SET  `asignatura` ='$asignatura' WHERE  `asignaturaprofesor`.`cod` =$codigo;";
// Ejecutamos la consulta
if (mysql_query($sql, $conexion)) {
     echo "<br><center><font color='red' >asignatura modificada a profesor </font></center>" ;
     return view('registroasignaturaprofesor');
} else {
	echo "Error al ejecutar la consulta - ".mysql_error();

	}



}


public function buscarregasi()
	{

		return view('busquedanostasal');
	}




public function buscarcodregnotas()
	{

		return view('buscarregistronotas');
	}



public function modificarnotafinal()
	{

       $codigo     = $_GET['cod'];
		$nota  = $_GET['notf'];
		



// Creamos la conexion al servidor
// Si ocurre algun error muestra el mensaje de la funcion die() y termina la ejecución del script
$conexion = mysql_connect('localhost','root','root') or die('Error de conexión - '.mysql_error());

// Despues de conectado seleccionamos la Base de Datos
mysql_select_db('escuela');


$sql = "UPDATE  `escuela`.`notasalumno` SET  `nota` ='$nota' WHERE  `notasalumno`.`codigo` =$codigo;";
// Ejecutamos la consulta
if (mysql_query($sql, $conexion)) {
     echo "<br><center><font color='red' >la nota del alumno fue modificada con exitos</font></center>" ;
     return view('registronotasalumnos');
} else {
	echo "Error al ejecutar la consulta - ".mysql_error();

	}
}




}