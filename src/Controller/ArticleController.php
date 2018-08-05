<?php
/**
 * Created by PhpStorm.
 * User: hussam
 * Date: 2018-08-04
 * Time: 10:18 PM
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage(){
        return new Response('First Page of The Site');
    }

    /**
     * @Route("/news/{slug}")
     */
    public  function  show($slug){
        return new Response(sprintf(
                "Future Page To Show The Article: %s",
                $slug
        ));
    }
}