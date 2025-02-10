<div class="sidebar">
    <div class="profile-section">
        <img src="/api/placeholder/80/80" alt="Profesor">
        <h3>Prof. <?= session()->get('name') ?? 'Juan Pérez' ?></h3>
        <p>Matemáticas</p>
    </div>
    <div class="menu">
        <a href="<?= base_url('dashboard') ?>" class="menu-item">
            <i class="fas fa-home"></i> Dashboard
        </a>
        <a href="<?= base_url('tareas') ?>" class="menu-item">
            <i class="fas fa-tasks"></i> Tareas
        </a>
        <a href="<?= base_url('students') ?>" class="menu-item">
            <i class="fas fa-users"></i> Alumnos
        </a>
        <a href="<?= base_url('grades') ?>" class="menu-item">
            <i class="fas fa-star"></i> Calificaciones
        </a>
        <a href="<?= base_url('messages') ?>" class="menu-item">
            <i class="fas fa-envelope"></i> Mensajes
        </a>
        <a href="<?= base_url('settings') ?>" class="menu-item">
            <i class="fas fa-cog"></i> Configuración
        </a>
    </div>
</div>
