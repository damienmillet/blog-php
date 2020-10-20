<?php

namespace App\Controller;

use App\Service\MarkDown;
use App\Service\Yml;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class BlogController
 * @package App\Controller
 * @Route("/blog")
 */
class BlogController extends AbstractController
{
    /**
     * @Route("/{tag}", name="blog")
     * @param MarkDown $down
     * @param Yml $yml
     * @param string $tag
     * @return Response
     */
    public function indexMd(MarkDown $down, Yml $yml, string $tag = ''): Response
    {
        return $tag !== '' ?
            $this->render('blog/article-md.html.twig', [
                'article' => $down->getMD($tag),
                'ymlfile' => $yml->getYML($tag)
            ]) : $this->render('blog/index-md.html.twig', ['articles' => $down->getAllMD()]);
    }
}
