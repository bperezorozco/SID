<html>
	<head>
		<title>Men�</title>
		<link type="text/css" href="<?php echo base_url();?>css/cssMenu.css" rel="stylesheet"/>
		<script type="text/javascript" src="<?php echo base_url();?>js/jquery.js"></script>
		<script type="text/javascript">
		
			$(document).ready(function(){
				$("btnDonadores").click(function(){
					alert('hola!');
					//window.location.href = "<?php echo base_url();?>index.php/controlMenu/donadores";
				});
			});
			
		</script>
	</head>
	<body>
		<label for="txtBienvenido" id="txtBienvenido">�Bienvenido, Usuario!</h1>
		<div id="panelNotificaciones">
			Notificaciones
		</div>
		<div id="logo"><img src="<?php echo base_url();?>img/logoVilla.png" height="250" width="250" /></div>
		<div id="opcionesMenu1">
			<div id="btnDonadores" class="circulo">
				<div id="textoCirculo">Donadores</label>
			</div>
			<div id="btnDonaciones" class="circulo">
				<div id="textoCirculo">Donaciones</label>
			</div>
			<div id="btnCampanias" class="circulo">
				<div id="textoCirculo">Campa�as</label>
			</div>
			<div id="btnNinios" class="circulo">
				<div id="textoCirculo">Ni�os</label>
			</div>
		</div>
		<div id="opcionesMenu2">
			<div id="btnMailing" class="circulo">
				<div id="textoCirculo">Mailing</label>
			</div>
			<div id="btnComprobantes" class="circulo">
				<div id="textoCirculo">Comprobantes</label>
			</div>
			<div id="btnReportes" class="circulo">
				<div id="textoCirculo">Reportes</label>
			</div>
			<div id="btnUsuarios" class="circulo">
				<div id="textoCirculo">Usuarios</label>
			</div>
		</div>
	</body>
</html>