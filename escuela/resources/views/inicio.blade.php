<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login</title>

<link href="css/login-box.css" rel="stylesheet" type="text/css" />
</head>

<body background="img/fondo.jpg">


<div style="padding: 100px 0 0 250px;">


<div id="login-box">

<H2>Entrar</H2>
Es necesario iniciar sesion para acceder a nuestro servicio.
<br />
<br />
<form class="form-signin" id="form-signin" name="form-signin"  method="post" action="{{route('iralmenu')}}"   role="form">  
<div id="login-box-name" style="margin-top:20px;">Email:</div><div id="login-box-field" style="margin-top:20px;"><input name="usu" id ="usu"class="form-login" title="Username" value="" size="30" maxlength="2048" /></div>
<div id="login-box-name">contraseña:</div><div id="login-box-field"><input name="pass" type="password" class="form-login" title="Password" value="" size="30" maxlength="2048" /></div>
<br />
<span class="login-box-options"><input type="checkbox" name="1" value="1">Recordarme</span>
<br />
<br />
<center><button  style="width:110px; height:43px; background:#3D8ACE; border:1;" type="submit"  name="submit" >INICIAR</button>
</center>


</form>



</div>

</div>













</body>

</html>
