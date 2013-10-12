<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="carrusel.css">
	<script type="text/javascript" src="carrusel.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/ocanvas/2.5.0/ocanvas.min.js"></script>
	<script type="text/javascript">
	$(document).ready(inicio);
		
		var valor1=0;
		var valor2=0;
		var valor3=0;
		var valor4=0;
		function inicio(){
			
			$('#boton1').click(function(){			
			valor1=valor1+1;
			console.log(valor1);
			setTimeout("animacion()",100);
			});
			$('#boton2').click(function(){			
			valor2=valor2+1;
			console.log(valor2);
			setTimeout("animacion()",100);
			});
			$('#boton3').click(function(){			
			valor3=valor3+1;
			console.log(valor3);
			setTimeout("animacion()",100);
			});
			$('#boton4').click(function(){			
			valor4=valor4+1;
			console.log(valor4);
			setTimeout("animacion()",100);
			});
			$('#insertar').click(function(){
			console.log("valor4");
			setTimeout("aparecer()",100);
			});
			
		}

		function animacion(){
		var canvas=document.getElementById("lienzo");
		var contexto= canvas.getContext("2d");
		
			if(valor1%2==1 && valor1>0){
				contexto.fillStyle="rgb(255,0,0)";
				contexto.fillRect(10,10,270,20);
			}else if(valor1%2==0 && valor1>0){
				contexto.fillStyle="rgb(255,255,255)";
				contexto.fillRect(10,10,270,20);
			}

			if(valor2%2==1 && valor2>0){
				contexto.fillStyle="rgb(255,0,0)";
				contexto.fillRect(10,10,20,350);
			}else if(valor2%2==0 && valor2>0){
				contexto.fillStyle="rgb(255,255,255)";
				contexto.fillRect(10,10,20,350);
			}
			if(valor3%2==1 && valor3>0){
				contexto.fillStyle="rgb(255,0,0)";
				contexto.fillRect(270,10,20,350);
			}else if(valor3%2==0 && valor3>0){
				contexto.fillStyle="rgb(255,255,255)";
				contexto.fillRect(270,10,20,350);
			}
			if(valor4%2==1 && valor4>0){
				contexto.fillStyle="rgb(255,0,0)";
				contexto.fillRect(10,360,280,20);
			}else if(valor4%2==0 && valor4>0){
				contexto.fillStyle="rgb(255,255,255)";
				contexto.fillRect(10,360,280,20);
			}
			}
			function aparecer(){
				var canvas=document.getElementById("lienzo");
				var contexto1= canvas.getContext("2d");
				contexto1.font = "bold 22px sans-serif";
				var valor=$("#cajatexto").val()		
				contexto1.fillText(valor,50,50);
				canvas.addChild(contexto1);
				contexto1.dragAndDrop();
			
			
			}
			

	</script>
	<style type="text/css">
		canvas{
			border: 1px black solid;
		}
		header{
		background:  #0B2DC9;
		color: #FFF;
		padding: 1px;
		text-align: center;
		
		}
		#contenedorprincipal{
			margin: auto;
		}
		#dibujo{
			width: 90px;
			float: left;
			margin: 1em 6em 10em 12em;
		}
		#parte_uno{
			width: 30px;
			margin: 5em 19em 5em 11em;
			float: right;
		}
		#imagenes{
			background: #000;
			position: fixed;
			bottom: 0;
			left: 0;
			margin: 4em 0 0em 0;
			height: 7em;
			width: 100em;}
		#boton1{
			background: url("img/ima1.png") no-repeat;
			height: 50px;
			width: 50px;
			background-position: center;
		}
		#boton2{
			background: url("img/ima2.png") no-repeat;
			height: 50px;
			width: 50px;
			background-position: center;
		}
		#boton3{
			background: url("img/ima4.png") no-repeat;
			height: 50px;
			width: 50px;
			background-position: center;
		}
		#boton4{
			background: url("img/ima3.png") no-repeat;
			height: 50px;
			width: 50px;
			background-position: center;
		}
		
	</style>
</head>
<body>
<header> <h1> CREDENCIAL DESIGNER </h1> </header>
<div id="contenedorprincipal">
	<div id="dibujo">	
		<canvas id="lienzo" height="400" width="300">
		</canvas>

		
	</div>
	<div id="parte_uno">
		Elige un borde
		<input type="color">
		<br>

		<input type="text" id="cajatexto">
		<input type="button" id="insertar" value="insertar">
		<input type="button" id="boton1">
		<input type="button" id="boton2">
		<input type="button" id="boton3">
		<input type="button" id="boton4">
	</div>

</div>
<div id="imagenes">
		<div id="divCarousel">
			<div id="divIzquierda"></div>
			<div id="divCentro">
				<ul>

					<?php 
					$dbc=mysql_connect('localhost','root','');
					
					mysql_select_db("multimediadb", $dbc); 
					$result = mysql_query("SELECT nombre FROM imagen", $dbc);
					
					
    					while($row = mysql_fetch_array($result)){
    
                		  echo   "<li><a class='' href='#'><img style='' src='img_thumbs/".$row['nombre']."' alt='72157625072844296'></a></li>";                   

   						}
					
					
					mysql_close();


					?>					
				</ul>
			</div>
			<div id="divDerecha"></div>
			<div class="clsSalto"></div>
		</div>
		

</div>
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>

</body>
</html>