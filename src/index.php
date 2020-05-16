<?php
    namespace SaggWeb;
    require __DIR__ . '/../vendor/autoload.php';
    require  __DIR__ . '/../src/database.php';
    use League\Plates\Engine as Engine;
    use Slim\Factory\AppFactory;

    use function database\vault;

$app = AppFactory::create();
    $app->addRoutingMiddleware();
    $templates = new Engine(__DIR__ . '/templates');
    $app ->get('/', function ($request, $response, $args){
        global $templates;
        $html = $templates->render('page');
        $response->getBody()->write($html);
        return $response;
    });
    $app -> get('/mc/econ/rich', function ($request, $response, $args){
        global $templates;
        $html = $templates->render('economy');
        $response->getBody()->write($html);
        return $response;
    });
    $app -> get('/mc/vault', function ($request, $response, $args){
        $data = vault();
        $payload = json_encode($data);
        $response->getBody()->write($payload);
        return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(201);
    });
    $app->run();
?>