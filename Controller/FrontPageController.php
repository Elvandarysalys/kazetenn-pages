<?php

namespace Kazetenn\Pages\Controller;

use Exception;
use Kazetenn\Pages\Entity\Page;
use Kazetenn\Pages\Repository\PageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontPageController extends AbstractController
{
    /**
     * @Route("/{page_path_1}/{page_path_2}", name="front_index", methods={"GET"})
     * @throws Exception
     */
    public function index(PageRepository $pageRepository, string $page_path_1 = null, string $page_path_2 = null): Response
    {
        /** @var Page|null $page */
        $page = $pageRepository->findPage($page_path_1, $page_path_2);

        if (null === $page) {
            return $this->redirectToRoute('not_found');
        }

        return $this->render('@KazetennPages/display_page.html.twig', [
            'page' => $page,
        ]);
    }
}
