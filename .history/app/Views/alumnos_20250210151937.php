<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alumnos</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    width: 80%;
    max-width: 800px;
}

h2 {
    text-align: center;
    color: #333;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 10px;
    text-align: center;
}

th {
    background-color: #007BFF;
    color: white;
}

td {
    background-color: #f9f9f9;
}

.btn {
    border: none;
    padding: 8px;
    cursor: pointer;
    font-size: 16px;
    border-radius: 4px;
    text-decoration: none;
    display: inline-block;
    margin: 2px;
}

.edit {
    background-color: #28a745;
    color: white;
}

.delete {
    background-color: #dc3545;
    color: white;
}

.delete-form {
    display: inline;
}

    </style>
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