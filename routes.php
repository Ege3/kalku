<?php

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
//$router->get('about/culture', 'controllers/about-culture.php');
$router->get('contact', 'PagesController@contact');

//$router->get('admin', 'controllers/test.php');

$router->post('addmaterial', 'MaterialsController@add');
$router->get('materials', 'MaterialsController@index');
$router->get('materials/delete', 'MaterialsController@delete');
$router->get('materials/edit', 'MaterialsController@edit');


$router->get('feedback', 'controllers/feedback.php');
$router->post('add-feedback', 'controllers/add-feedback.php');

