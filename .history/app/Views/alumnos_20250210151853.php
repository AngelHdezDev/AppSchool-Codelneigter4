<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alumnos</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>

    <div class="container">
        <h2>Lista de Alumnos</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Grupo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Juan Pérez</td>
                    <td>Grupo A</td>
                    <td>
                        <a href="editar-alumno.html" class="btn edit"><i class="fas fa-edit"></i></a>
                        <form action="eliminar-alumno.php" method="POST" class="delete-form">
                            <button type="submit" class="btn delete"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>María López</td>
                    <td>Grupo B</td>
                    <td>
                        <a href="editar-alumno.html" class="btn edit"><i class="fas fa-edit"></i></a>
                        <form action="eliminar-alumno.php" method="POST" class="delete-form">
                            <button type="submit" class="btn delete"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>