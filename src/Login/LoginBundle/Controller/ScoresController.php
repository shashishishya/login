<?php

namespace Login\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
#use Symfony\Component\HttpFoundation\Request;
#use Login\LoginBundle\Entity\Users;

class ScoresController extends Controller{
   public function mainAction(){  
           //print_r($user);
            
            return $this->render('LoginLoginBundle:main:firstlogin.html.twig',array('player' => $user));
}

