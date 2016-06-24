<?php

/* LoginLoginBundle:main:firstlogin.html.twig */
class __TwigTemplate_d20e3a5696f72f8f0d09b519204ff86769b51b30a788c0a7b7ef11e818852590 extends Twig_Template
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
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/main.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js\"></script>
        <script>
            var addedrows = new Array();
            \$(document).ready(function() {
                \$( \"#sourcetable tbody tr\" ).on( \"click\", function( event ) {

                var ok = 0;
                var theid = \$( this ).attr('id').replace(\"sour\",\"\");    

                var newaddedrows = new Array();

                for (index = 0; index < addedrows.length; ++index) {

                    // if already selected then remove
                    if (addedrows[index] == theid) {

                        \$( this ).css( \"background-color\", \"#ffccff\" );

                        // remove from second table :
                        var tr = \$( \"#dest\" + theid );
                        tr.css(\"background-color\",\"#FF3700\");
                        tr.fadeOut(400, function(){
                            tr.remove();
                        });

                        //addedrows.splice(theid, 1);   

                        //the boolean
                        ok = 1;
                    } else {

                        newaddedrows.push(addedrows[index]);
                    } 
                }   

                addedrows = newaddedrows;
                
                // if no match found then add the row :
                if (!ok) {
                    // retrieve the id of the element to match the id of the new row :


                    addedrows.push( theid);

                    \$( this ).css( \"background-color\", \"#cacaca\" );

                    \$('#destinationtable tr:last').after('<tr class=\"shashi\" id=\"dest' + theid + '\"><td>'
                                                   + \$(this).find(\"td\").eq(0).html() + '</td><td>'
                                                   + \$(this).find(\"td\").eq(1).html() + '</td><td>'
                                                   + \$(this).find(\"td\").eq(2).html() + '</td><td id=\"shashi\">'
                                                   + \"delete\" + '</td></tr>');         
                }

                \$(document).ready(function(){
                  \$(\".shashi\").click(function(){
                      \$(this).hide();
                  });
                });
                });
            });
            
            </script>

            <style type=\"text/css\">
              #shashi{
                font-size: 20px;
                color:red;
              }
            </style>
    </head>
    <body>
        ";
        // line 86
        $this->displayBlock('container', $context, $blocks);
        // line 115
        echo "        <div class=\"row\">
            <div class=\"col-lg-4\">
                <p id=\"listplayer\"><h4><b> LIST OF THE PLAYERS IN TEAM </b></h4></p>
                   <table class=\"table table-bordered\" id=\"sourcetable\">
                       <thead class=\"tthead\">
                           <tr>
                               <th> NAME </th>
                               <th> MATCHES </th>
                               <th> POINTS </th>
                               <th> Add </th>
                           </tr>
                       </thead>
                       <tbody>
                           ";
        // line 128
        if (array_key_exists("player", $context)) {
            // line 129
            echo "                           <tr class=\"success\" id=\"sour0\">
                               <td>";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), 0, array(), "array"), "player1"), "html", null, true);
            echo "</td>
                               <td> 23 </td>
                               <td> 1000 </td>
                               <td> <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> </td>
                           </tr>
                            <tr class=\"warning\" id=\"sour1\">
                               <td>";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), 0, array(), "array"), "player2"), "html", null, true);
            echo "</td>
                               <td> 23 </td>
                               <td> 1000 </td>
                               <td> <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> </td>
                           </tr>
                            <tr class=\"info\" id=\"sour2\">
                               <td>";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), 0, array(), "array"), "player3"), "html", null, true);
            echo "</td>
                               <td> 23 </td>
                               <td> 1000 </td>
                               <td> <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> </td>
                           </tr>
                            <tr class=\"warning\" id=\"sour3\">
                               <td>";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), 0, array(), "array"), "player4"), "html", null, true);
            echo "</td>
                               <td> 23 </td>
                               <td> 1000 </td>
                               <td> <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> </td>
                           </tr>
                            <tr class=\"success\" id=\"sour4\">
                               <td>";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), 0, array(), "array"), "player5"), "html", null, true);
            echo "</td>
                               <td> 23 </td>
                               <td> 1000 </td>
                               <td> <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> </td>
                           </tr>
                            <tr class=\"warning\" id=\"sour5\">
                               <td>";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), 0, array(), "array"), "player6"), "html", null, true);
            echo "</td>
                               <td> 23 </td>
                               <td> 1000 </td>
                               <td> <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> </td>
                           </tr>
                            <tr class=\"info\" id=\"sour6\">
                               <td>";
            // line 166
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), 0, array(), "array"), "player7"), "html", null, true);
            echo "</td>
                               <td> 23 </td>
                               <td> 1000 </td>
                               <td> <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> </td>
                           </tr>
                            <tr class=\"warning\" id=\"sour7\">
                               <td>";
            // line 172
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), 0, array(), "array"), "player8"), "html", null, true);
            echo "</td>
                               <td> 23 </td>
                               <td> 1000 </td>
                               <td> <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> </td>
                           </tr>
                           <tr class=\"success\" id=\"sour8\">
                               <td>";
            // line 178
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), 0, array(), "array"), "player9"), "html", null, true);
            echo "</td>
                               <td> 23 </td>
                               <td> 1000 </td>
                               <td> <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> </td>
                           </tr>
                            <tr class=\"warning\" id=\"sour9\">
                               <td>";
            // line 184
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), 0, array(), "array"), "player10"), "html", null, true);
            echo "</td>
                               <td> 23 </td>
                               <td> 1000 </td>
                               <td> <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> </td>
                           </tr>
                            <tr class=\"info\" id=\"sour10\">
                               <td>";
            // line 190
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), 0, array(), "array"), "player11"), "html", null, true);
            echo "</td>
                               <td> 23 </td>
                               <td> 1000 </td>
                               <td> <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> </td>
                           </tr>
                            <tr class=\"warning\" id=\"sour11\">
                               <td>";
            // line 196
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), 0, array(), "array"), "player12"), "html", null, true);
            echo "</td>
                               <td> 23 </td>
                               <td> 1000 </td>
                               <td> <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> </td>
                           </tr>
                           <tr class=\"success\" id=\"sour12\">
                               <td>";
            // line 202
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), 0, array(), "array"), "player13"), "html", null, true);
            echo "</td>
                               <td> 23 </td>
                               <td> 1000 </td>
                               <td> <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> </td>
                           </tr>
                            <tr class=\"warning\" id=\"sour13\">
                               <td>";
            // line 208
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), 0, array(), "array"), "player14"), "html", null, true);
            echo "</td>
                               <td> 23 </td>
                               <td> 1000 </td>
                               <td> <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> </td>
                           </tr>
                            <tr class=\"info\" id=\"sour14\">
                               <td>";
            // line 214
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), 0, array(), "array"), "player15"), "html", null, true);
            echo "</td>
                               <td> 23 </td>
                               <td> 1000 </td>
                               <td><span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\" id=\"loginLink\" onclick=\"toggleTable();\"></span></td>
                           </tr>
                           ";
        }
        // line 220
        echo "                       </tbody>
                   </table>     
            </div>

            <div class=\"col-lg-4\">
                <p id=\"listplayer\"><h4><b> SELECTED PLAYERS </b></h4></p>
                <form method=\"POST\" action=\"\">
                <table class=\"table table-bordered\" id=\"destinationtable\">
                       <thead class=\"tthead\">
                           <tr>
                               <th> NAME </th>
                               <th> MATCHES </th>
                               <th> POINTS </th>
                               <th> DELETE</th>
                           </tr>
                       </thead> 
                </table>
                </form> 
            </div>
            <div class=\"col-lg-4\"><strong>SELECT THE TEAMS </strong>
                </br>
                </br>
                       <div class=\"container\">
                           <span id=\"rcb\" value=\"rcb\" name=\"rcb\"><a href=\"";
        // line 243
        echo $this->env->getExtension('routing')->getPath("login_login_main");
        echo "#rcb\">RCB</a></span>
                       </div>
                       <div class=\"container\">
                           <span><a href=\"";
        // line 246
        echo $this->env->getExtension('routing')->getPath("login_login_main");
        echo "\">PUNE</a></span>
                       </div>
                       <div class=\"container\">
                           <span><a href=\"";
        // line 249
        echo $this->env->getExtension('routing')->getPath("login_login_main");
        echo "\">PUNJAB</a></span>
                       </div>
                       <div class=\"container\">
                           <span><a href=\"";
        // line 252
        echo $this->env->getExtension('routing')->getPath("login_login_main");
        echo "\">MUMBAI</a></span>
                       </div>
                       <div class=\"container\">
                           <span><a href=\"";
        // line 255
        echo $this->env->getExtension('routing')->getPath("login_login_main");
        echo "\">KOLKATTA</a></span>
                       </div>
                       <div class=\"container\">
                           <span><a href=\"";
        // line 258
        echo $this->env->getExtension('routing')->getPath("login_login_main");
        echo "\">GUJRATH</a></span>
                       </div>
                       <div class=\"container\">
                           <span><a href=\"";
        // line 261
        echo $this->env->getExtension('routing')->getPath("login_login_main");
        echo "\">DELHI</a></span>
                       </div>
                       <div class=\"container\">
                           <span><a href=\"";
        // line 264
        echo $this->env->getExtension('routing')->getPath("login_login_main");
        echo "\">Hydrabad</a></span>
                       </div>
                       <div class=\"container-fluid\">
                            <div class=\"row-fluid\">
                                <h3>points table </h3>
                                <table class=\"table table-bordered\">
                                    <thead class=\"tthead\">
                                        <tr>
                                            <th> TOTAL AMOUNT </th>
                                            <th> REAMAINING AMOUNT </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class=\"success\">
                                            <td> 12000</td>
                                            <td> 12000 </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                       </div>
            </div>
        </div>
    </body>
</html>";
    }

    // line 86
    public function block_container($context, array $blocks = array())
    {
        // line 87
        echo "            <div class=\"container\">
                <div class=\"well\">
                    <h2 id=\"heading\"> <strong> Welcome for user created  </strong></h2>
                </div>
            </div>
          ";
        // line 92
        if (array_key_exists("name", $context)) {
            // line 93
            echo "            <h4> hello ";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "</h4>
            ";
        }
        // line 95
        echo "            
                <nav class=\"navbar navbar-inverse\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-header\">
                        <a class=\"navbar-brand\" href=\"#\">Website Name </a>
                    </div>
                 <ul class=\"nav navbar-nav\">
                    <li class=\"active\"><a href=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("login_login_home");
        echo "\">HoMe </a></li>
                    <li><a href=\"";
        // line 103
        echo $this->env->getExtension('routing')->getPath("login_login_score");
        echo "\">Scores </a></li>
                    <li><a href=\"#\"> Status </a></li>
                    <li><a href=\"#\"> Upcomming </a></li>
                    <li><a href=\"";
        // line 106
        echo $this->env->getExtension('routing')->getPath("login_login_league");
        echo "\"> League </a></li>
                    <li><a href=\"#\"> Abount </a></li>
                </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"";
        // line 110
        echo $this->env->getExtension('routing')->getPath("login_login_main");
        echo "\"><span class=\"glyphicon glyphicon-user\"></span>Logout</a></li>
                    </ul>
            </div>
            </nav>
           ";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:main:firstlogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  425 => 110,  418 => 106,  412 => 103,  408 => 102,  399 => 95,  393 => 93,  391 => 92,  384 => 87,  381 => 86,  352 => 264,  346 => 261,  340 => 258,  334 => 255,  328 => 252,  322 => 249,  316 => 246,  310 => 243,  285 => 220,  276 => 214,  267 => 208,  258 => 202,  249 => 196,  240 => 190,  231 => 184,  222 => 178,  213 => 172,  204 => 166,  195 => 160,  186 => 154,  177 => 148,  168 => 142,  159 => 136,  150 => 130,  147 => 129,  145 => 128,  130 => 115,  128 => 86,  53 => 14,  49 => 13,  45 => 12,  41 => 11,  37 => 10,  33 => 9,  29 => 8,  20 => 1,);
    }
}
