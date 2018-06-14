<html>
<head>
	<title></title>
</head>
<body>

<center>
	<form   action="{{url('/ValidarForm')}}"  method="post" id="form1">
			Pais:<input type= "text" name="pais" id="idpais"><hr>
			Localidad:<input type="text" name="localidad" id="idlocalidad"><hr>
			Provincia:<input type="text" name="provincia" id="idprovincia"><hr>
			Codigo postal:<input type="text" name="codigo" id="idcodigo"><hr>
			<input type= "submit" id="sub" name="pepe">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
	</form>
</center>
</body>
</html>