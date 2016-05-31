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
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/css/reset.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/css/styles.css"), "html", null, true);
        echo "\" />

<!--[if lt IE 9]>
\t\t<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
\t<![endif]-->

<!-- JS -->
<script src=\"http://code.jquery.com/jquery-latest.js\"></script>
<link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/countdown.js"), "html", null, true);
        echo "\" />
<script>
\t\t\$(document).ready(function(){
\t\t\t\$(\"#countdown\").countdown({
\t\t\t\tdate: \"01 june 2016 12:00:00\",
\t\t\t\tformat: \"on\"
\t\t\t},
\t\t\t
\t\t\tfunction() {
\t\t\t\t// callback function
\t\t\t});
\t\t});
</script>
<script>
                \$(document).ready(function(){
\t\t\t\$(\"#countdown1\").countdown({
\t\t\t\tdate: \"17 june 2016 12:00:00\",
\t\t\t\tformat: \"on\"
\t\t\t},
\t\t\t
\t\t\tfunction() {
\t\t\t\t// callback function
\t\t\t});
\t\t});
</script>
<script>
                \$(document).ready(function(){
\t\t\t\$(\"#countdown2\").countdown({
\t\t\t\tdate: \"17 july 2016 12:00:00\",
\t\t\t\tformat: \"on\"
\t\t\t},
\t\t\t
\t\t\tfunction() {
\t\t\t\t// callback function
\t\t\t});
\t\t});
</script>
<script>
                \$(document).ready(function(){
\t\t\t\$(\"#countdown3\").countdown({
\t\t\t\tdate: \"17 june 2016 12:00:00\",
\t\t\t\tformat: \"on\"
\t\t\t},
\t\t\t
\t\t\tfunction() {
\t\t\t\t// callback function
\t\t\t});
\t\t});
\t</script>
        <script>
                        (function(\$) {
                        \$.fn.countdown = function(options, callback) {

                                //custom 'this' selector
                                thisEl = \$(this);

                                //array of custom settings
                                var settings = { 
                                        'date': null,
                                        'format': null
                                };

                                //append the settings array to options
                                if(options) {
                                        \$.extend(settings, options);
                                }

                                //main countdown function
                                function countdown_proc() {

                                        eventDate = Date.parse(settings['date']) / 1000;
                                        currentDate = Math.floor(\$.now() / 1000);

                                        if(eventDate <= currentDate) {
                                                callback.call(this);
                                                clearInterval(interval);
                                        }

                                        seconds = eventDate - currentDate;

                                        days = Math.floor(seconds / (60 * 60 * 24)); //calculate the number of days
                                        seconds -= days * 60 * 60 * 24; //update the seconds variable with no. of days removed

                                        hours = Math.floor(seconds / (60 * 60));
                                        seconds -= hours * 60 * 60; //update the seconds variable with no. of hours removed

                                        minutes = Math.floor(seconds / 60);
                                        seconds -= minutes * 60; //update the seconds variable with no. of minutes removed

                                        //conditional Ss
                                        if (days == 1) { thisEl.find(\".timeRefDays\").text(\"day\"); } else { thisEl.find(\".timeRefDays\").text(\"days\"); }
                                        if (hours == 1) { thisEl.find(\".timeRefHours\").text(\"hour\"); } else { thisEl.find(\".timeRefHours\").text(\"hours\"); }
                                        if (minutes == 1) { thisEl.find(\".timeRefMinutes\").text(\"minute\"); } else { thisEl.find(\".timeRefMinutes\").text(\"minutes\"); }
                                        if (seconds == 1) { thisEl.find(\".timeRefSeconds\").text(\"second\"); } else { thisEl.find(\".timeRefSeconds\").text(\"seconds\"); }

                                        //logic for the two_digits ON setting
                                        if(settings['format'] == \"on\") {
                                                days = (String(days).length >= 2) ? days : \"0\" + days;
                                                hours = (String(hours).length >= 2) ? hours : \"0\" + hours;
                                                minutes = (String(minutes).length >= 2) ? minutes : \"0\" + minutes;
                                                seconds = (String(seconds).length >= 2) ? seconds : \"0\" + seconds;
                                        }

                                        //update the countdown's html values.
                                        if(!isNaN(eventDate)) {
                                                thisEl.find(\".days\").text(days);
                                                thisEl.find(\".hours\").text(hours);
                                                thisEl.find(\".minutes\").text(minutes);
                                                thisEl.find(\".seconds\").text(seconds);
                                        } else { 
                                                alert(\"Invalid date. Here's an example: 12 Tuesday 2012 17:30:00\");
                                                clearInterval(interval); 
                                        }
                                }

                                //run the function
                                countdown_proc();

                                //loop the function
                                interval = setInterval(countdown_proc, 1000);

                        }
                }) (jQuery);
                </script>
             ";
        // line 144
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 147
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
        // line 168
        echo $this->env->getExtension('routing')->getPath("login_login_signup");
        echo "\"><span class=\"glyphicon glyphicon-user\"></span>Sign Up </a></li>
                        <li><a href=\"";
        // line 169
        echo $this->env->getExtension('routing')->getPath("login_login_homepage");
        echo "\"><span class=\"glyphicon glyphicon-log-in\"></span> LOgin </a></li>
                    </ul>
            </div>
            </nav>
                    <div class=\"row\">
                        <div class=\"col-lg-3\">
                            ";
        // line 175
        if (array_key_exists("first", $context)) {
            // line 176
            echo "                                <span id=\"title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["first"]) ? $context["first"] : $this->getContext($context, "first")), "firstTeam"), "html", null, true);
            echo "</span>
                            </br>
                            </br>
                            <span id=\"title\">";
            // line 179
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["first"]) ? $context["first"] : $this->getContext($context, "first")), "secondTeam"), "html", null, true);
            echo "</span>
                            ";
        }
        // line 180
        echo "     
                            <ul id=\"countdown\">
                            <li> <span class=\"days\">00</span>
                            </li>
                            <li> <span class=\"hours\">00</span>
                            </li>
                            <li> <span class=\"minutes\">00</span>
                            </li>
                            <li> <span class=\"seconds\">00</span>
                            </li>
                            </ul>
                        </div>
                        <div class=\"col-lg-3\">
                            ";
        // line 193
        if (array_key_exists("second", $context)) {
            // line 194
            echo "                                <span id=\"title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["second"]) ? $context["second"] : $this->getContext($context, "second")), "firstTeam"), "html", null, true);
            echo "</span>
                                </br>
                                </br>
                                <span id=\"title\">";
            // line 197
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["second"]) ? $context["second"] : $this->getContext($context, "second")), "secondTeam"), "html", null, true);
            echo "</span>
                            ";
        }
        // line 199
        echo "                            <ul id=\"countdown1\">
                            <li> <span class=\"days\">00</span>
                            </li>
                            <li> <span class=\"hours\">00</span>
                            </li>
                            <li> <span class=\"minutes\">00</span>
                            </li>
                            <li> <span class=\"seconds\">00</span>
                            </li>
                            </ul>
                        </div>
                        <div class=\"col-lg-3\">
                            ";
        // line 211
        if (array_key_exists("third", $context)) {
            // line 212
            echo "                                <span id=\"title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["third"]) ? $context["third"] : $this->getContext($context, "third")), "firstTeam"), "html", null, true);
            echo "</span>
                                </br>
                                </br>
                                <span id=\"title\">";
            // line 215
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["third"]) ? $context["third"] : $this->getContext($context, "third")), "secondTeam"), "html", null, true);
            echo "</span>
                            ";
        }
        // line 217
        echo "                            <ul id=\"countdown2\">
                            <li> <span class=\"days\">00</span>
                            </li>
                            <li> <span class=\"hours\">00</span>
                            </li>
                            <li> <span class=\"minutes\">00</span>
                            </li>
                            <li> <span class=\"seconds\">00</span>
                            </li>
                            </ul>
                            </div>
                        <div class=\"col-lg-3\">
                            ";
        // line 229
        if (array_key_exists("fourth", $context)) {
            // line 230
            echo "                                <span id=\"title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fourth"]) ? $context["fourth"] : $this->getContext($context, "fourth")), "firstTeam"), "html", null, true);
            echo "</span>
                                </br>
                                </br>
                                <span id=\"title\">";
            // line 233
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fourth"]) ? $context["fourth"] : $this->getContext($context, "fourth")), "secondTeam"), "html", null, true);
            echo " </span>
                            ";
        }
        // line 235
        echo "                            <ul id=\"countdown3\">
                            <li> <span class=\"days\">00</span>
                            </li>
                            <li> <span class=\"hours\">00</span>
                            </li>
                            <li> <span class=\"minutes\">00</span>
                            </li>
                            <li> <span class=\"seconds\">00</span>
                            </li>
                            </ul>
                            </div>
                    </div>
    </body>
</html>
    ";
    }

    // line 144
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 145
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
        return array (  341 => 145,  338 => 144,  320 => 235,  315 => 233,  308 => 230,  306 => 229,  292 => 217,  287 => 215,  280 => 212,  278 => 211,  264 => 199,  259 => 197,  252 => 194,  250 => 193,  235 => 180,  230 => 179,  223 => 176,  221 => 175,  212 => 169,  208 => 168,  185 => 147,  183 => 144,  56 => 20,  45 => 12,  41 => 11,  37 => 10,  33 => 9,  29 => 8,  20 => 1,);
    }
}
