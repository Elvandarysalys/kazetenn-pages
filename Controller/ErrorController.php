<?php
/*
 * Copyright (c) Gwilherm-Alan Turpin 2022.
 *
 * This file is part of the Kazetenn Pages Bundle
 *
 * For more informations about the license, you can refer yourself  to the LICENSE file at the root of the project.
 */

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
