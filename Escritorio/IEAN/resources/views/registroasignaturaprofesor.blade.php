<html>
<head>

<title>Registro Asignaturas Profeso</title>
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

<h1 class="blog-title"><font face="gabriola" color="#FD4141" size="7"><center>Registro de Asignaturas Profesor</center></b>
<h5 class="blog-title"><font face="gabriola" color="#FD4141" size="5"><center>Por favor Ingrese el nit del profesor</center></b></br>

  <table width="40%" height="100" border="0" align="center" cellpadding="11" cellspacing="11">
    <tr>
    <center><form id="form1" name="form1" method="get" action="{!!route('buscarasipro')!!}" >
    <td>
 <button type="submit" style="background:#891B1B; width:100px; height:35px" name="submit" ><font size="5"color="white" face="gabriola">Buscar</font></button></a></center>
    </td>
    <td width="300"><label>
      <input name="busque" type="text" id="busque" />
      </label>
      </form>
    </td>
    </tr>
     <tr>
      <td ><center><strong><font color="#FD4141" size="5" face="gabriola">Nit</strong></center></td>
      <td ><label>
        <input name="nit" type="text" id="nit" />
      </label></td>
    </tr>
    <tr>
      <td ><center><strong><font color="#FD4141" size="5" face="gabriola">Nombre</strong></center></td>
      <td width="234"><label>
        <input name="nom" type="text" id="nom" />
      </label></td>
    </tr>
    <tr>
      <td ><center><strong><font color="#FD4141" size="5" face="gabriola">Apellido</strong></center></td>
      <td ><label>
        <input name="ape" type="text" id="ape" />
      </label></td>
    </tr>
    <tr>
      <td ><center><strong><font color="#FD4141" size="5" face="gabriola">Asignatura</strong></center></td>
      <td ><label>
        <input name="asig" type="text" id="asig"  />
      </label></td>
    </tr>
  </table>
  </div>
          

<center><button type="submit" style="background:#FD4141; width:200px; height:40px" name="submit" ><font size="5"color="black" face="gabriola">Guardar</font></button></a>

          <a href ="{!!route('modificarasigpro')!!}"> <button type="submit" style="background:#FD4141; width:200px; height:40px" name="submit" ><font size="5"color="black" face="gabriola">Modificar</font></button></a></center><br>           
    <DIV ALIGN="LEFT" class="container"><!------>
 </body>


</html>