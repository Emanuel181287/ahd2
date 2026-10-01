<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio de CRUD AHD2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Lista de Registros</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('ahd2s.create') }}" class="btn btn-primary mb-3">Nuevo</a>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Acciones</th>
        </tr>

        @foreach($ahd2s as $ahd2)
        <tr>
            <td>{{ $ahd2->id }}</td>
            <td>{{ $ahd2->nombre }}</td>
            <td>{{ $ahd2->descripcion }}</td>
            <td>{{ $ahd2->precio }}</td>
            <td>{{ $ahd2->stock }}</td>
            <td>
                <a href="{{ route('ahd2s.show', $ahd2) }}" class="btn btn-info btn-sm">Ver</a>
                <a href="{{ route('ahd2s.edit', $ahd2) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('ahd2s.destroy', $ahd2) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
</body>
</html>