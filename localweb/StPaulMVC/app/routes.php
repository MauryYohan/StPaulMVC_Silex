<?php
/**
 * Created by PhpStorm.
 * User: 15MAURYY
 * Date: 27/03/2017
 * Time: 14:39
 * Commit version Silex
 */

//Retourne tous les séjours
$app->get('/', function() {

    require '../src/model.php';
    $sejours = getAllSejours();
    $sejours = getAllSejours();

    ob_start();                 // start buffering HTML output
    require '../views/view.php';
    $view = ob_get_clean();      // assign HTML output to $view
    return $view;
});

