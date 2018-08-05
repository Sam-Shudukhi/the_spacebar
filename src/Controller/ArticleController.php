<?php
/**
 * Created by PhpStorm.
 * User: hussam
 * Date: 2018-08-04
 * Time: 10:18 PM
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    public function homepage(){
        return new Response('First Page of The Site');
    }
}