<?php
/**
 * Created by PhpStorm.
 * User: hussam
 * Date: 2018-08-04
 * Time: 10:18 PM
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage(){
        return $this->render("article/homepage.html.twig");
    }

    /**
     * @Route("/news/{slug}", name="article_show")
     */
    public  function  show($slug){
//        User comments
        $comments = [
            "I had a normal bacon once and it didn't taste like bacon",
            "This is awesome. I love me some tacos",
            "I love tacos too. Buy some from my site! tacoserria.com"
        ];

        return $this->render("article/show.html.twig",[
            'title' => ucwords(str_replace('-',' ',$slug)),
            'comments' => $comments
        ]);
    }
}