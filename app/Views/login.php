<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistema Escolar</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            width: 100%;
            max-width: 400px;
        }

        .school-logo {
            text-align: center;
            margin-bottom: 2rem;
        }

        .school-logo i {
            font-size: 3rem;
            color: #764ba2;
        }

        .school-logo h1 {
            color: #333;
            font-size: 1.5rem;
            margin-top: 0.5rem;
        }

        .input-group {
            margin-bottom: 1.5rem;
            position: relative;
        }

        .input-group i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #764ba2;
        }

        .input-group input {
            width: 100%;
            padding: 12px 40px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .input-group input:focus {
            outline: none;
            border-color: #764ba2;
        }

        .type-selector {
            margin-bottom: 1.5rem;
        }

        .type-selector label {
            margin-right: 1rem;
            color: #666;
        }

        .submit-btn {
            width: 100%;
            padding: 12px;
            background: #764ba2;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .submit-btn:hover {
            background: #653991;
        }

        .forgot-password {
            text-align: center;
            margin-top: 1rem;
        }

        .forgot-password a {
            color: #764ba2;
            text-decoration: none;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }

        .alert {
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 1rem;
            display: none;
        }

        .alert-error {
            background: #ffe6e6;
            color: #d63031;
            border: 1px solid #fab1a0;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="school-logo">
            <i class="fas fa-graduation-cap"></i>
            <h1>Sistema Escolar</h1>
        </div>

        <div class="alert alert-error" id="error-message"></div>

        <form action="<?= base_url('/auth/login') ?>" method="POST">
            <?= csrf_field() ?>
            
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Correo electrónico" required>
            </div>

            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Contraseña" required>
            </div>

            <div class="type-selector">
                <label>
                    <input type="radio" name="tipo" value="maestro" checked> Maestro
                </label>
                <label>
                    <input type="radio" name="tipo" value="student"> Alumno
                </label>
            </div>

            <button type="submit" class="submit-btn">Iniciar Sesión</button>

            <div class="forgot-password">
                <a href="<?= base_url('auth/forgot-password') ?>">¿Olvidaste tu contraseña?</a>
            </div>
        </form>
    </div>

</body>
</html>