<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Profesor</title>
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

        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-bottom: 20px;
        }

        .stat-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .stat-card i {
            font-size: 2rem;
            margin-bottom: 10px;
            color: #3498db;
        }

        .stat-card h3 {
            font-size: 1.8rem;
            color: #2c3e50;
            margin-bottom: 5px;
        }

        .stat-card p {
            color: #7f8c8d;
        }

        .recent-tasks {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .task-list {
            margin-top: 15px;
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

        .create-task-btn {
            background: #2ecc71;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 20px;
            display: inline-flex;
            align-items: center;
        }

        .create-task-btn i {
            margin-right: 8px;
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <?php include(APPPATH . 'Views/partials/sidebar.php'); ?>

    <!-- Main Content -->
    <div class="main-content">
        <div class="header">
            <h1>Dashboard</h1>

            <a href="<?= base_url('auth/logout') ?>"" class=" logout-btn">
                <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
            </a>
        </div>

        <a href="<?= base_url('/tarea') ?>" class="create-task-btn">
            <i class="fas fa-plus"></i> Nueva Tarea
        </a>


        <div class="dashboard-grid">
            <div class="stat-card">
                <i class="fas fa-users"></i>
                <h3>150</h3>
                <p>Alumnos Totales</p>
            </div>
            <div class="stat-card">
                <i class="fas fa-tasks"></i>
                <h3>24</h3>
                <p>Tareas Activas</p>
            </div>
            <div class="stat-card">
                <i class="fas fa-clock"></i>
                <h3>12</h3>
                <p>Pendientes de Calificar</p>
            </div>
        </div>

        <!-- resources/views/dashboard.php -->

        <div class="recent-tasks">
            <h2>Tareas Recientes</h2>
            <div class="task-list">
                <?php foreach ($tareas as $tarea): ?>
                    <div class="task-item">
                        <div class="task-info">
                            <h4><?= esc($tarea['titulo']); ?></h4>
                            <p>Fecha límite: <?= esc($tarea['fecha_entrega']); ?></p>
                        </div>
                        <div class="task-actions">
                            <a href="<?= base_url('tarea/editar/' . $tarea['id']); ?>" class="edit-btn">
                                <i class="fas fa-edit"></i> 
                            </a>

                           
                            <!-- Formulario para eliminar la tarea -->
                            <form action="<?= base_url('tarea/delete/' . $tarea['id']); ?>" method="POST" style="display:inline;">
                                <button type="submit" class="delete-btn"><i class="fas fa-trash"></i> </button>
                            </form>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>


    </div>
</body>

</html>