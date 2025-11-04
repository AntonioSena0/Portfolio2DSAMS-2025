<?php
$routes = require __DIR__ . '/../app/routes/web.php';

$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : 'login';

if (array_key_exists($url, $routes)) {
    $route = $routes[$url];
    $controllerName = $route['controller'];
    $actionName = $route['action'];

    $controllerPath = "../app/controllers/{$controllerName}.php";

    if (file_exists($controllerPath)) {
        include $controllerPath;
        $controllerObj = new $controllerName();

        if (method_exists($controllerObj, $actionName)) {
            $controllerObj->$actionName();
        } else {
            echo "Ação não encontrada!";
        }
    } else {
        echo "Controlador não encontrado!";
    }
} else {
    echo "Rota não encontrada!";
}
?>