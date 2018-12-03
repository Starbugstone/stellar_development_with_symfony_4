<?php
/**
 * Created by PhpStorm.
 * User: clancy
 * Date: 30/11/2018
 * Time: 13:32
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{

    /**
     * @Route("/", name="home")
     * @return Response
     */
    public function homepage()
    {
        return $this->render('article/home.html.twig', [

        ]);
    }

    /**
     * @Route("/news/{slug}", name="article.show")
     */
    public function show($slug)
    {
        //dump($slug, $this);
        $comments = [
            'I ate a normal rock once. It did NOT taste like bacon!',
            'Woohoo! I\'m going on an all-asteroid diet!',
            'I like bacon too! Buy some from my site! bakinsomebacon.com',
        ];

        return $this->render('article/show.html.twig', [
            'title' => ucwords(str_replace('-', ' ', $slug)),
            'comments' => $comments,
            'slug' => $slug,
        ]);
    }

    /**
     * @Route("/news/{slug}/heart", name="article.toggle_heart", methods={"POST"})
     * @param $slug
     * @return JsonResponse
     */
    public function toggleArticleHeart($slug)
    {
        // TODO - actually heart/unheart the article!
        return new JsonResponse(['hearts' => rand(5, 100)]);
    }
}