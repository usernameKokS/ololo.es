<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<h3>Nueva factura</h3>
	@if($social)
		<p>Empresa o razón social: {{ $social }}</p>
	@endif
	@if($cif)
	<p>CIF: {{ $cif }}</p>
	@endif
	@if($name)
	<p>Nombre: {{ $name }}</p>
	@endif
	@if($surname)
	<p>Apellidos: {{ $surname }}</p>
	@endif
	@if($postal)
	<p>Dirección postal: {{ $postal }}</p>
	@endif
	@if($country)
	<p>País: {{ $country }}</p>
	@endif
	@if($email)
	<p>Email: {{ $email }}</p>
	@endif
	@if($date_start && $date_end)
	<p>
        Las fechas:: {{ $date_start }} - {{ $date_end }}
    </p>
	@endif
</body>
</html>
