<?php  

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

//require __DIR__ . "/../public/index.php";

// require __DIR__ . "/../vender/autoload.php";
$app = require_once __DIR__.'/../boostrap/app.php';

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);
