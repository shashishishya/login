<?php

/* LoginLoginBundle:league:league.html.twig */
class __TwigTemplate_b948606aebc5dc1bad12d580b6cef6abcc27329b4e5f129a2c175f8b7b42e0bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\"> 
    <head>
        <meta charset=\"utf-8\">
        <title> hello login </title>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/css/signup.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/css/Main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!--<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/main.js"), "html", null, true);
        echo "\"></script>-->
        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
        <script src=\"http://code.jquery.com/jquery-1.10.2.js\"></script>
        <script src=\"http://code.jquery.com/ui/1.11.2/jquery-ui.js\"></script>
        <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        <style type=\"text/css\">
        \t.active {
 \t\t\t   color: red;
\t\t\t}
            #second{
            border: 1px solid #aaa;
            background: #333;
            background: -webkit-linear-gradient(left, #333 0%, #444 100%);
            background: linear-gradient(to right, #333 0%, rgba(3, 84, 81, 0.4) 100%);
            width: 40%;
            text-align: center;
            font-size: 20px;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.8);

            }
            #first{
            border: 1px solid #aaa;
            background: #333;
            background: -webkit-linear-gradient(left, #333 0%, #444 100%);
            background: linear-gradient(to right, #333 0%, rgba(3, 84, 81, 0.4) 100%);
            width: 40%;
            text-align: center;
            font-size: 20px;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.8);
            }
\t\t</style>\t
        <script type=\"text/javascript\">
            \$(document).ready(function(){
                  
                 function search(){
                     alert(\"not working\");
 
                      var title=\$(\"#search\").val();
 
                      if(title!=\"\"){
                        \$(\"#result\").html(\"<img alt=\"ajax search\" src='ajax-loader.gif'/>\");
                        \$.ajax({
                            type:\"post\",
                            url:\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("login_login_serach");
        echo "\",
                            data:\"title=\"+title,
                            success:function(data){
                                \$(\"#result\").html(data);
                                \$(\"#search\").val(\"\");
                                alert(\"working\");
                             }
                        });
                      }
                 }
 
                  \$(\"#button\").click(function(){
                     search();
                  });
 
                  \$('#search').keyup(function(e) {
                     if(e.keyCode == 13) {
                        search();
                      }
                  });
            });
        </script>
    </head>
    <body>
        ";
        // line 85
        $this->displayBlock('container', $context, $blocks);
        // line 137
        echo "    </body>
</html>";
    }

    // line 85
    public function block_container($context, array $blocks = array())
    {
        // line 86
        echo "            <div class=\"container\">
                <div class=\"well\">
                    <h2 id=\"heading\"> <strong> Welcome for user created  </strong></h2>
                </div>
            </div>

            <nav class=\"navbar navbar-inverse\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-header\">
                        <a class=\"navbar-brand\" href=\"#\">Website Name </a>
                    </div>
                 <ul class=\"nav navbar-nav\">
                    <li><a href=\"";
        // line 98
        echo $this->env->getExtension('routing')->getPath("login_login_home");
        echo "\">HoMe </a></li>
                    <li><a href=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("login_login_score");
        echo "\">Scores </a></li>
                    <li><a href=\"#\"> Status </a></li>
                    <li><a href=\"#\"> Upcomming </a></li>
                    <li class=\"active\"><a href=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("login_login_league");
        echo "\"> League </a></li>
                    <li><a href=\"#\"> Abount </a></li>
                </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"";
        // line 106
        echo $this->env->getExtension('routing')->getPath("login_login_main");
        echo "\"><span class=\"glyphicon glyphicon-user\"></span>Logout</a></li>
                    </ul>
            </div>
            </nav>
            <div class=\"container\" id=\"maatchers\">
                <div class=\"row\">
                    <div class=\"col-xs-5\" id=\"first\">
                        <h2>JOIN Existing teams</h2>
                        <form class=\"navbar-form\" role=\"search\" action=\"";
        // line 114
        echo $this->env->getExtension('routing')->getPath("login_login_main");
        echo "\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search\" name=\"srch-term\" id=\"srch-term\">
                            <div class=\"input-group-btn\">
                                <button class=\"btn btn-default\" type=\"submit\"><i class=\"glyphicon glyphicon-search\"></i></button>
                            </div>
                        </div>
                    </form>
                    </div>
                    <div class=\"col-xs-2\">
                    </div>
                    <div class=\"col-xs-5\" id=\"second\">
                        <h2> Create new teams </h2>
                        <button type=\"button\" id=\"show-preview\" class=\"btn btn-info active\">Create New Team</button>
                        <div id=\"container\">
                             <input type=\"text\" id=\"search\" placeholder=\"Search Tutorials Here... Ex: Java, Php, Jquery...\"/>
                             <input type=\"button\" id=\"button\" value=\"Search\" />
                             <ul id=\"result\"></ul>
                        </div>
                    </div>
                </div>
            </div>
        ";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:league:league.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 114,  171 => 106,  164 => 102,  158 => 99,  154 => 98,  140 => 86,  137 => 85,  132 => 137,  130 => 85,  103 => 61,  53 => 14,  49 => 13,  45 => 12,  41 => 11,  37 => 10,  33 => 9,  29 => 8,  20 => 1,);
    }
}
