<?php
/**
 * API - Lotto Sorteos
 * 
 * Este directorio contiene los endpoints de la API REST
 * para la aplicación de sorteos.
 */

header('Content-Type: application/json; charset=utf-8');

// Configuración CORS (ajustar según necesidades)
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization');

// Manejar preflight requests
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// Obtener la ruta solicitada
$request_uri = $_SERVER['REQUEST_URI'];
$request_method = $_SERVER['REQUEST_METHOD'];

// Respuesta por defecto
$response = [
    'status' => 'error',
    'message' => 'Endpoint no encontrado',
    'data' => null
];

http_response_code(404);
echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

