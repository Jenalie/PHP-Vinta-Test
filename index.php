<?php

define('ROOT', __DIR__);
require_once(ROOT . '/utils/NewsManager.php');
require_once(ROOT . '/utils/CommentManager.php');
require_once 'vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

// Specify the directory where your templates are located
$loader = new FilesystemLoader(__DIR__ . '/views');

// Initialize Twig environment
$twig = new Environment($loader);

// Database data
$newsManager = NewsManager::getInstance();
$news = $newsManager->listNews();

$commentManager = CommentManager::getInstance();
$coments = $commentManager->listComments();

// Render the template with data
$data = [
    'comments' => $coments,
    'news'     => $news
];
echo $twig->render('index.html.twig', $data);