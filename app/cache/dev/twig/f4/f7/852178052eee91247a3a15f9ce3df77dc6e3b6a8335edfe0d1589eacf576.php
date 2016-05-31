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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> 
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/css/sample.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 11
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
        #bat_table{
            width: 80%;
            margin-top: 13%;
            border-radius: 10px;
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
        // line 80
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 83
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
        // line 104
        echo $this->env->getExtension('routing')->getPath("login_login_signup");
        echo "\"><span class=\"glyphicon glyphicon-user\"></span>Sign Up </a></li>
                        <li><a href=\"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("login_login_homepage");
        echo "\"><span class=\"glyphicon glyphicon-log-in\"></span> LOgin </a></li>
                    </ul>
            </div>
            </nav>
                    <div class=\"row\">
                        <div class=\"col-lg-3\">
                            ";
        // line 111
        if (array_key_exists("first", $context)) {
            // line 112
            echo "                            <span id=\"title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["first"]) ? $context["first"] : $this->getContext($context, "first")), "firstTeam"), "html", null, true);
            echo "</span><p>
                            <strong><p id='between'>V/S</p></strong>
                            <span id=\"title\">";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["first"]) ? $context["first"] : $this->getContext($context, "first")), "secondTeam"), "html", null, true);
            echo "</span>
                            ";
        }
        // line 115
        echo "     
                            <strong><p id='timer1'></p></strong>
                            </div>
                        <div class=\"col-lg-3\">
                            ";
        // line 119
        if (array_key_exists("second", $context)) {
            // line 120
            echo "                                <span id=\"title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["second"]) ? $context["second"] : $this->getContext($context, "second")), "firstTeam"), "html", null, true);
            echo "</span>
                                <strong><p id='between'>V/S</p></strong>
                                <span id=\"title\">";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["second"]) ? $context["second"] : $this->getContext($context, "second")), "secondTeam"), "html", null, true);
            echo "</span>
                            ";
        }
        // line 124
        echo "                            <strong><p id='timer2'></p></strong>
                        </div>
                        <div class=\"col-lg-3\">
                            ";
        // line 127
        if (array_key_exists("third", $context)) {
            // line 128
            echo "                                <span id=\"title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["third"]) ? $context["third"] : $this->getContext($context, "third")), "firstTeam"), "html", null, true);
            echo "</span>
                                <strong><p id='between'>V/S</p></strong>
                                <span id=\"title\">";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["third"]) ? $context["third"] : $this->getContext($context, "third")), "secondTeam"), "html", null, true);
            echo "</span>
                            ";
        }
        // line 132
        echo "                            <strong><p id='timer3'></p></strong>
                            </div>
                        <div class=\"col-lg-3\">
                            ";
        // line 135
        if (array_key_exists("fourth", $context)) {
            // line 136
            echo "                                <span id=\"title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fourth"]) ? $context["fourth"] : $this->getContext($context, "fourth")), "firstTeam"), "html", null, true);
            echo "</span>
                                <strong><p id='between'>V/S</p></strong>
                                <span id=\"title\">";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fourth"]) ? $context["fourth"] : $this->getContext($context, "fourth")), "secondTeam"), "html", null, true);
            echo " </span>
                            ";
        }
        // line 140
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
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/images/virat-kohli-967.png"), "html", null, true);
        echo "\">
                                    </div>
                                    <div class=\"table table-responsive\">
                                    <table class=\"table\" id=\"bat_table\">
                                        <thead>
                                          <tr>
                                            <th>MATCHES</th>
                                            <th>SCORES</th>
                                            <th>BEST</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope=\"row\">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                </div>
                                <div class=\"col-lg-4\">
                                    <p id=\"best\">BEST BOWLER </p>
                                    <div class=\"round\">
                                    <img src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/images/vinaykumar.jpg"), "html", null, true);
        echo "\"> 
                                   <div class=\"table table-responsive\">
                                    <table class=\"table\" id=\"bat_table\">
                                        <thead>
                                          <tr>
                                            <th>MATCHES</th>
                                            <th>SCORES</th>
                                            <th>BEST</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope=\"row\">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-4\">
                                    <p id=\"best\">BEST ALROUDER </p>
                                    <div class=\"round\">
                                    <img src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/images/ab-de-villiers-sa.png"), "html", null, true);
        echo "\">
                                   <div class=\"table table-responsive\">
                                    <table class=\"table\" id=\"bat_table\">
                                        <thead>
                                          <tr>
                                            <th>MATCHES</th>
                                            <th>SCORES</th>
                                            <th>BEST</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope=\"row\">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
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

    // line 80
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 81
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
        return array (  322 => 81,  319 => 80,  284 => 197,  257 => 173,  230 => 149,  219 => 140,  214 => 138,  208 => 136,  206 => 135,  201 => 132,  196 => 130,  190 => 128,  188 => 127,  183 => 124,  178 => 122,  172 => 120,  170 => 119,  164 => 115,  159 => 114,  153 => 112,  151 => 111,  142 => 105,  138 => 104,  115 => 83,  113 => 80,  41 => 11,  37 => 10,  33 => 9,  29 => 8,  20 => 1,);
    }
}
