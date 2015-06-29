<html>


<head>

<title>Registro Notas Alumnos</title>
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
<h1 class="blog-title"><font face="gabriola" color="#FD4141" size="7"><center>~ Registro de Notas ~ Alumnos~</center></b>
<h5 class="blog-title"><font face="gabriola" color="#FD4141" size="5"><center>Por favor Ingrese el codigo de registro de asignatura a alumno</center></b></br>


  <table width="40%" height="100" border="0" align="center" cellpadding="11" cellspacing="11">
    <tr>
<center> <form id="form1" name="form1" method="get" action="{!!route('buscarregasi')!!}" >
    <td>
 <button type="submit" style="background:#891B1B; width:100px; height:35px" name="submit" ><font size="5"color="#fff" face="gabriola">Buscar</font></button></a></center>
    </td>
    <td width="300"><label>
      <input name="busque" type="text" id="busque" placeholder="codigo asignatura" required/>
    </label>   
    </form> 
    </td>
    </tr>
   
  </table>
  </div>
          
<center>

          <a href ="{!!route('modificarnotas')!!}"> <button type="submit" style="background:#891B1B; width:200px; height:40px" name="submit" ><font size="5"color="#fff" face="gabriola">Modificar</font></button></a></center><br>           
    <DIV ALIGN="LEFT" class="container"><!------>
 </body>


</html>
