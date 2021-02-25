<?php


$router->group(['prefix' => 'api'], function () use($router) {
    // For SMS Route
    $router->get('notify/people', 'NotifyController@message');
    $router->post('sms/message/done', 'NotifyController@update');


    // Checker
    $router->post('checker/login', 'CheckerController@login');


    // Personnel

});

