<?php

/* LoginLoginBundle:Home:home.html.twig */
class __TwigTemplate_f4f7852178052eee91247a3a15f9ce3df77dc6e3b6a8335edfe0d1589eacf576 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\"> 
    <head>
        <meta charset=\"utf-8\">
        <title> Home Page </title>
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">  
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/css/sample.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/css/home.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
             ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    </head>
    <body>
    <div class=\"container\">
        <div class=\"well\">
            <h2 id=\"heading\"> <strong> HOME PAGE CREATED </strong></h2>
        </div>
    </div>
            <nav class=\"navbar navbar-inverse\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-header\">
                        <a class=\"navbar-brand\" href=\"#\">Website Name </a>
                    </div>
                 <ul class=\"nav navbar-nav\">
                    <li class=\"active\"><a href=\"#\">HoMe </a></li>
                    <li><a href=\"#\"> Scores </a></li>
                    <li><a href=\"#\"> Status </a></li>
                    <li><a href=\"#\"> Upcomming </a></li>
                    <li><a href=\"#\"> League </a></li>
                    <li><a href=\"#\"> Abount </a></li>
                </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("login_login_signup");
        echo "\"><span class=\"glyphicon glyphicon-user\"></span>Sign Up </a></li>
                        <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("login_login_homepage");
        echo "\"><span class=\"glyphicon glyphicon-log-in\"></span> LOgin </a></li>
                    </ul>
            </div>
            </nav>
                    <div class=\"row\">
                        <div class=\"col-lg-3\">
                            ";
        // line 42
        if (array_key_exists("first", $context)) {
            // line 43
            echo "                                <span id=\"title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["first"]) ? $context["first"] : $this->getContext($context, "first")), "firstTeam"), "html", null, true);
            echo "</span>
                            </br>
                            </br>
                            <span id=\"title\">";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["first"]) ? $context["first"] : $this->getContext($context, "first")), "secondTeam"), "html", null, true);
            echo "</span>
                            ";
        }
        // line 47
        echo "        
                        </div>
                        <div class=\"col-lg-3\">
                            ";
        // line 50
        if (array_key_exists("second", $context)) {
            // line 51
            echo "                                <span id=\"title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["second"]) ? $context["second"] : $this->getContext($context, "second")), "firstTeam"), "html", null, true);
            echo "</span>
                                </br>
                                </br>
                                <span id=\"title\">";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["second"]) ? $context["second"] : $this->getContext($context, "second")), "secondTeam"), "html", null, true);
            echo "</span>
                            ";
        }
        // line 56
        echo "                        </div>
                        <div class=\"col-lg-3\">
                            ";
        // line 58
        if (array_key_exists("third", $context)) {
            // line 59
            echo "                                <span id=\"title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["third"]) ? $context["third"] : $this->getContext($context, "third")), "firstTeam"), "html", null, true);
            echo "</span>
                                </br>
                                </br>
                                <span id=\"title\">";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["third"]) ? $context["third"] : $this->getContext($context, "third")), "secondTeam"), "html", null, true);
            echo "</span>
                            ";
        }
        // line 64
        echo "                            </div>
                        <div class=\"col-lg-3\">
                            ";
        // line 66
        if (array_key_exists("fourth", $context)) {
            // line 67
            echo "                                <span id=\"title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fourth"]) ? $context["fourth"] : $this->getContext($context, "fourth")), "firstTeam"), "html", null, true);
            echo "</span>
                                </br>
                                </br>
                                <span id=\"title\">";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fourth"]) ? $context["fourth"] : $this->getContext($context, "fourth")), "secondTeam"), "html", null, true);
            echo " </span>
                            ";
        }
        // line 72
        echo "                            </div>
                    </div>
                     ";
        // line 74
        if (array_key_exists("name", $context)) {
            // line 75
            echo "                        <div class=\"alert-info fade in\">
                            
                        </div>              
                     ";
        }
        // line 79
        echo "                            
    </body>
</html>
    ";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "    
              ";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Home:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 12,  167 => 11,  160 => 79,  154 => 75,  152 => 74,  148 => 72,  143 => 70,  136 => 67,  134 => 66,  130 => 64,  125 => 62,  118 => 59,  116 => 58,  112 => 56,  107 => 54,  100 => 51,  98 => 50,  93 => 47,  88 => 46,  81 => 43,  79 => 42,  70 => 36,  66 => 35,  43 => 14,  41 => 11,  37 => 10,  33 => 9,  29 => 8,  20 => 1,);
    }
}
