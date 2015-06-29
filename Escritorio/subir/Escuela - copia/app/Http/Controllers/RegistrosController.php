<?php
namespace App\Http\Controllers;


class RegistrosController extends Controller 
{

public function inicio(){
	return view('inicio');
}



public function registroal()
	 {

		return view('registroalumnos');

	  }

/* aqui se guarda el registro de los alumnos*/
public function guardaralumno(){
$nombre     = $_POST['nom'];
$apellido  = $_POST['ape'];
$edad  = $_POST['edad'];
$nit  = $_POST['nit'];
$anio  = $_POST['anio'];



// Creamos la conexion al servidor
// Si ocurre algun error muestra el mensaje de la funcion die() y termina la ejecución del script
$conexion = mysql_connect('localhost','root','root') or die('Error de conexión - '.mysql_error());

// Despues de conectado seleccionamos la Base de Datos
mysql_select_db('escuela');


// Creamos la sentencia sql para ingresar
// los datos en la tabla alumnos
$sql = "INSERT INTO alumnos(`nombre`,`apellido`,`edad`,`nit`,`anio`) VALUES ('$nombre','$apellido','$edad','$nit','$anio')";
					  
// Ejecutamos la consulta
if (mysql_query($sql, $conexion)) {
     echo "<br><center><font color='red' >Agregado </font></center>" ;
     return view('registroalumnos');
} else {
	echo "Error al ejecutar la consulta - ".mysql_error();
}

// Cerramos la conexión
mysql_close($conexion);

}


/* se lleva a la vista registro de alumnos para registrasr y luego guardar*/
public function registroexal()
	 {

		return view('registroexalumno');

	  }

/*se hace la funcion para guardar los exalumnos*/

/* aqui se guarda el registro de los exalumnos*/
public function guardarexalumno(){
$nombre     = $_POST['nom'];
$apellido  = $_POST['ape'];
$edad  = $_POST['edad'];
$nit  = $_POST['nit'];
$anio  = $_POST['anio'];



// Creamos la conexion al servidor
// Si ocurre algun error muestra el mensaje de la funcion die() y termina la ejecución del script
$conexion = mysql_connect('localhost','root','root') or die('Error de conexión - '.mysql_error());

// Despues de conectado seleccionamos la Base de Datos
mysql_select_db('escuela');


// Creamos la sentencia sql para ingresar
// los datos en la tabla alumnos
$sql = "INSERT INTO exalumnos(`nombre`,`apellido`,`edad`,`nit`,`anio`) VALUES ('$nombre','$apellido','$edad','$nit','$anio')";
					  
// Ejecutamos la consulta
if (mysql_query($sql, $conexion)) {
     echo "<br><center><font color='#891B1B' Exalumno agregado con exito</font></center>" ;
     return view('registroexalumno');
} else {
	echo "Error al ejecutar la consulta - ".mysql_error();
}

// Cerramos la conexión
mysql_close($conexion);

}





	  public function registropro()
	 {

		return view('registroprofesores');

	  }
public function guardarprofesor(){
$nombre     = $_POST['nom'];
$apellido  = $_POST['ape'];
$anio  = $_POST['anio'];
$nit  = $_POST['nit'];




// Creamos la conexion al servidor
// Si ocurre algun error muestra el mensaje de la funcion die() y termina la ejecución del script
$conexion = mysql_connect('localhost','root','root') or die('Error de conexión - '.mysql_error());

// Despues de conectado seleccionamos la Base de Datos
mysql_select_db('escuela');


// Creamos la sentencia sql para ingresar
// los datos en la tabla alumnos
$sql = "INSERT INTO profesores(`nombre`,`apellido`,`anio`,`nit`) VALUES ('$nombre','$apellido','$anio','$nit')";
					  
// Ejecutamos la consulta
if (mysql_query($sql, $conexion)) {
     echo "<br><center><font color='#891B1B' >Agregado </font></center>" ;
     return view('registroprofesores');
} else {
	echo "Error al ejecutar la consulta - ".mysql_error();
}

// Cerramos la conexión
mysql_close($conexion);

}




	   public function registroexpro()
	 {

		return view('registroexprofesor');

	  }

	 public function guardarexprofesor(){
$nombre     = $_POST['nom'];
$apellido  = $_POST['ape'];
$anio  = $_POST['anio'];
$nit  = $_POST['nit'];




// Creamos la conexion al servidor
// Si ocurre algun error muestra el mensaje de la funcion die() y termina la ejecución del script
$conexion = mysql_connect('localhost','root','root') or die('Error de conexión - '.mysql_error());

// Despues de conectado seleccionamos la Base de Datos
mysql_select_db('escuela');


// Creamos la sentencia sql para ingresar
// los datos en la tabla alumnos
$sql = "INSERT INTO exprofesores(`nombre`,`apellido`,`anio`,`nit`) VALUES ('$nombre','$apellido','$anio','$nit')";
					  
// Ejecutamos la consulta
if (mysql_query($sql, $conexion)) {
     echo "<br><center><font color='#891B1B' >Agregado Exprofesor </font></center>" ;
     return view('registroexprofesor');
} else {
	echo "Error al ejecutar la consulta - ".mysql_error();
}

// Cerramos la conexión
mysql_close($conexion);

}


	  public function registroasig()
	 {

		return view('registroasignatura');

	  }

	 public function guardarasignatura(){
$nombre     = $_POST['nom'];
$cod  = $_POST['cod'];
// Creamos la conexion al servidor
// Si ocurre algun error muestra el mensaje de la funcion die() y termina la ejecución del script
$conexion = mysql_connect('localhost','root','root') or die('Error de conexión - '.mysql_error());

// Despues de conectado seleccionamos la Base de Datos
mysql_select_db('escuela');


// Creamos la sentencia sql para ingresar
// los datos en la tabla alumnos
$sql = "INSERT INTO asignaturas(`nombre`,`codigo`) VALUES ('$nombre','$cod')";
					  
// Ejecutamos la consulta
if (mysql_query($sql, $conexion)) {
     echo "<br><center><font color='#891B1B' >Agregada la Nueva Asignatura</font></center>" ;
     return view('registroasignatura');
} else {
	echo "Error al ejecutar la consulta - ".mysql_error();
}

// Cerramos la conexión
mysql_close($conexion);

}

	   public function exasignatura()
	 {

		return view('registroexasignatura');

	  }


public function guardarexasignatura(){
$nombre     = $_POST['nom'];
$cod  = $_POST['cod'];
// Creamos la conexion al servidor
// Si ocurre algun error muestra el mensaje de la funcion die() y termina la ejecución del script
$conexion = mysql_connect('localhost','root','root') or die('Error de conexión - '.mysql_error());

// Despues de conectado seleccionamos la Base de Datos
mysql_select_db('escuela');


// Creamos la sentencia sql para ingresar
// los datos en la tabla alumnos
$sql = "INSERT INTO exasignaturas(`nombre`,`codigo`) VALUES ('$nombre','$cod')";
					  
// Ejecutamos la consulta
if (mysql_query($sql, $conexion)) {
     echo "<br><center><font color='#891B1B' >Agregada la EX-Asignatura </font></center>" ;
     return view('registroexasignatura');
} else {
	echo "Error al ejecutar la consulta - ".mysql_error();
}

// Cerramos la conexión
mysql_close($conexion);

}


	  public function registronotasal()
	  {

	  	return view('registronotasalumnos');
	  }


public function modificacionnota()
	 {

$nombre     = $_POST['nom'];
$apellido  = $_POST['ape'];
$edad = $_POST['edad'];
$nit  = $_POST['nit'];
$asignatura = $_POST['asig'];
$codigor  = $_POST['num'];
$notafinal  = $_POST['notf'];


// Creamos la conexion al servidor
// Si ocurre algun error muestra el mensaje de la funcion die() y termina la ejecución del script
$conexion = mysql_connect('localhost','root','root') or die('Error de conexión - '.mysql_error());

// Despues de conectado seleccionamos la Base de Datos
mysql_select_db('escuela');


// Creamos la sentencia sql para ingresar
// los datos en la tabla alumnos
$sql = "INSERT INTO notasalumno(`nombre`,`apellido`,`edad`,`nit`,`asignatura`,`nota`,`codigo`) VALUES ('$nombre','$apellido','$edad','$nit','$asignatura','$notafinal','$codigor')";
					  
// Ejecutamos la consulta
if (mysql_query($sql, $conexion)) {
     echo "<br><center><font color='#891B1B' >Nota Agregada al Estudiante </font></center>" ;
     return view('registronotasalumnos');
} else {
	echo "Error al ejecutar la consulta - ".mysql_error();
}

// Cerramos la conexión
mysql_close($conexion);

	  }









public function registroasigpro(){

return view('registroasignaturaprofesor');


}

public function guardarasigpro()
{
	$nit  = $_POST['nit'];
	$nombre     = $_POST['nom'];
	$apellido  = $_POST['ape'];
	$codigor  = $_POST['cod'];
$nombreasig = $_POST['nomb'];






// Creamos la conexion al servidor
// Si ocurre algun error muestra el mensaje de la funcion die() y termina la ejecución del script
$conexion = mysql_connect('localhost','root','root') or die('Error de conexión - '.mysql_error());

// Despues de conectado seleccionamos la Base de Datos
mysql_select_db('escuela');


// Creamos la sentencia sql para ingresar
// los datos en la tabla alumnos
$sql = "INSERT INTO asignaturaprofesor(`asignatura`,`nombre`,`apellido`,`nit`,`cod`) VALUES ('$nombreasig','$nombre','$apellido','$nit','$codigor')";
					  
// Ejecutamos la consulta
if (mysql_query($sql, $conexion)) {
     echo "<br><center><font color='#891B1B' >Asignatura Agregada a profesor</font></center>" ;
     return view('registroasignaturaprofesor');
} else {
	echo "no se udo ejecutar la consulta - ".mysql_error();
}

// Cerramos la conexión
mysql_close($conexion);

}


public function registroasigal(){

return view('registroasignaturasalumnos');

}
	public function guardarasignal()
	 {
	 	$nombreasig = $_POST['nomb'];
		$nombre     = $_POST['nom'];
$apellido  = $_POST['ape'];
$edad = $_POST['edad'];
$anio  = $_POST['anio'];
$nit  = $_POST['nit'];
$codigor  = $_POST['codr'];


// Creamos la conexion al servidor
// Si ocurre algun error muestra el mensaje de la funcion die() y termina la ejecución del script
$conexion = mysql_connect('localhost','root','root') or die('Error de conexión - '.mysql_error());

// Despues de conectado seleccionamos la Base de Datos
mysql_select_db('escuela');


// Creamos la sentencia sql para ingresar
// los datos en la tabla alumnos
$sql = "INSERT INTO asignaturaalumno(`asignatura`,`nombre`,`apellido`,`edad`,`nit`,`anio`,`codigo`) VALUES ('$nombreasig','$nombre','$apellido','$edad','$nit','$anio','$codigor')";
					  
// Ejecutamos la consulta
if (mysql_query($sql, $conexion)) {
     echo "<br><center><font color='#891B1B' >Asignatura Agregada a Estudiante</font></center>" ;
     return view('registroasignaturasalumnos');
} else {
	echo "Error al ejecutar la consulta - ".mysql_error();
}

// Cerramos la conexión
mysql_close($conexion);

	  }




}
