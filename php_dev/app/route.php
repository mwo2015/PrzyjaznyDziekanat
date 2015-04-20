<?php

use League\Route\RouteCollection;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use League\Route\Strategy\RequestResponseStrategy;
use League\Container\Container;

$container = new Container();
$container->singleton('Symfony\Component\HttpFoundation\Request', function () {
			$request = Request::createFromGlobals();
			return $request;
			 
        });
$container->add('Symfony\Component\HttpFoundation\Response');



/**
 * 	Routes Collection linked to Controllers
 *   
 *   */
$router = new RouteCollection($container);

// PANEL ROUTE
$router->addRoute('GET', '/', 'Controller\IndexController::indexPage1');
$router->addRoute('GET', '/2', 'Controller\IndexController::indexPage2');
$router->addRoute('GET', '/login', 'Controller\IndexController::login');
$router->addRoute('GET', '/wykladowca-wyszukaj', 'Controller\LecturerController::search');
$router->addRoute('GET', '/wykladowca-wyszukaj-wyniki', 'Controller\LecturerController::searchResults');
$router->addRoute('GET', '/wykladowca-panel', 'Controller\LecturerController::resultPanel');

$dispatcher = $router->getDispatcher();

// Dispatching route and create response
$response = $dispatcher->dispatch($container->get('Symfony\Component\HttpFoundation\Request')->getMethod(), $container->get('Symfony\Component\HttpFoundation\Request')->getPathInfo());

// Send response
$response->send();
