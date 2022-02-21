<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<h3>Contactar.</h3>
	@if($phone)
		<p>Teléfono: {{ $phone }}</p>
	@endif
	@if($email)
		<p>Email: {{ $email }}</p>
	@endif
	@if($affair)
	<p>Asunto: {{ $affair }}</p>
	@endif
	@if($name)
	<p>Nombre: {{ $name }}</p>
	@endif
	@if($body)
	<p>Texto:</p>
	<p style="white-space: pre-line;">{{ $body }}</p>
	@endif
</body>
</html>
