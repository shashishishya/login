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

<!--[if lt IE 9]>
\t\t<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
\t<![endif]-->

<!-- JS -->
<script src=\"http://code.jquery.com/jquery-latest.js\"></script>
<script >

// JavaScript Document
var Timer;
var TotalSeconds;

function CreateTimer(TimerID, Time){
    var oop=this;
\tthis.Timer = document.getElementById(TimerID);
\tthis.TotalSeconds = Time;
\tthis.update();
\toop.to=setTimeout(function(){ oop.tick(); }, 1000);
}

CreateTimer.prototype={

 tick:function(){
    var oop=this;
\tif (this.TotalSeconds <= 0){
\t\treturn;
\t}
\tthis.TotalSeconds -= 1;
\tthis.update()
\toop.to=setTimeout(function(){ oop.tick(); }, 1000);
 },

 update:function(){
 \tvar Seconds = this.TotalSeconds,Days = Math.floor(Seconds / 86400);
\tSeconds -= Days * 86400;
\tvar Hours = Math.floor(Seconds / 3600);
\tSeconds -= Hours * (3600);
\tvar Minutes = Math.floor(Seconds / 60);
\tSeconds -= Minutes * (60);
\tvar TimeStr = ((Days > 0) ? Days + \" days \" : \"\") +
\tLeadingZero(Hours) + \":\" + LeadingZero(Minutes) + \":\" + LeadingZero(Seconds)
\tthis.Timer.innerHTML = TimeStr;
 }

}


function LeadingZero(Time){
\treturn (Time < 10) ? \"0\" + Time : + Time;
}

</script>
             ";
        // line 64
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 67
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
        // line 88
        echo $this->env->getExtension('routing')->getPath("login_login_signup");
        echo "\"><span class=\"glyphicon glyphicon-user\"></span>Sign Up </a></li>
                        <li><a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("login_login_homepage");
        echo "\"><span class=\"glyphicon glyphicon-log-in\"></span> LOgin </a></li>
                    </ul>
            </div>
            </nav>
                    <div class=\"row\">
                        <div class=\"col-lg-3\">
                            ";
        // line 95
        if (array_key_exists("first", $context)) {
            // line 96
            echo "                            <span id=\"title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["first"]) ? $context["first"] : $this->getContext($context, "first")), "firstTeam"), "html", null, true);
            echo "</span><p>
                            <strong><p id='between'>V/S</p></strong>
                            <span id=\"title\">";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["first"]) ? $context["first"] : $this->getContext($context, "first")), "secondTeam"), "html", null, true);
            echo "</span>
                            ";
        }
        // line 99
        echo "     
                            <strong><p id='timer1'></p></strong>
                            </div>
                        <div class=\"col-lg-3\">
                            ";
        // line 103
        if (array_key_exists("second", $context)) {
            // line 104
            echo "                                <span id=\"title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["second"]) ? $context["second"] : $this->getContext($context, "second")), "firstTeam"), "html", null, true);
            echo "</span>
                                <strong><p id='between'>V/S</p></strong>
                                <span id=\"title\">";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["second"]) ? $context["second"] : $this->getContext($context, "second")), "secondTeam"), "html", null, true);
            echo "</span>
                            ";
        }
        // line 108
        echo "                            <strong><p id='timer2'></p></strong>
                        </div>
                        <div class=\"col-lg-3\">
                            ";
        // line 111
        if (array_key_exists("third", $context)) {
            // line 112
            echo "                                <span id=\"title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["third"]) ? $context["third"] : $this->getContext($context, "third")), "firstTeam"), "html", null, true);
            echo "</span>
                                <strong><p id='between'>V/S</p></strong>
                                <span id=\"title\">";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["third"]) ? $context["third"] : $this->getContext($context, "third")), "secondTeam"), "html", null, true);
            echo "</span>
                            ";
        }
        // line 116
        echo "                            <strong><p id='timer3'></p></strong>
                            </div>
                        <div class=\"col-lg-3\">
                            ";
        // line 119
        if (array_key_exists("fourth", $context)) {
            // line 120
            echo "                                <span id=\"title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fourth"]) ? $context["fourth"] : $this->getContext($context, "fourth")), "firstTeam"), "html", null, true);
            echo "</span>
                                <strong><p id='between'>V/S</p></strong>
                                <span id=\"title\">";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fourth"]) ? $context["fourth"] : $this->getContext($context, "fourth")), "secondTeam"), "html", null, true);
            echo " </span>
                            ";
        }
        // line 124
        echo "                            <strong><p id='timer4'></p></strong>
                            </div>
                    </div>
                            </br>
                            </br>
                            <div class=\"row1\">
                                <div class=\"col-lg-4\">
                                    <p id=\"best\">BEST BATSMAN </p>
                                </div>
                                <div class=\"col-lg-4\">
                                    <p id=\"best\">BEST BOWLER </p>
                                </div>
                                <div class=\"col-lg-4\">
                                    <p id=\"best\">BEST ALROUDER </p>
                                </div>
                            </div>
                            <script type=\"text/javascript\">
                                new CreateTimer(\"timer1\", 30000);
                                new CreateTimer(\"timer2\", 30000);
                                new CreateTimer(\"timer3\", 30000);
                                new CreateTimer(\"timer4\", 30000);
                            </script>
    </body>
</html>
    ";
    }

    // line 64
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 65
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
        return array (  231 => 65,  228 => 64,  200 => 124,  195 => 122,  189 => 120,  187 => 119,  182 => 116,  177 => 114,  171 => 112,  169 => 111,  164 => 108,  159 => 106,  153 => 104,  151 => 103,  145 => 99,  140 => 98,  134 => 96,  132 => 95,  123 => 89,  119 => 88,  96 => 67,  94 => 64,  37 => 10,  33 => 9,  29 => 8,  20 => 1,);
    }
}
