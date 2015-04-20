<?php
namespace Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class IndexController 
{
	public function indexPage1(Request $request, Response $response)
	{		
		$response->setContent(include '../app/views/indexView.php');
		return $response;
	}

	public function indexPage2(Request $request, Response $response)
	{
		$response->setContent(include '../app/views/indexView2.php');
		return $response;
	}

	public function login(Request $request, Response $response)
	{
		$response->setContent(include '../app/views/loginView.php');
		return $response;
	}
}