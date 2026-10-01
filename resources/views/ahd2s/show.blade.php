<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Detalle del Registro</h2>

    <p><strong>ID:</strong> {{ $ahd2->id }}</p>
    <p><strong>Nombre:</strong> {{ $ahd2->nombre }}</p>
    <p><strong>Descripción:</strong> {{ $ahd2->descripcion }}</p>
    <p><strong>Precio:</strong> {{ $ahd2->precio }}</p>
    <p><strong>Stock:</strong> {{ $ahd2->stock }}</p>

    <a href="{{ route('ahd2s.index') }}" class="btn btn-secondary">Volver</a>
    <a href="{{ route('ahd2s.edit', $ahd2) }}" class="btn btn-warning">Editar</a>
</div>
</body>
</html>