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
            <center><h1 style="color: #e60f0f; margin: 0 0 7px">SE BUSCA!</h1></center>
            <center><h1 style="color: #e60f0f; margin: 0 0 7px">{{ $info->name }}</h1></center>
				<center><img src="https://beta.tamalindos.com{{ Storage::url($info->photo) }}" style="width: 80%;" alt="{{ $info->name }}"></center>
				<center><p style="margin: 2px; font-size: 30px">
				Si la has visto, comunicate a el numero #</p></center>
				<center><p style="margin: 5px; font-size: 12px">
				Se gratificara con $10.00 MXN</p></center>
				<p style="color: #b3b3b3; font-size: 12px; text-align: center;margin: 30px 0 0">Tamalindos 2020</p>
			</div>
			</center>
		</td>
	</tr>
</table>
</body>
</html>