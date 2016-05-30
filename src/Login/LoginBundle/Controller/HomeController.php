<?php

namespace Login\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
#use Symfony\Component\HttpFoundation\Request;
#use Login\LoginBundle\Entity\Users;

class HomeController extends Controller{
    
        public function homeAction(){
            $today ='123';
            $rm = $this->getDoctrine()->getEntityManager();
            $repository = $rm->getRepository('LoginLoginBundle:Matches');
        //echo "username is $username";
        //echo "password is $password";
        //$password = 'password';
            $user = $repository->findAll(array('id' => $today));
        //$user = $repository->findOneBy(array('username' => $username,'password' => $password));
            //echo "the values of the user id the $user";
            print_r($user);
            return $this->render('LoginLoginBundle:Home:home.html.twig',array('name' => $user));
        }
}

?>
