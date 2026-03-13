<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Mensaje</title>
</head>
<body>
    <h1>Tienes un nuevo mensaje de contacto</h1>
    <p><strong>Nombre:</strong> {{ $data['name'] }}</p>
    <p><strong>Correo:</strong> {{ $data['email'] }}</p>
    <p><strong>Mensaje:</strong></p>
    <p>{{ $data['message'] }}</p>
</body>
</html>