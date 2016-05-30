<?php

namespace Login\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
#use Login\LoginBundle\Entity\Users;

class MainController extends Controller{
   public function mainAction(Request $request){
            $match ="rcb";
            $name = $request->get('user_name');
            print_r($name);
             $username = $request->get('rcb');
             print_r($username);
            //print_r($match);
            
            $rm = $this->getDoctrine()->getEntityManager();
            $repository = $rm->getRepository('LoginLoginBundle:Team');
            
            $user = $repository->findAll(array('team' => $match));
            
           //print_r($user);
            
            return $this->render('LoginLoginBundle:main:firstlogin.html.twig',array('player' => $user));
}
}

