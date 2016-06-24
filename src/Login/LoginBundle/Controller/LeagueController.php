<?php

namespace Login\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
#use Symfony\Component\HttpFoundation\Request;
#use Login\LoginBundle\Entity\Users;

class LeagueController extends Controller{
   public function leagueAction(){  
            return $this->render('LoginLoginBundle:league:league.html.twig');
  }
   public function searchAction(){  
   			return $this->render('LoginLoginBundle:league:league.html.twig');
  }
}
?>

