<?php
    namespace SaggWeb;
    require 'vendor/autoload.php';
    use League\Plates\Engine as Engine;
    use Slim\Factory\AppFactory;
    $app = AppFactory::create();
    $app->addRoutingMiddleware();
    $templates = new Engine('/home/saggins/sagg.in-php/templates');
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
    $app->run();
?>