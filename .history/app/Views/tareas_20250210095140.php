<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas - Profesor</title>
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
        }

        .profile-section h3,
        .profile-section p {
            color: white;
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
        }

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

        .create-task-btn {
            background: #2ecc71;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: flex;
            align-items: center;
        }

        .create-task-btn i {
            margin-right: 8px;
        }

        .task-list {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .task-item {
            padding: 15px;
            border-bottom: 1px solid #ecf0f1;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .task-item:last-child {
            border-bottom: none;
        }

        .task-info h4 {
            color: #2c3e50;
            margin-bottom: 5px;
        }

        .task-info p {
            color: #7f8c8d;
            font-size: 0.9rem;
        }

        .task-actions button {
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            margin-left: 5px;
            cursor: pointer;
        }

        .edit-btn {
            background: #3498db;
            color: white;
        }

        .delete-btn {
            background: #e74c3c;
            color: white;
        }
    </style>
</head>

<body>
    <?php include(APPPATH . 'Views/partials/sidebar.php'); ?>


    <div class="main-content">
        <div class="header">
            <h1>Tareas</h1>
            <button class="create-task-btn">
                <i class="fas fa-plus"></i> Nueva Tarea
            </button>
            <a href="<?= base_url('/tarea') ?>" class="create-task-btn">
                <i class="fas fa-plus"></i> Nueva Tarea
            </a>
        </div>

        <div class="task-list">
            <h2>Lista de Tareas</h2>
            <div class="task-item">
                <div class="task-info">
                    <h4>Ejercicios de Álgebra</h4>
                    <p>Fecha límite: 15 de Febrero, 2025</p>
                </div>
                <div class="task-actions">
                    <button class="edit-btn"><i class="fas fa-edit"></i></button>
                    <button class="delete-btn"><i class="fas fa-trash"></i></button>
                </div>
            </div>
            <div class="task-item">
                <div class="task-info">
                    <h4>Proyecto de Geometría</h4>
                    <p>Fecha límite: 20 de Febrero, 2025</p>
                </div>
                <div class="task-actions">
                    <button class="edit-btn"><i class="fas fa-edit"></i></button>
                    <button class="delete-btn"><i class="fas fa-trash"></i></button>
                </div>
            </div>
            <div class="task-item">
                <div class="task-info">
                    <h4>Examen de Trigonometría</h4>
                    <p>Fecha límite: 25 de Febrero, 2025</p>
                </div>
                <div class="task-actions">
                    <button class="edit-btn"><i class="fas fa-edit"></i></button>
                    <button class="delete-btn"><i class="fas fa-trash"></i></button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>