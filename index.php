<?php

require 'inc\Slim-2.x\Slim\Slim.php';

\Slim\Slim::registerAutoloader();


$app = new \Slim\Slim();



// GET route
$app->get(
    '/',
    function () {
       require_once("view/index.php");
    }
);

$app->get(
    '/videos.php',
    function () {
       require_once("view/videos.php");
    }
);

$app->get(
    '/shop.php',
    function () {
       require_once("view/shop.php");
    }
);

// POST route
$app->post(
    '/post',
    function () {
        echo 'This is a POST route';
    }
);

// PUT route
$app->put(
    '/put',
    function () {
        echo 'This is a PUT route';
    }
);

// PATCH route
$app->patch('/patch', function () {
    echo 'This is a PATCH route';
});

// DELETE route
$app->delete(
    '/delete',
    function () {
        echo 'This is a DELETE route';
    }
);


$app->run();
