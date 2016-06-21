<?php

/* LoginLoginBundle:scores:scores.html.twig */
class __TwigTemplate_a56d97e79b2a8b823049a68d4088f92bd947eb5e37c85747d95505a62bf370c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
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
        <!--<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/css/home.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">-->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
        <style type=\"text/css\">
            .bs-example{
                margin: 20px;
            }
            </style>
    </head>
    <body>
        
            <div class=\"container\">
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
        // line 35
        echo $this->env->getExtension('routing')->getPath("login_login_home");
        echo "\">HoMe </a></li>
                    <li class=\"active\"><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("login_login_score");
        echo "\">Scores </a></li>
                    <li><a href=\"#\"> Status </a></li>
                    <li><a href=\"#\"> Upcomming </a></li>
                    <li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("login_login_main");
        echo "\"> League </a></li>
                    <li><a href=\"#\"> Abount </a></li>
                </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("login_login_main");
        echo "\"><span class=\"glyphicon glyphicon-user\"></span>Logout</a></li>
                    </ul>
            </div>
            </nav>
          <div class=\"row\">
              <div class=\"col-md-4\">
               ";
        // line 49
        if (array_key_exists("player", $context)) {
            // line 50
            echo "                <h4 id=\"your_name\"> hello ";
            echo twig_escape_filter($this->env, (isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), "html", null, true);
            echo "</h4>
              ";
        }
        // line 52
        echo "              </div>
              <div class=\"col-md-4\">
                <div class=\"bs-example\" id=\"latest_list\">
                    <div class=\"dropdown\">
                       <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">MATCHES LIST <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                         <li><a href=\"http://www.tutorialrepublic.com/\">Action</a></li>
                         <li><a href=\"#\">Another action</a></li>
                        </ul>
                    </div>
                </div>
              </div>
              <div class=\"col-md-4\">
              <div class=\"container-fluid\" id=\"latest_score\">
                  <h4> LATEST MATCH SCORES  </h4>
              </div>
              </div>
          </div>
              <div class=\"row\">
                  <div class=\"col-md-4\">
                      
                  </div>
                  <div class=\"col-md-4\">
                      
                  </div>
                  <div class=\"col-md-4\">
                     <table class=\"table table-inverse\">
                        <thead id=\"table_head\">
                          <tr>
                            <th>PLAYER NAME</th>
                            <th>SELECTED AS</th>
                            <th>SCORE</th>
                          </tr>
                        </thead>
                        <tbody>
                      ";
        // line 87
        if (array_key_exists("second", $context)) {
            // line 88
            echo "                      ";
            $context["i"] = 1;
            // line 89
            echo "                          <tr>
                            <td>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["second"]) ? $context["second"] : $this->getContext($context, "second")), "player1"), "html", null, true);
            echo "</td>
                            <td>";
            // line 91
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "</td>
                            <td>urlParam</td>
                          </tr>
                          <tr>
                            <td>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["second"]) ? $context["second"] : $this->getContext($context, "second")), "player2"), "html", null, true);
            echo "</td>
                            <td>";
            // line 96
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "</td>
                            <td>urlParam</td>
                          </tr>
                          <tr>
                            <td>";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["second"]) ? $context["second"] : $this->getContext($context, "second")), "player3"), "html", null, true);
            echo "</td>
                            <td>";
            // line 101
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "</td>
                            <td>urlParam</td>
                          </tr>
                          <tr>
                            <td>";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["second"]) ? $context["second"] : $this->getContext($context, "second")), "player4"), "html", null, true);
            echo "</td>
                            <td>";
            // line 106
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "</td>
                            <td>urlParam</td>
                          </tr>
                          <tr>
                            <td>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["second"]) ? $context["second"] : $this->getContext($context, "second")), "player5"), "html", null, true);
            echo "</td>
                            <td>";
            // line 111
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "</td>
                            <td>urlParam</td>
                          </tr>
                          <tr>
                            <td>";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["second"]) ? $context["second"] : $this->getContext($context, "second")), "player6"), "html", null, true);
            echo "</td>
                            <td>";
            // line 116
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "</td>
                            <td>urlParam</td>
                          </tr>
                          <tr>
                            <td>";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["second"]) ? $context["second"] : $this->getContext($context, "second")), "player7"), "html", null, true);
            echo "</td>
                            <td>";
            // line 121
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "</td>
                            <td>urlParam</td>
                          </tr>
                          <tr>
                            <td>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["second"]) ? $context["second"] : $this->getContext($context, "second")), "player8"), "html", null, true);
            echo "</td>
                            <td>";
            // line 126
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "</td>
                            <td>urlParam</td>
                          </tr>
                          <tr>
                            <td>";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["second"]) ? $context["second"] : $this->getContext($context, "second")), "player9"), "html", null, true);
            echo "</td>
                            <td>";
            // line 131
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "</td>
                            <td>urlParam</td>
                          </tr>
                          <tr>
                            <td>";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["second"]) ? $context["second"] : $this->getContext($context, "second")), "player10"), "html", null, true);
            echo "</td>
                            <td>";
            // line 136
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "</td>
                            <td>urlParam</td>
                          </tr>
                          <tr>
                            <td>";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["second"]) ? $context["second"] : $this->getContext($context, "second")), "player11"), "html", null, true);
            echo "</td>
                            <td>";
            // line 141
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "</td>
                            <td>urlParam</td>
                          </tr>
                          ";
        }
        // line 145
        echo "                        </tbody>
                      </table>
                  </div>
              </div>
              <style>
                  #latest_score{
                        padding: 2rem .9375rem;
                        color: #cdbfe3;
                        text-align: center;
                        background-color: #563d7c;
                        margin-right:30%;
                        box-shadow: 10px 10px 5px #888888;
                        border-radius: 5%;
                  }
                  #latest_list{
                      font-size: 250%;
                      margin-left: -5%;
                      width: 300px;
                      height: 70px;
                      background-color: #CDDC39;
                      box-shadow: 10px 10px 5px #888888;
                      border-radius: 5%;
                  }
                  #your_name{
                      color: white;
                      text-shadow: 2px 2px 4px #000000;
                      font-size: 150%;
                  }
                  .table-inverse {
                    color: #eceeef;
                    background-color: #373a3c;
                    width: 90%;
                    text-align: center;
                }
                #table_head{
                  background-color: blue;
                }
              </style>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:scores:scores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 145,  260 => 141,  256 => 140,  249 => 136,  245 => 135,  238 => 131,  234 => 130,  227 => 126,  223 => 125,  216 => 121,  212 => 120,  205 => 116,  201 => 115,  194 => 111,  190 => 110,  183 => 106,  179 => 105,  172 => 101,  168 => 100,  161 => 96,  157 => 95,  150 => 91,  146 => 90,  143 => 89,  140 => 88,  138 => 87,  101 => 52,  95 => 50,  93 => 49,  84 => 43,  77 => 39,  71 => 36,  67 => 35,  40 => 11,  36 => 10,  32 => 9,  28 => 8,  19 => 1,);
    }
}
