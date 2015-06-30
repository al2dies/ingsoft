<?php
   // variable pasada por URL
   $cod = $_GET['busque'];
   
   
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
   // Llamamos a la función conectar() del archivo config.inc.php
   $conex = conectar();
   
   $sql = "SELECT * FROM alumnos WHERE nit = '$cod'";
   
   $resultado = mysql_query($sql, $conex) or die("error - ".mysql_error());
   
   $fila = mysql_fetch_assoc($resultado);   
   
?>

<html>
<head>

<title>Registro Asignaturas Alumnos</title>
<link rel="stylesheet"
href="css/style.css"
type="text/css" />
</head>

<body  background="img/fondo.jpg">
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
     <meta name="author" content="">
 <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">


  <div id='cssmenu'>
<ul>
   <li class='active '><a href="{!! route('menu') !!}"><span>Inicio</span></a></li>
   <li class='has-sub '><a href='#'><span>Alumnos</span></a>
      <ul>
         <li><a href="{!! route('registroal')!!}"><span>Registro de Alumnos</span></a></li>
         <li><a href="{!!route('registronotasal')!!}"><span>Registro Notas Alumnos</span></a></li>
        <li><a href="{!!route('registroasigal')!!}"><span>Asignatura de alumnos</span></a></li>
      </ul>
   </li>
   <li class='has-sub '><a href='#'><span>Profesores</span></a>
      <ul>
         <li><a href="{!! route('registropro')!!}"><span>Registro Profesores</span></a></li>
         <li><a href="{!!route('registroasigpro')!!}"><span>Asignatura Profesores</span></a></li>
      </ul>
   </li>
   <li><a href="{!!route('registroasig')!!}"><span>Registro Asignaturas</span></a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
            <li><a href="{!!route('inicio')!!}">Salir</a></li>
          </ul>
</div>

<br></br>
  
        

</div>
</div>
</div>

 
<h1 class="blog-title"><font face="gabriola" color="#FD4141" size="7"><center>Registro de Asignaturas Alumnos</center></b>
<br>

<form id="form1" name="form1" method="post" action="{!!route('guardarasignal')!!}">
  <table width="40%" height="100" border="0" align="center" cellpadding="11" cellspacing="11">
    <tr>  
    </td>
    </tr>
<tr>
      <td ><center><strong><font color="#FD4141" size="5" face="gabriola">Nombre asignatura</strong></center></td>
      <td ><label>
      <select name="nomb" type="text" id="nomb">
            <?php
function ejecutar_sql($sql, $conex){
  if ( !$resultado = mysql_query($sql, $conex) ) {
    echo "Error al ejecutar la consulta SQL  <br>".mysql_error();
    exit();
  }
  return $resultado;
}
    
    $conexion = conectar();
    
      $sq = "SELECT * FROM asignaturas";
     $resultad = ejecutar_sql($sq, $conexion);
    while ( $ilo = mysql_fetch_assoc($resultad) ) {

             echo "<option  value='".$ilo["nombre"]."'>".$ilo["nombre"]."</option>";                 
    }
    mysql_free_result($resultad);
    
  ?>
      </label></td>
    </tr>
    <tr>
      <td ><center><strong><font color="#FD4141" size="5" face="gabriola">Nombre</strong></center></td>
      <td width="234"><label>
        <input name="nom" type="text" id="nom" value="<?=$fila['nombre']?>" required />
      </label></td>
    </tr>
    <tr>
      <td ><center><strong><font color="#FD4141" size="5" face="gabriola">Apellido</strong></center></td>
      <td ><label>
        <input name="ape" type="text" id="ape" value="<?=$fila['apellido']?>" required/>
      </label></td>
    </tr>
    <tr>
      <td ><center><strong><font color="#FD4141" size="5" face="gabriola">Edad</strong></center></td>
      <td ><label>
        <input name="edad" type="text" id="edad" value="<?=$fila['edad']?>" required />
      </label></td>
    </tr>
    <tr>
      <td ><center><strong><font color="#FD4141" size="5" face="gabriola">Nit</strong></center></td>
      <td ><label>
        <input name="nit" type="text" id="nit" value="<?=$fila['nit']?>" required/>
      </label></td>
    </tr>
    <tr>
      <td ><center><strong><font color="#FD4141" size="5" face="gabriola">Año cursado</strong></center></td>
      <td ><label>
        <input name="anio" type="text" id="anio" value="<?=$fila['anio']?>" required />
      </label></td>
    </tr>
    <tr>
      <td ><center><strong><font color="#FD4141" size="5" face="gabriola">codigo registro</strong></center></td>
      <td ><label>
        <input name="codr" type="text" id="codr"  required />
      </label></td>
    </tr>
    <tr>
    <td>
    <center><button type="submit" style="background:#891B1B; width:200px; height:40px" name="submit" ><font size="5"color="white" face="gabriola">Guardar</font></button>
  </table>
  </div>
          
</form>



          <center><a href ="{!!route('modificarasigal')!!}"> <button type="submit" style="background:#891B1B; width:200px; height:40px" name="submit" ><font size="5"color="white" face="gabriola">Modificar</font></button></a>           
    
 </body>


</html>