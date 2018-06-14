<html>
<head>
	

	<script src="js\bootstrap.js" type="text/javascript"> </script>
	<script src="js\jquery.js" type="text/javascript"> </script>
	<link rel=StyleSheet href="css\bootstrap.css" type="text/css" media="screen">

	<title>Registro</title>

	<style type="text/css">
	

	.form 
	{
		max-width: 420px;
	  	padding: 30px 38px 66px;
	 	margin: 0 auto;
	  	/*background-color: #F1FAFB;
	  	border: 2px dotted rgba(0,0,1,0.1);*/  
	}
	
	.heading 
	{
	  	text-align:center;
	  	margin-bottom: 30px;
	}
		 

	.box
	{
		width: 270px;
		position: center;
	}
	
	.wrapper 
	{    
		margin-top: 80px;
		margin-bottom: 20px;
	}

	.form_control 
	{
	  	position: relative;
	  	font-size: 14px;
	  	height: auto;
	  	padding: 10px;
	}

	input[type="text"] 
	{
  		margin-bottom: 5px;
  		border-bottom-left-radius: 0;
  		border-bottom-right-radius: 0;
	}
		

	.colorgraph 
		{
	  		height: 7px;
	  		border-top: 0;
	  		background: #c4e17f;
	  		border-radius: 5px;
	  		background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
	  		background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
	  		background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
	  		background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
		}  	




	</style>






</head>
<body>

<center>
	<div class = "container">
		<div class="wrapper">
			<form   action="{{url('/inserta')}}"  method="post" id="form1" class="form">
			 			
			 			<h3 class="heading">Bienvenido! Por favor, registrate para comenzar!</h3>
						<hr class="colorgraph">
			 			
			 		
			 			<input type= "text" name="dni" id="dni" placeholder="Dni"  class="form_control btn-block">
						
						<input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form_control btn-block">
						
						<input type="text" name="apellido" id="apellido" placeholder="Apellidos"  class="form_control btn-block">
						<input type="text" name="establecimiento" id="establecimiento" placeholder="Establecimiento" class="form_control btn-block">
						
						<input type="text" name="email" id="email" placeholder="Correo Electronico" class="form_control btn-block">
						<!--<input type="password" name="password" id="password" placeholder="password"  class="form_control btn-block">-->
						
						<!--Categoria:<select class="box">
						
						<option value="expositor">Expositor</option> 
    					<option value="asistente">Asistente</option>
    					<option value="invitado">Invitado</option>
    					<option value="organizador">Organizador</option>
				
				  	   	</select>-->
						{{Form::select('categorias',$cat)}}
						
						<hr>
						<input type= "submit" id="sub" name="nsubmit"  class="form_control btn tbn-info btn-block" >
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
				
			</form>
		</div>
	</div>		
</center>
</body>
</html>


