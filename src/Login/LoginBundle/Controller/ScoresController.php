<?php

namespace Login\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
#use Symfony\Component\HttpFoundation\Request;
#use Login\LoginBundle\Entity\Users;

class ScoresController extends Controller{
   public function scoreAction(){  
           //print_r($user);
       
            $user_id='123';
            //$name = $request->get('user_name');
            // $username = $request->get('rcb');
            
            $rm = $this->getDoctrine()->getEntityManager();
            $repository = $rm->getRepository('LoginLoginBundle:Scores');
            //print_r($user_id);
            $user = $repository->findOneBy(array('userId' => $user_id));
            print_r($user);
            return $this->render('LoginLoginBundle:scores:scores.html.twig',array('player' => 'shashikumar', 'second' => $user));
  }
}

