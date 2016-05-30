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
        <meta name=\"viewport\" content=\"width-device-width\", initial-scale=\"1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/css/bootstrap-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">   
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/css/sample.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/css/signup.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/css/Main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/main.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
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

                    \$('#destinationtable tr:last').after('<tr id=\"dest' + theid + '\"><td>'
                                                   + \$(this).find(\"td\").eq(0).html() + '</td><td>'
                                                   + \$(this).find(\"td\").eq(1).html() + '</td><td>'
                                                   + \$(this).find(\"td\").eq(2).html() + '</td><td>'
                                                   + \$(this).find(\"td\").eq(3).html() + '</td></tr>');         

                }


                });
            });
            </script>
    </head>
    <body>
        ";
        // line 77
        $this->displayBlock('container', $context, $blocks);
        // line 106
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
        // line 119
        if (array_key_exists("player", $context)) {
            // line 120
            echo "                           <tr class=\"success\" id=\"sour0\">
                               <td>";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), 0, array(), "array"), "player1"), "html", null, true);
            echo "</td>
                               <td> 23 </td>
                               <td> 1000 </td>
                               <td> <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> </td>
                           </tr>
                            <tr class=\"warning\" id=\"sour1\">
                               <td>";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), 0, array(), "array"), "player2"), "html", null, true);
            echo "</td>
                               <td> 23 </td>
                               <td> 1000 </td>
                               <td> <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> </td>
                           </tr>
                            <tr class=\"info\" id=\"sour2\">
                               <td>";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), 0, array(), "array"), "player3"), "html", null, true);
            echo "</td>
                               <td> 23 </td>
                               <td> 1000 </td>
                               <td> <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> </td>
                           </tr>
                            <tr class=\"warning\" id=\"sour3\">
                               <td>";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), 0, array(), "array"), "player4"), "html", null, true);
            echo "</td>
                               <td> 23 </td>
                               <td> 1000 </td>
                               <td> <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> </td>
                           </tr>
                            <tr class=\"success\" id=\"sour4\">
                               <td>";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), 0, array(), "array"), "player5"), "html", null, true);
            echo "</td>
                               <td> 23 </td>
                               <td> 1000 </td>
                               <td> <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> </td>
                           </tr>
                            <tr class=\"warning\" id=\"sour5\">
                               <td>";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), 0, array(), "array"), "player6"), "html", null, true);
            echo "</td>
                               <td> 23 </td>
                               <td> 1000 </td>
                               <td> <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> </td>
                           </tr>
                            <tr class=\"info\">
                               <td>";
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), 0, array(), "array"), "player7"), "html", null, true);
            echo "</td>
                               <td> 23 </td>
                               <td> 1000 </td>
                               <td> <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> </td>
                           </tr>
                            <tr class=\"warning\">
                               <td>";
            // line 163
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), 0, array(), "array"), "player8"), "html", null, true);
            echo "</td>
                               <td> 23 </td>
                               <td> 1000 </td>
                               <td> <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> </td>
                           </tr>
                           <tr class=\"success\">
                               <td>";
            // line 169
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), 0, array(), "array"), "player9"), "html", null, true);
            echo "</td>
                               <td> 23 </td>
                               <td> 1000 </td>
                               <td> <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> </td>
                           </tr>
                            <tr class=\"warning\">
                               <td>";
            // line 175
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), 0, array(), "array"), "player10"), "html", null, true);
            echo "</td>
                               <td> 23 </td>
                               <td> 1000 </td>
                               <td> <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> </td>
                           </tr>
                            <tr class=\"info\">
                               <td>";
            // line 181
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), 0, array(), "array"), "player11"), "html", null, true);
            echo "</td>
                               <td> 23 </td>
                               <td> 1000 </td>
                               <td> <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> </td>
                           </tr>
                            <tr class=\"warning\">
                               <td>";
            // line 187
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), 0, array(), "array"), "player12"), "html", null, true);
            echo "</td>
                               <td> 23 </td>
                               <td> 1000 </td>
                               <td> <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> </td>
                           </tr>
                           <tr class=\"success\">
                               <td>";
            // line 193
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), 0, array(), "array"), "player13"), "html", null, true);
            echo "</td>
                               <td> 23 </td>
                               <td> 1000 </td>
                               <td> <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> </td>
                           </tr>
                            <tr class=\"warning\">
                               <td>";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), 0, array(), "array"), "player14"), "html", null, true);
            echo "</td>
                               <td> 23 </td>
                               <td> 1000 </td>
                               <td> <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> </td>
                           </tr>
                            <tr class=\"info\">
                               <td>";
            // line 205
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), 0, array(), "array"), "player15"), "html", null, true);
            echo "</td>
                               <td> 23 </td>
                               <td> <button type=\"button\" class=\"use-address\" /> </td>
                               <td><span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\" id=\"loginLink\" onclick=\"toggleTable();\"></span></td>
                           </tr>
                           ";
        }
        // line 211
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
                               <th> Add </th>
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
        // line 234
        echo $this->env->getExtension('routing')->getPath("login_login_main");
        echo "#rcb\">RCB</a></span>
                       </div>
                       <div class=\"container\">
                           <span><a href=\"";
        // line 237
        echo $this->env->getExtension('routing')->getPath("login_login_main");
        echo "\">PUNE</a></span>
                       </div>
                       <div class=\"container\">
                           <span><a href=\"";
        // line 240
        echo $this->env->getExtension('routing')->getPath("login_login_main");
        echo "\">PUNJAB</a></span>
                       </div>
                       <div class=\"container\">
                           <span><a href=\"";
        // line 243
        echo $this->env->getExtension('routing')->getPath("login_login_main");
        echo "\">MUMBAI</a></span>
                       </div>
                       <div class=\"container\">
                           <span><a href=\"";
        // line 246
        echo $this->env->getExtension('routing')->getPath("login_login_main");
        echo "\">KOLKATTA</a></span>
                       </div>
                       <div class=\"container\">
                           <span><a href=\"";
        // line 249
        echo $this->env->getExtension('routing')->getPath("login_login_main");
        echo "\">GUJRATH</a></span>
                       </div>
                       <div class=\"container\">
                           <span><a href=\"";
        // line 252
        echo $this->env->getExtension('routing')->getPath("login_login_main");
        echo "\">DELHI</a></span>
                       </div>
                       <div class=\"container\">
                           <span><a href=\"";
        // line 255
        echo $this->env->getExtension('routing')->getPath("login_login_main");
        echo "\">Hydrabad</a></span>
                       </div>
                       <div class=\"container-fluid\">
                            <div class=\"row-fluid\">
                              <div class=\"span2\">
                                <!--Sidebar content-->
                              </div>
                              <div class=\"span10\">
                                <!--Body content-->
                              </div>
                            </div>
                       </div>
            </div>
        </div>
    </body>
</html>";
    }

    // line 77
    public function block_container($context, array $blocks = array())
    {
        // line 78
        echo "            <div class=\"container\">
                <div class=\"well\">
                    <h2 id=\"heading\"> <strong> Welcome for user created  </strong></h2>
                </div>
            </div>
          ";
        // line 83
        if (array_key_exists("name", $context)) {
            // line 84
            echo "            <h4> hello ";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "</h4>
            ";
        }
        // line 86
        echo "            
                <nav class=\"navbar navbar-inverse\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-header\">
                        <a class=\"navbar-brand\" href=\"#\">Website Name </a>
                    </div>
                 <ul class=\"nav navbar-nav\">
                    <li><a href=\"#\">HoMe </a></li>
                    <li><a href=\"#\"> Scores </a></li>
                    <li><a href=\"#\"> Status </a></li>
                    <li><a href=\"#\"> Upcomming </a></li>
                    <li class=\"active\"><a href=\"#\"> League </a></li>
                    <li><a href=\"#\"> Abount </a></li>
                </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"";
        // line 101
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
        return array (  404 => 101,  387 => 86,  381 => 84,  379 => 83,  372 => 78,  369 => 77,  349 => 255,  343 => 252,  337 => 249,  331 => 246,  325 => 243,  319 => 240,  313 => 237,  307 => 234,  282 => 211,  273 => 205,  264 => 199,  255 => 193,  246 => 187,  237 => 181,  228 => 175,  219 => 169,  210 => 163,  201 => 157,  192 => 151,  183 => 145,  174 => 139,  165 => 133,  156 => 127,  147 => 121,  144 => 120,  142 => 119,  127 => 106,  125 => 77,  62 => 17,  58 => 16,  54 => 15,  50 => 14,  46 => 13,  42 => 12,  38 => 11,  34 => 10,  30 => 9,  20 => 1,);
    }
}
