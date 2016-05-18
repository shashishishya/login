<?php

namespace Login\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Login\LoginBundle\Entity\Users;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        if($request->getMethod()=='POST'){
        $username = $request->get('username');
        $password = $request->get('password');
        //echo "hello shashi";
        $rm = $this->getDoctrine()->getEntityManager();
        $repository = $rm->getRepository('LoginLoginBundle:Users');
        //echo "username is $username";
        //echo "password is $password";
        //$password = 'password';
        $user = $repository->findOneBy(array('username' => $username,'password' => $password));
        //echo "value of the username $user";
        //$user=1;
        if($user){
            return $this->render('LoginLoginBundle:Default:login.html.twig', array('name' => $user->getFirstName()));
        }
        }
      
        else{
            return $this->render('LoginLoginBundle:Default:login.html.twig');
        }
    }
    public function signupAction(Request $request){
        if($request->getMethod() == 'POST'){
            $username = $request->get('username');
            $firstname = $request->get('firstname');
            $lastname = $request->get('lastname');
            $email    = $request->get('email');
            $password = $request->get('password');
            
            $user = new Users();
            $user->setFirstName($firstname);
            $user->setLastName($lastname);
            $user->setEmail($email);
            $user->setUsername($username);
            $user->setPassword($password);
            $rm = $this->getDoctrine()->getManager();
            $rm->persist($user);
            $rm->flush();
        } 
        return $this->render('LoginLoginBundle:Default:signup.html.twig');  
    }
}