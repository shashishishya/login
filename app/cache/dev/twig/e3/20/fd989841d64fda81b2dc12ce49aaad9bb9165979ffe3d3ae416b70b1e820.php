<?php

/* LoginLoginBundle:Default:signup.html.twig */
class __TwigTemplate_e320fd989841d64fda81b2dc12ce49aaad9bb9165979ffe3d3ae416b70b1e820 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">   
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/css/sample.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/css/signup.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/signup.js"), "html", null, true);
        echo "\"></script>
             ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "    </head>
    <body>
";
        // line 19
        $this->displayBlock('container', $context, $blocks);
        // line 108
        echo "           </body>
</html>s";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "    
              ";
    }

    // line 19
    public function block_container($context, array $blocks = array())
    {
        // line 20
        echo "    <div class=\"container\">
        <div class=\"well\">
            <h2 id=\"heading\"> <strong> Signup page created  </strong></h2>
        </div>
        <div class=\"row\" id=\"pwd-container\">
            <div class=\"col-md-4\"></div>

            <div class=\"col-md-4\">  
                <section class=\"login-form\">
                    <form method=\"POST\" action=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("login_login_signup");
        echo "\" onSubmit=\"return formValidation();\" name=\"sigup\">
                        <div class=\"form-group\">
                            <label for=\"firstname\" class=\"col-sm-2 control-label\">FIRST NAME </label>
                            <div class=\"col-sm-10\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
                                    <input type=\"text\" name=\"firstname\" id=\"firstname\" class=\"form-control\" placeholder=\" ENTER THE FIRST NAME\" />
                                    <br>
                                </div>
                                </br>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"firstname\" class=\"col-sm-2 control-label\">LAST NAME </label>
                            <div class=\"col-sm-10\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
                                    <input type=\"text\" id=\"lastname\" name=\"lastname\" class=\"form-control\" placeholder=\" ENTER THE LAST NAME\" />
                                </div>
                                </br>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"firstname\" class=\"col-sm-2 control-label\">Email address </label>
                            <div class=\"col-sm-10\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"fa fa-envelope fa\" aria-hidden=\"true\"></i></span>
                                    <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\" ENTER THE EMAIL ADDRESS\" />
                                </div>
                                </br>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"username\" class=\"col-sm-2 control-label\">USER NAME </label>
                            <div class=\"col-sm-10\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
                                    <input type=\"text\" name=\"username\" class=\"form-control\" placeholder=\" ENTER THE USERNAME\" />
                                </div>
                                </br>
                            </div>
                        </div>
                        
                        <div class=\"form-group\">
                            <label for=\"username\" class=\"col-sm-2 control-label\"> PASS WORD  </label>
                            <div class=\"col-sm-10\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
                                    <input type=\"text\" name=\"password\" class=\"form-control\" placeholder=\" ENTER THE PASSWORD\" />
                                </div>
                                </br>
                            </div>
                        </div>
                        
                         <div class=\"form-group\">
                            <label for=\"confirm_password\" class=\"col-sm-2 control-label\">Confirm password </label>
                            <div class=\"col-sm-10\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
                                    <input type=\"text\" name=\"confirm_password\" class=\"form-control\" placeholder=\"Confirm password\" />
                                </div>
                                </br>
                            </div>
                        </div>
                        

                        <div class=\"pwstrength_viewport_progress\"></div>
                        <br>

                        <button type=\"submit\" name=\"go\" class=\"btn btn-lg btn-primary btn-block\">Sign Up</button>
                       
                    </form>

                    <div class=\"form-links\">
                        <a href=\"#\">www.website.com</a>
                    </div>
                </section>  
            </div>
        ";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:signup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 29,  75 => 20,  72 => 19,  67 => 15,  64 => 14,  59 => 108,  57 => 19,  53 => 17,  51 => 14,  47 => 13,  43 => 12,  39 => 11,  35 => 10,  31 => 9,  21 => 1,);
    }
}
