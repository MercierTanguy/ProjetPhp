<?php

require 'config/database.php';
require 'vendor/autoload.php';

$page = 'home';
if (isset($_GET['p'])) {
    $page = $_GET['p'];
}

$loader = new \Twig\Loader\FilesystemLoader('src\view');
$twig = new \Twig\Environment($loader, [
    'cache' => false,
]);

switch ($page) {
    case 'home':
        echo $twig->render('home.twig');
        break;

    case 'posts':
        require 'src/model/PostModel.php';
        require 'src/Controller/PostController.php';
    
        $model = new PostModel($db);
        $controller = new PostController($model);
        $controller->index();
        break;
    
    case 'categories':
        require 'src/model/CategoriesModel.php';
        require 'src/Controller/CategoriesController.php';
    
        $model = new CategoryModel($db);
        $controller = new CategoryController($model);
        $controller->index();
        break;

    case 'category':
        if (isset($_GET['id'])) {
                $categoryId = $_GET['id'];
                $controller->getCategoryById($categoryId);
        }
        break;

    case 'update_category':
        if (isset($_GET['id']) && isset($_POST['name'])) {
            $categoryId = $_GET['id'];
            $newName = $_POST['name'];
            $controller->updateCategory($categoryId, $newName);
        }
        break;
    
    default:
        header('HTTP/1.0 404 NOT FOUND');
        echo $twig->render('404.twig');
        break;
}


?>