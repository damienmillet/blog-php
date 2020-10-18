<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\MarkDown;
use App\Service\Yml;

/**
 * Class BlogController
 * @package App\Controller
 * @Route("/blog")
 */
class BlogController extends AbstractController
{
    /**
     * @Route("/{id}", name="blog")
     * @param Article $id
     * @param ArticleRepository $articleRepository
     * @return Response
     */
    public function index(ArticleRepository $articleRepository, Article $id = NULL): Response
    {
        return $id ?
            $this->render('blog/article.html.twig', ['article' => $id]) :
            $this->render('blog/index.html.twig', ['articles' => $articleRepository->findAll()]);
    }

    /**
     * @Route("/{tag}", name="blog")
     * @param MarkDown $down
     * @param Yml $yml
     * @param string $tag
     * @return Response
     */
    public function indexMd(MarkDown $down, Yml $yml, string $tag = ''): Response
    {
        return $this->render('blog/index.html.twig', [
            'mdfiles' => $down->getMD($tag),
            'ymlfile' => $yml->getYML($tag)
        ]);
    }
}
