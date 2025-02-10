<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tarea</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: #f5f6fa;
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background: #2c3e50;
            height: 100vh;
            position: fixed;
            padding: 20px 0;
        }

        .profile-section {
            text-align: center;
            padding: 20px;
            border-bottom: 1px solid #34495e;
        }

        .profile-section img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .profile-section h3 {
            color: white;
            font-size: 1.1rem;
            margin-bottom: 5px;
        }

        .profile-section p {
            color: #bdc3c7;
            font-size: 0.9rem;
        }

        .menu {
            padding: 20px 0;
        }

        .menu-item {
            padding: 12px 25px;
            color: #ecf0f1;
            text-decoration: none;
            display: flex;
            align-items: center;
            transition: 0.3s;
        }

        .menu-item:hover {
            background: #34495e;
        }

        .menu-item i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }

        /* Main Content */
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        .header {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h1 {
            color: #2c3e50;
        }

        .logout-btn {
            background: #e74c3c;
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        /* Contenedor del formulario */
        .task-container {
            max-width: 600px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .task-container h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        /* Estilos del formulario */
        .task-form .form-group {
            margin-bottom: 15px;
        }

        .task-form label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #2c3e50;
        }

        .task-form input,
        .task-form textarea,
        .task-form select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .task-form textarea {
            resize: vertical;
        }

        /* Botón principal */
        .btn-primary {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 12px;
            width: 100%;
            background: #2ecc71;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease-in-out;
        }

        .btn-primary:hover {
            background: #27ae60;
        }
    </style>
</head>

<body>

    <?php include(APPPATH . 'Views/partials/sidebar.php'); ?>

    <div class="main-content">
        <div class="header">
            <h1>Editar Tarea</h1>
            <a href="<?= base_url('auth/logout') ?>" class="logout-btn">
                <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
            </a>
        </div>

        <div class="task-container">
            <h2>Editar Tarea Existente</h2>

            <form action="<?= base_url('/tarea/update' . $tarea['id']) ?>" method="POST" class="task-form">
                <div class="form-group">
                    <label for="titulo">Título de la tarea:</label>
                    <input type="text" id="titulo" name="titulo" value="<?= esc($tarea['titulo']); ?>" required>
                </div>

                <div class="form-group">
                    <label for="descripcion">Descripción:</label>
                    <textarea id="descripcion" name="descripcion" rows="4" required><?= esc($tarea['descripcion']); ?></textarea>
                </div>

                <div class="form-group">
                    <label for="fecha_entrega">Fecha de entrega:</label>
                    <input type="date" id="fecha_entrega" name="fecha_entrega" value="<?= esc($tarea['fecha_entrega']); ?>" required>
                </div>

                <button type="submit" class="btn-primary">
                    <i class="fas fa-save"></i> Guardar Tarea
                </button>
            </form>
        </div>
    </div>

</body>

</html>