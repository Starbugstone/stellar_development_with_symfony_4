<?php
/**
 * Created by PhpStorm.
 * User: clancy
 * Date: 30/11/2018
 * Time: 13:32
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{

    /**
     * @Route("/")
     * @return Response
     */
    public function homepage()
    {
        return new Response("Hello World");
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        return new Response($slug." Page");
    }
}