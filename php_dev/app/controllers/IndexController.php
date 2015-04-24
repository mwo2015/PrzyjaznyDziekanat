<?php
namespace Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class IndexController 
{
	public function indexPage(Request $request, Response $response)
	{
		$page = $request->get('page');
		if(!$page) {
			$page = 1;
		}
		$response->setContent(include '../app/views/student_panel_'.$page.'.php');
		return $response;
	}

	public function login(Request $request, Response $response)
	{
		$login = $request->request->get('login');

		if($login == 'student') {
			$response = new RedirectResponse('/mow/php_dev/public/student');
			return $response;
		} else if($login == 'administracja') {
			$response = new RedirectResponse('/mow/php_dev/public/administracja-panel');
			return $response;
		} else if($login == 'wykladowca') {
			$response = new RedirectResponse('/mow/php_dev/public/wykladowca-wyszukaj');
			return $response;
		}
		$response->setContent(include '../app/views/loginView.php');
		return $response;
	}
}