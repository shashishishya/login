<?php

namespace Login\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
#use Login\LoginBundle\Entity\Users;

class StatusprogressController extends Controller{
    
        public function statusAction(){
            return $this->render('LoginLoginBundle:Default:login.html.twig', array('name' => 'wel come to ur status progreess bar'));
        }
}
?>

