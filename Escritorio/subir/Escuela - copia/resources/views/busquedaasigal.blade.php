<?php
   // variable pasada por URL
   $cod = $_GET['cod'];
   
   
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
   
   $sql = "SELECT * FROM asignaturaalumno WHERE codigo = '$cod'";
   
   $resultado = mysql_query($sql, $conex) or die("error - ".mysql_error());
   
   $fila = mysql_fetch_assoc($resultado);   
   
?>



<html>
<head>
<title>Modificar asignatura alumnos</title>
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
         <li><a href="{!!route('registronotasal')!!}"><span>Registrar Notas Alumnos</span></a></li>
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

<br></br>
    <div class="container">

      <div class="blog-header">
       <center> <h1 class="blog-title"><font face="gabriola" color="#FD4141"> Modificar Asignatura Alumnos </font></h1>
         <h2 class="blog-title"><font face="gabriola" color="#FD4141">El codigo de Registro</font></h2></br>
         <form id="form1" name="form1" method="get" action="{!!route('modificacionasig')!!}" >
<center><table width="20" height="70" border="0" align="center" ></center>
  <center><tr>
  <td><td><td><center>
  <td >
    <tr>
      <tr>
       <tr>
    <td></td><td></td><td></td>
    <td>
<br>
   </form>
    </td>
    <td></td>
    <td></td>
    <td></td>
    </tr>

    <center><tr>
     <td>
    <center><font size="5"color="black" face="gabriola">Codigo</font></center>
    </td>
    <td>
    <center><font size="5"color="black" face="gabriola">Nit</font></center>
    </td>
    <td>
    <center><font size="5"color="black" face="gabriola">Nombre</font></center>
    </td>
    <td>
    <center><font size="5"color="black" face="gabriola">apellido</font></center>
    </td>
    <td>
    <center><font size="5"color="black" face="gabriola">Asignatura</font></center>
    </td>
   </tr>
   </center>
   <tr>
    <td width="100"><label>
      <input name="cod" type="text" id="cod" style="width:100px; height:30px"   value="<?=$fila['codigo']?>"   />
    </label>     
    </td>
   <td width="100"><label>
      <input name="nit" type="text" id="nit" style="width:100px; height:30px"  disabled="true" value="<?=$fila['nit']?>"  />
    </label>     
    </td>
    <td width="100"><label>
      <input name="nom" type="text" id="nom" style="width:180px; height:30px" disabled="true" value="<?=$fila['nombre']?>" />
    </label>     
    </td>
    <td width="100"><label>
      <input name="ape" type="text" id="ape" style="width:180px; height:30px"disabled="true" value="<?=$fila['apellido']?>" />
    </label>     
    </td>
    <td width="100"><label>
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
    </label>     
    </td>
    <td>
  <button type="submit" style="background:#891B1B; width:90px; height:35px" name="submit" ><font size="5"color="white" face="gabriola">Modificar</font></button></a></td>
    </tr>
    <tr><td>
    <tr><td>
    </table>
    <br>
    <DIV ALIGN="LEFT" class="container">
    
       
</div>
</div>
</div>
 
    </div>
</body>
</html>