<html>
<head>
<title>Actualizacion datos profesores</title>
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
        <h1 class="blog-title"><font face="gabriola" color="#FD4141">~ Actualizacion de datos ~ Ex-Profesores ~</font></h1>
         <h2 class="blog-title"><font face="gabriola" color="#FD4141">Por favor Ingrese el Nit del Ex-Profesor</font></h2><br></br>
        
  <table width="40%" height="100" border="0" align="center" cellpadding="7" cellspacing="7">
    <tr>
    <td>
<form id="form1" name="form1" method="get" action="{!!route('buscarexpro')!!}"  >
    <td>
<center> <button type="submit" style="background:#FD4141; width:100px; height:35px" name="submit" ><font size="5"color="black" face="gabriola">Buscar</font></button></a></center>
    </td>
    <td width="400"><label>
      <input name="busque" type="text" id="busque"  required/>
    </label>     
    </td>
    <td></td>
    <td></td>
    <td></td>
    
    </tr>
   
   </table>
   </form>
  <br><br>
     </div>
       
</div>
</div>
</div>
</body>
</html>