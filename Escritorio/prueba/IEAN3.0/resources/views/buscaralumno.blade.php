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
<title>Actualizacion datos alumnos</title>
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
         <li><a href="{!! route('registroal')!!}"><span>Registro Alumnos</span></a></li>
         <li><a href="{!!route('registronotasal')!!}"><span>Notas Alumnos</span></a></li>
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
        <h1 class="blog-title"><font face="gabriola" color="#FD4141">~ Actualizacion de datos ~ Alumnos ~</font></h1>
          <h2 class="blog-title"><font face="gabriola" color="#FD4141">Por favor ve atras si deseas hacer otra consulta</font></h2><br></br>
        
        <form id="form1" name="form1" method="get" action="{!!route('modificacional')!!}" >
  <table width="40%" height="100" border="0" align="left" cellpadding="11" cellspacing="11">
     <td></td>
    <td></td>
    <td></td>
    </tr>
    <center><tr>
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
    <center><font size="5"color="black" face="gabriola">Edad    </font></center>
    </td>
    <td>
    <center><font size="5"color="black" face="gabriola">Año_cursado</font></center>
    </td>
   </tr>
   </center>
   <tr>
   <td width="400"><label>
      <input  name="ni" type="text" id="ni" value="<?=$fila['nit']?>" />
    </label>     
    </td>
    <td width="400"><label>
      <input name="nom" type="text" id="nom" value="<?=$fila['nombre']?>"/>
    </label>     
    </td>
    <td width="400"><label>
      <input name="ape" type="text" id="ape" value="<?=$fila['apellido']?>" />
    </label>     
    </td>
    <td width="400"><label>
      <input name="ed" type="text" id="ed" value="<?=$fila['edad']?>"/>
    </label>     
    </td>
    <td width="400"><label>
      <input name="an" type="text" id="an" value="<?=$fila['anio']?>"/>
    </label>     
    </td>
    <td>
   <button type="submit" style="background:#FD4141; width:90px; height:35px" name="submit" ><font size="5"color="black" face="gabriola">Actualizar</font></button></td>
    </tr>
    <tr><td>
   </table>
  </form>
     </div>
       
</div>
</div>
</div>
</body>
</html>