<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Se Busca</title>
</head>
<body>
<table style="max-width: 600px; padding: 10px; margin:0 auto; border-collapse: collapse;">
	<tr>
		<td style="background-color: #fff; text-align: left; padding: 0">
			<a href="https://www.tamalindos.com">
				<center><img src="{{ asset('img/tamalindos-l.svg') }} " alt="https://tamalindos.com" style="width: 80%;"></center>
			</a>
		</td>
	</tr>

	<tr>
		<td style="background-color: #ecf0f1;>
		<center>
			<div style="color: #34495e; margin: 4% 10% 2%; text-align: justify;font-family: sans-serif">
            <center><h1 style="color: #108aaf; margin: 0 0 7px">LA ENCONTRAROOON!</h1></center>
            <center><h1 style="color: #108aaf; margin: 0 0 7px">{{ $info->name }} fue encontrada en....</h1></center>
				<center><p style="margin: 2px; font-size: 30px">Puedes contactar a la persona que tiene a {{ $info->name }} a este numero 999999</p></center>
				<p style="color: #b3b3b3; font-size: 12px; text-align: center;margin: 30px 0 0">tamalindos.com todos los derechos reservados 2020</p>
			</div>
			</center>
		</td>
	</tr>
</table>
</body>
</html>