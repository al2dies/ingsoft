<?php
 namespace App\Http\Controllers;
class ActualizacionController extends Controller {


	public function actualizacional()
	{
		return view('actualizaciondatosalumno');
	}

	public function buscaral()
	{
		return view('buscaralumno');
}


public function modificacional()
	{
		
		$nombre     = $_GET['nom'];
		$apellido  = $_GET['ape'];
		$nit  = $_GET['ni'];
		$edad  = $_GET['ed'];
		$anio  = $_GET['an'];



// Creamos la conexion al servidor
// Si ocurre algun error muestra el mensaje de la funcion die() y termina la ejecución del script
$conexion = mysql_connect('localhost','root','root') or die('Error de conexión - '.mysql_error());

// Despues de conectado seleccionamos la Base de Datos
mysql_select_db('escuela');


$sql = "UPDATE `alumnos` SET `nombre` = '$nombre',`apellido` = '$apellido',`edad` = '$edad',`nit` = '$nit',
`anio` = '$anio' WHERE `nit` = '$nit' LIMIT 1 ;";
// Ejecutamos la consulta
if (mysql_query($sql, $conexion)) {
     echo "<br><center><font color='red' >modificado </font></center>" ;
     return view('actualizaciondatosalumno');
} else {
	echo "Error al ejecutar la consulta - ".mysql_error();
}

// Cerramos la conexión
mysql_close($conexion);
}


	public function modificarexal()
	{
		return view('modificarexalumno');
	}
/*con esta se busca el alumno a modificar*/
		public function buscarexal()
	{
		return view('buscarexalumno');
}


/*con esta funcion se modifican lo exalumnos*/

public function modificacionexal()
	{
		
		$nombre     = $_GET['nom'];
		$apellido  = $_GET['ape'];
		$nit  = $_GET['nit'];
		$edad  = $_GET['eda'];
		$anio  = $_GET['anio'];



// Creamos la conexion al servidor
// Si ocurre algun error muestra el mensaje de la funcion die() y termina la ejecución del script
$conexion = mysql_connect('localhost','root','root') or die('Error de conexión - '.mysql_error());

// Despues de conectado seleccionamos la Base de Datos
mysql_select_db('escuela');


$sql = "UPDATE `exalumnos` SET `nombre` = '$nombre',`apellido` = '$apellido',`edad` = '$edad',`nit` = '$nit',
`anio` = '$anio' WHERE `nit` = '$nit' LIMIT 1 ;";
// Ejecutamos la consulta
if (mysql_query($sql, $conexion)) {
     echo "<br><center><font color='red' >Exalumno modificado</font></center>" ;
     return view('modificarexalumno');
} else {
	echo "Error al ejecutar la consulta - ".mysql_error();
}

// Cerramos la conexión
mysql_close($conexion);
}



	public function actualizacionpro()
	{
		return view('actualizaciondatosprofesor');
	}


			public function buscarpro()
	{
		return view('buscarprofesor');
}

public function modificacionpro()
	{
		
		$nombre     = $_GET['nom'];
		$apellido  = $_GET['ape'];
		$anio  = $_GET['anio'];
		$nit  = $_GET['nit'];
		


// Creamos la conexion al servidor
// Si ocurre algun error muestra el mensaje de la funcion die() y termina la ejecución del script
$conexion = mysql_connect('localhost','root','root') or die('Error de conexión - '.mysql_error());

// Despues de conectado seleccionamos la Base de Datos
mysql_select_db('escuela');


$sql = "UPDATE `profesores` SET `nombre` = '$nombre',`apellido` = '$apellido',`anio` = '$anio',`nit` = '$nit' WHERE `nit` = '$nit' LIMIT 1 ;";
// Ejecutamos la consulta
if (mysql_query($sql, $conexion)) {
     echo "<br><center><font color='red' >profesor modificado</font></center>" ;
     return view('actualizaciondatosprofesor');
} else {
	echo "Error al ejecutar la consulta - ".mysql_error();
}

// Cerramos la conexión
mysql_close($conexion);
}



/* funcion para modificar  exprofesores*/
	public function modificarexpro()
	{
		return view('modificarexprofesor');
	}


/*por aca se busca el profesor a modificar*/
public function buscarexpro()
	{
		return view('buscarexprofesor');
}

/* en esta funcion se modificara el exprofesor ya sea su nombre, apellido o año de salida*/
public function modificacionexpro()
	{
		
		$nombre     = $_GET['nom'];
		$apellido  = $_GET['ape'];
		$anio  = $_GET['anio'];
		$nit  = $_GET['nit'];
		


// Creamos la conexion al servidor
// Si ocurre algun error muestra el mensaje de la funcion die() y termina la ejecución del script
$conexion = mysql_connect('localhost','root','root') or die('Error de conexión - '.mysql_error());

// Despues de conectado seleccionamos la Base de Datos
mysql_select_db('escuela');


$sql = "UPDATE `exprofesores` SET `nombre` = '$nombre',`apellido` = '$apellido',`anio` = '$anio',`nit` = '$nit' WHERE `nit` = '$nit' LIMIT 1 ;";
// Ejecutamos la consulta
if (mysql_query($sql, $conexion)) {
     echo "<br><center><font color='red' >EX-profesor modificado</font></center>" ;
     return view('modificarexprofesor');
} else {
	echo "Error al ejecutar la consulta - ".mysql_error();
}

// Cerramos la conexión
mysql_close($conexion);
}


/*co esta funcion actualizamos las asignaturas abrimos el menu*/
public function actualizarasig()
	{
		return view('actualizaciondatosasignatura');
	}

/*con esta funcion buscamos la asignatura y la listamos*/
public function buscaras()
	{
		return view('buscarasignatura');
}

/*aqui se modificara la asignatura*/

public function modificacionasi()
	{
		
		$nombre     = $_GET['nom'];
		$codigo  = $_GET['nit'];	


// Creamos la conexion al servidor
// Si ocurre algun error muestra el mensaje de la funcion die() y termina la ejecución del script
$conexion = mysql_connect('localhost','root','root') or die('Error de conexión - '.mysql_error());

// Despues de conectado seleccionamos la Base de Datos
mysql_select_db('escuela');


$sql = "UPDATE `asignaturas` SET `nombre` = '$nombre',`codigo` = '$codigo' WHERE `codigo` = '$codigo' LIMIT 1 ;";
// Ejecutamos la consulta
if (mysql_query($sql, $conexion)) {
     echo "<br><center><font color='red' >Asignatura modificada </font></center>" ;
     return view('actualizaciondatosasignatura');
} else {
	echo "Error al ejecutar la consulta - ".mysql_error();
}

// Cerramos la conexión
mysql_close($conexion);
}




/*modificando, buscando,  y actualizando la asignatura */

public function modificarexasig()
	{
		return view('modificarexasignatura');
	}
public function buscarexas(){

	return view('buscarexasignatura');

}

public function modificacionexasi()
	{
		
		$nombre     = $_GET['nom'];
		$codigo  = $_GET['nit'];	


// Creamos la conexion al servidor
// Si ocurre algun error muestra el mensaje de la funcion die() y termina la ejecución del script
$conexion = mysql_connect('localhost','root','root') or die('Error de conexión - '.mysql_error());

// Despues de conectado seleccionamos la Base de Datos
mysql_select_db('escuela');


$sql = "UPDATE `exasignaturas` SET `nombre` = '$nombre',`codigo` = '$codigo' WHERE `codigo` = '$codigo' LIMIT 1 ;";
// Ejecutamos la consulta
if (mysql_query($sql, $conexion)) {
     echo "<br><center><font color='red' >Ex-Asignatura modificada</font></center>" ;
     return view('modificarexasignatura');
} else {
	echo "Error al ejecutar la consulta - ".mysql_error();
}

// Cerramos la conexión
mysql_close($conexion);
}









	public function modificarnotas(){

		return view('modificarnotasalumno');

	}

	public function modificarasigpro(){

		return view('modificarasignaturaprofesor');

	}

	public function modificarasigal(){

		return view('modificarasignaturaalumno');
	}


}


