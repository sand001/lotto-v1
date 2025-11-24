<?php
/**
 * CMS - Panel de Administración
 * 
 * Este directorio contiene el panel de administración
 * para gestionar sorteos, usuarios y contenido.
 */

// Iniciar sesión si no está iniciada
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Verificar autenticación (implementar según necesidades)
$is_authenticated = isset($_SESSION['user_id']);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS - Lotto Sorteos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            border-bottom: 2px solid #4CAF50;
            padding-bottom: 10px;
        }
        .info {
            background: #e8f5e9;
            padding: 15px;
            border-radius: 4px;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>CMS - Panel de Administración</h1>
        
        <div class="info">
            <h2>Bienvenido al CMS</h2>
            <p>Este es el panel de administración para gestionar:</p>
            <ul>
                <li>Sorteos</li>
                <li>Usuarios</li>
                <li>Contenido del sitio</li>
                <li>Configuraciones</li>
            </ul>
            
            <p><strong>Estado de autenticación:</strong> 
                <?php echo $is_authenticated ? 'Autenticado' : 'No autenticado'; ?>
            </p>
        </div>
        
        <p><em>Implementa aquí la lógica de autenticación y las funcionalidades del CMS.</em></p>
    </div>
</body>
</html>

