<?php
namespace Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class LecturerController
{
    public function search(Request $request, Response $response)
    {
        $response->setContent(include '../app/views/lecturer_panel_search.php');
        return $response;
    }

    public function searchResults(Request $request, Response $response)
    {
        $response->setContent(include '../app/views/lecturer_panel_search_result.php');
        return $response;
    }

    public function resultPanel(Request $request, Response $response)
    {
        $response->setContent(include '../app/views/lecturer_panel.php');
        return $response;
    }
}