<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsuarioModel;


class AuthController extends Controller
{
    public function index()
    {
        return view('login');

    }

    public function login()
    {
        try {
            log_message('info', 'Método login() llamado');
            helper(['url', 'form']); // Asegurar que los helpers están cargados
            $session = session();

            // Validación de los campos de correo y contraseña
            if (
                !$this->validate([
                    'email' => 'required|valid_email',
                    'password' => 'required|min_length[6]',
                ])
            ) {
                return redirect()->to('/login')->withInput()->with('error', 'Por favor, ingresa los datos correctamente.');
            }

            // Obtener los datos del formulario
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $userType = $this->request->getPost('tipo'); // Asegurar que el nombre del campo es correcto

            log_message('debug', 'Login intentado con Email: ' . $email . ' | Tipo: ' . $userType);

            // Instanciar el modelo del usuario
            $userModel = new UsuarioModel();
            $user = $userModel->where('email', $email)->first();

            if (!$user) {
                log_message('error', 'Usuario no encontrado: ' . $email);
                return redirect()->to('/login')->withInput()->with('error', 'Usuario no encontrado.');
            }

            // Verificar la contraseña
            if (!password_verify($password, $user['password'])) {
                log_message('error', 'Contraseña incorrecta para: ' . $email);
                return redirect()->to('/login')->withInput()->with('error', 'Contraseña incorrecta.');
            }

            // Verificar el tipo de usuario (maestro o alumno)
            if ($user['tipo'] !== $userType) {
                log_message('error', 'Tipo de usuario incorrecto para: ' . $email);
                return redirect()->to('/login')->withInput()->with('error', 'El tipo de usuario no coincide.');
            }

            // Almacenar el usuario en la sesión
            $session->set('user', $user);
            log_message('debug', 'Usuario autenticado correctamente: ' . $email);

            // Redirigir al dashboard
            return redirect()->to('/dashboard');

        } catch (\Exception $e) {
            log_message('error', 'Error en el login: ' . $e->getMessage());
            return redirect()->to('/login')->withInput()->with('error', 'Ocurrió un error inesperado. Intenta de nuevo.');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login')->with('message', 'Sesión cerrada correctamente.');
    }



}