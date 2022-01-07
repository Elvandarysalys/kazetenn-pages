<?php

namespace Kazetenn\Pages\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ErrorController extends AbstractController
{
    /**
     * @Route("/404", name="not_found", methods={"GET"}, priority="1")
     */
    public function notFound(): Response
    {
        return $this->render('@KazetennPages/not_found.html.twig');
    }
}
