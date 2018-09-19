<?php
/**
 * Created by PhpStorm.
 * User: romain.buhler
 * Date: 17.09.2018
 * Time: 15:32
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MyTwigController extends AbstractController
{
    function FirstTwigAction(){
        return $this->render("firsttwig.html.twig");
    }
}