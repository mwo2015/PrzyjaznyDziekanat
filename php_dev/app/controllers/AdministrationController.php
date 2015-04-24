<?php
namespace Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class AdministrationController
{
    public function indexPage(Request $request, Response $response)
    {
        $page = $request->get('page');
        if(!$page) {
            $page = 1;
        }
        $response->setContent(include '../app/views/administration_panel_'.$page.'.php');
        return $response;
    }
}