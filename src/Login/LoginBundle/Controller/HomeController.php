<?php

namespace Login\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
#use Symfony\Component\HttpFoundation\Request;
#use Login\LoginBundle\Entity\Users;

class HomeController extends Controller{
    
        public function homeAction(){
            $first ='FIRST_MATCH';
            $second ='SECOND_MATCH';
            $third ='THIRD_MATCH';
            $fourth ='FOURTH_TEAM';
            $rm = $this->getDoctrine()->getEntityManager();
            $repository = $rm->getRepository('LoginLoginBundle:Matches');
        //echo "username is $username";
        //echo "password is $password";
        //$password = 'password';
            $FIRST_MATCH = $repository->find(array('match' => $first));
            $SECOND_MATCH = $repository->find(array('match' => $second));
            $THIRD_MATCH = $repository->find(array('match' => $third));
            $FOURTH_MATCH = $repository->find(array('match' => $fourth));
        //$user = $repository->findOneBy(array('username' => $username,'password' => $password));
            //echo "the values of the user id the $user";
            //print_r($FIRST_MATCH);
            //print_r($SECOND_MATCH);
            //print_r($THIRD_MATCH);
            //print_r($FOURTH_MATCH);
            return $this->render('LoginLoginBundle:Home:home.html.twig',array('first' => $FIRST_MATCH , 'second' => $SECOND_MATCH, 'third' => $THIRD_MATCH, 'fourth' => $FOURTH_MATCH));
        }
}

?>
