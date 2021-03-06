<?php

namespace App\Controller;

use App\Form\MailType;
use App\Repository\ArticleRepository;
use App\Service\MarkDown;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     * @param MarkDown $down
     * @param Request $request
     * @param MailerInterface $mailer
     * @return Response
     * @throws TransportExceptionInterface
     */
    public function index(MarkDown $down, Request $request, MailerInterface $mailer): Response
    {
        $form = $this->createForm(MailType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $task = $form->getData();
            $email = (new Email())
                ->from($task['email'])
                ->to('contact@damien-millet.dev')
                ->text($task['message']);
            $mailer->send($email);
        }

        /*return $this->render('home/index.html.twig', [
            'articles' => $articleRepository->findBy([], NULL, '5'),
            'form' => $form->createView()
        ]);*/

        return $this->render('home/index.html.twig', [
            'articles' => $down->getAllMD(),
            'form' => $form->createView()
        ]);
    }
}
