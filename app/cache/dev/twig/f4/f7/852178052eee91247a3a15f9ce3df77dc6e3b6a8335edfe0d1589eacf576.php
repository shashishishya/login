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
        <meta name=\"viewport\" content=\"width-device-width\", initial-scale=\"1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">   
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/css/sample.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/css/home.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
             ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
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
        // line 37
        echo $this->env->getExtension('routing')->getPath("login_login_signup");
        echo "\"><span class=\"glyphicon glyphicon-user\"></span>Sign Up </a></li>
                        <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("login_login_homepage");
        echo "\"><span class=\"glyphicon glyphicon-log-in\"></span> LOgin </a></li>
                    </ul>
            </div>
            </nav>
                    <div class=\"row\">
                        <div class=\"col-lg-3\">
                            ";
        // line 44
        if (array_key_exists("name", $context)) {
            // line 45
            echo "                                <span id=\"title\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), 0, array(), "array"), "firstTeam"), "html", null, true);
            echo "</span>
                            </br>
                            </br>
                            <span id=\"title\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), 0, array(), "array"), "secondTeam"), "html", null, true);
            echo "</span>
                            ";
        }
        // line 50
        echo "                        </div>
                        <div class=\"col-lg-3\">
                            ";
        // line 52
        if (array_key_exists("name", $context)) {
            // line 53
            echo "                                <span id=\"title\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), 0, array(), "array"), "firstTeam"), "html", null, true);
            echo "</span>
                                </br>
                                </br>
                                <span id=\"title\">";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), 0, array(), "array"), "secondTeam"), "html", null, true);
            echo "</span>
                            ";
        }
        // line 58
        echo "                        </div>
                        <div class=\"col-lg-3\">
                            ";
        // line 60
        if (array_key_exists("name", $context)) {
            // line 61
            echo "                                <span id=\"title\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), 0, array(), "array"), "firstTeam"), "html", null, true);
            echo "</span>
                                </br>
                                </br>
                                <span id=\"title\">";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), 0, array(), "array"), "secondTeam"), "html", null, true);
            echo "</span>
                            ";
        }
        // line 66
        echo "                            </div>
                        <div class=\"col-lg-3\">
                            ";
        // line 68
        if (array_key_exists("name", $context)) {
            // line 69
            echo "                                <span id=\"title\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), 0, array(), "array"), "firstTeam"), "html", null, true);
            echo "</span>
                                </br>
                                </br>
                                <span id=\"title\">";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), 0, array(), "array"), "secondTeam"), "html", null, true);
            echo " </span>
                            ";
        }
        // line 74
        echo "                            </div>
                    </div>
                     ";
        // line 76
        if (array_key_exists("name", $context)) {
            // line 77
            echo "                        <div class=\"alert-info fade in\">
                            
                        </div>              
                     ";
        }
        // line 81
        echo "                            
    </body>
</html>
    ";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
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
        return array (  174 => 14,  171 => 13,  164 => 81,  158 => 77,  156 => 76,  152 => 74,  147 => 72,  140 => 69,  138 => 68,  134 => 66,  129 => 64,  122 => 61,  120 => 60,  116 => 58,  111 => 56,  104 => 53,  102 => 52,  98 => 50,  93 => 48,  86 => 45,  84 => 44,  75 => 38,  71 => 37,  48 => 16,  46 => 13,  42 => 12,  38 => 11,  34 => 10,  30 => 9,  20 => 1,);
    }
}
