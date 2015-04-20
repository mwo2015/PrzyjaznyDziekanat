<?php
namespace Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class LecturerController
{
    public function search(Request $request, Response $response)
    {
        $response->setContent(include '../app/views/lecturerPanelSearch.php');
        return $response;
    }

    public function searchResults(Request $request, Response $response)
    {
        $response->setContent(include '../app/views/lecturerPanelSearchResult.php');
        return $response;
    }

    public function resultPanel(Request $request, Response $response)
    {
        $response->setContent(include '../app/views/lecturerPanelEntity.php');
        return $response;
    }
}