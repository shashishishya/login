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
        <style>
        .round img {
            display: block;
            margin-left: 10%;
            margin-right: 10%;
            width: 50%;
            border-radius: 50%;
            min-height:100%
        }
        </style>

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
        // line 74
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 77
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
        // line 98
        echo $this->env->getExtension('routing')->getPath("login_login_signup");
        echo "\"><span class=\"glyphicon glyphicon-user\"></span>Sign Up </a></li>
                        <li><a href=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("login_login_homepage");
        echo "\"><span class=\"glyphicon glyphicon-log-in\"></span> LOgin </a></li>
                    </ul>
            </div>
            </nav>
                    <div class=\"row\">
                        <div class=\"col-lg-3\">
                            ";
        // line 105
        if (array_key_exists("first", $context)) {
            // line 106
            echo "                            <span id=\"title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["first"]) ? $context["first"] : $this->getContext($context, "first")), "firstTeam"), "html", null, true);
            echo "</span><p>
                            <strong><p id='between'>V/S</p></strong>
                            <span id=\"title\">";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["first"]) ? $context["first"] : $this->getContext($context, "first")), "secondTeam"), "html", null, true);
            echo "</span>
                            ";
        }
        // line 109
        echo "     
                            <strong><p id='timer1'></p></strong>
                            </div>
                        <div class=\"col-lg-3\">
                            ";
        // line 113
        if (array_key_exists("second", $context)) {
            // line 114
            echo "                                <span id=\"title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["second"]) ? $context["second"] : $this->getContext($context, "second")), "firstTeam"), "html", null, true);
            echo "</span>
                                <strong><p id='between'>V/S</p></strong>
                                <span id=\"title\">";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["second"]) ? $context["second"] : $this->getContext($context, "second")), "secondTeam"), "html", null, true);
            echo "</span>
                            ";
        }
        // line 118
        echo "                            <strong><p id='timer2'></p></strong>
                        </div>
                        <div class=\"col-lg-3\">
                            ";
        // line 121
        if (array_key_exists("third", $context)) {
            // line 122
            echo "                                <span id=\"title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["third"]) ? $context["third"] : $this->getContext($context, "third")), "firstTeam"), "html", null, true);
            echo "</span>
                                <strong><p id='between'>V/S</p></strong>
                                <span id=\"title\">";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["third"]) ? $context["third"] : $this->getContext($context, "third")), "secondTeam"), "html", null, true);
            echo "</span>
                            ";
        }
        // line 126
        echo "                            <strong><p id='timer3'></p></strong>
                            </div>
                        <div class=\"col-lg-3\">
                            ";
        // line 129
        if (array_key_exists("fourth", $context)) {
            // line 130
            echo "                                <span id=\"title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fourth"]) ? $context["fourth"] : $this->getContext($context, "fourth")), "firstTeam"), "html", null, true);
            echo "</span>
                                <strong><p id='between'>V/S</p></strong>
                                <span id=\"title\">";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fourth"]) ? $context["fourth"] : $this->getContext($context, "fourth")), "secondTeam"), "html", null, true);
            echo " </span>
                            ";
        }
        // line 134
        echo "                            <strong><p id='timer4'></p></strong>
                            </div>
                    </div>
                            </br>
                            </br>
                            <div class=\"row1\">
                                <div class=\"col-lg-4\">
                                    <p id=\"best\">BEST BATSMAN </p>
                                    <div class=\"round\">
                                    <img src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/images/virat-kohli-967.png"), "html", null, true);
        echo "\">
                                    </div>
                                </div>
                                <div class=\"col-lg-4\">
                                    <p id=\"best\">BEST BOWLER </p>
                                    <div class=\"round\">
                                    <img src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/images/vinaykumar.jpg"), "html", null, true);
        echo "\"> 
                                    </div>
                                </div>
                                <div class=\"col-lg-4\">
                                    <p id=\"best\">BEST ALROUDER </p>
                                    <div class=\"round\">
                                    <img src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/images/ab-de-villiers-sa.png"), "html", null, true);
        echo "\">
                                    </div>
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

    // line 74
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 75
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
        return array (  259 => 75,  256 => 74,  239 => 155,  230 => 149,  221 => 143,  210 => 134,  205 => 132,  199 => 130,  197 => 129,  192 => 126,  187 => 124,  181 => 122,  179 => 121,  174 => 118,  169 => 116,  163 => 114,  161 => 113,  155 => 109,  150 => 108,  144 => 106,  142 => 105,  133 => 99,  129 => 98,  106 => 77,  104 => 74,  37 => 10,  33 => 9,  29 => 8,  20 => 1,);
    }
}
