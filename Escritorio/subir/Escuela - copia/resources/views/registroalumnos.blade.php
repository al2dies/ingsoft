<html>
<head>

<title>Registro Alumnos</title>
<link rel="stylesheet"
href="css/style.css')}}"
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
         <li><a href="{!!route('registronotasal')!!}"><span>Regitrar Notas Alumnos</span></a></li>
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
<h1 class="blog-title"><font face="gabriola" color="#FD4141" size="7"><center> REGISTRO DE ALUMNO </center></b></br>

<form id="form1" name="form1" method="post" action="{!!route('guardaralumno')!!}">
  <table width="40%" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td ><center><strong><font color="#FD4141" size="5" face="gabriola">Nombre</strong></center></td>
      <td width="234"><label>
        <input name="nom" type="text" id="nom" required/>
      </label></td>
    </tr>
    <tr>
      <td ><center><strong><font color="#FD4141" size="5" face="gabriola">Apellido</strong></center></td>
      <td ><label>
        <input name="ape" type="text" id="ape" required />
      </label></td>
    </tr>
    <tr>
      <td ><center><strong><font color="#FD4141" size="5" face="gabriola">Edad</strong></center></td>
      <td ><label>
        <input name="edad" type="text" id="edad" required/>
      </label></td>
    </tr>
    <tr>
      <td ><center><strong><font color="#FD4141" size="5" face="gabriola">Nit</strong></center></td>
      <td ><label>
        <input name="nit" type="text" id="nit" required/>
      </label></td>
    </tr>
    <tr>
      <td ><center><strong><font color="#FD4141" size="5" face="gabriola">Año a cursar</strong></center></td>
      <td ><label>
        <input name="anio"  id="anio"  required type="text"/>
      </label></td>
    </tr>
    <tr><td>
    <center> <button type="submit" style="background:#891B1B; width:200px; height:40px" name="submit" ><font size="5"color="#fff" face="gabriola">Agregar</font></button></a>
  </table>
  </div>   
</form>


          <center><a href ="{!! route('actualizacional')!!}"> <button type="submit" style="background:#891B1B; width:200px; height:40px" name="submit" ><font size="5"color="#fff" face="gabriola">Actualizar</font></button></a>
           <a href ="{!!route('registroexal')!!}"> <button type="submit" style="background:#891B1B; width:280px; height:40px" name="submit" ><font size="5"color="#fff" face="gabriola">Cambiar a modo Ex-Alumno</font></button></a><BR></BR></center>
           
    <DIV ALIGN="LEFT" class="container">
</body>


</html>
