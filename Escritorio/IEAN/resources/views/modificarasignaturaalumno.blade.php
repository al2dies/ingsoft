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
       <center> <h1 class="blog-title"><font face="gabriola" color="#FD4141"> Modificar Asignatura Alumnos </font></h1>
         <h2 class="blog-title"><font face="gabriola" color="#FD4141">Por favor Ingrese el Nit del Alumno y el codigo de la asignatura</font></h2></br>
<center><table width="20" height="70" border="0" align="center" ></center>
  <center><tr>
  <td><td><td><center>
  <form id="form1" name="form1" method="get" action="{!!route('buscarcodreg')!!}" >


  <td width="100"><label><input name="cod" type="text" id="cod" style="width:180px; height:30px"  placeholder="Codigo de registro" required/></label></td>
    <tr>
      <tr>
       <tr>
    <td></td><td></td><td></td>
    <td width="200">
<center><button type="submit" style="background:#891B1B; width:100px; height:35px" name="submit" ><font size="5"color="white" face="gabriola">Buscar</font></button></a></center><br>
   </form>
    </td>
    <td></td>
    <td></td>
    <td></td>
    </tr>

  
    </table>
    <br>
    <DIV ALIGN="LEFT" class="container">
    
       
</div>
</div>
</div>
 
    </div>
</body>
</html>