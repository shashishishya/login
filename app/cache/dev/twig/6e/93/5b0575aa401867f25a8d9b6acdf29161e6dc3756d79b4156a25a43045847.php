<?php

/* LoginLoginBundle:Default:login.html.twig */
class __TwigTemplate_6e935b0575aa401867f25a8d9b6acdf29161e6dc3756d79b4156a25a43045847 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("LoginLoginBundle:Default:index.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LoginLoginBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "
";
    }

    // line 6
    public function block_container($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"container\">
        <div class=\"well\">
            <h2 id=\"heading\"> <strong> Login page created  </strong></h2>
        </div>

        <div class=\"row\" id=\"pwd-container\">
            <div class=\"col-md-4\"></div>

            <div class=\"col-md-4\">  
                <section class=\"login-form\">
                    <form method=\"POST\" action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("login_login_homepage");
        echo "\" role=\"login\">
                        <input type=\"text\" name=\"username\" placeholder=\"Email\" required class=\"form-control input-lg\" value=\"joestudent@gmail.com\" />

                        <input type=\"password\" class=\"form-control input-lg\" name=\"password\" id=\"password\" placeholder=\"Password\" required=\"\" />


                        <div class=\"pwstrength_viewport_progress\"></div>


                        <button type=\"submit\"  name=\"go\" class=\"btn btn-lg btn-primary btn-block\">Sign in</button>

                    </form>
                        
                    <div class=\"form-links\">
                        <a href=\"#\">www.website.com</a>
                    </div>
                </section>  
            </div>
                    ";
        // line 35
        if (array_key_exists("name", $context)) {
            // line 36
            echo "                        <div class=\"alert-info fade in\">
                            <strong>hello ";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo " </strong>
                        </div>              
                            ";
        }
        // line 40
        echo "        ";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 40,  78 => 37,  75 => 36,  73 => 35,  52 => 17,  40 => 7,  37 => 6,  32 => 3,  29 => 2,);
    }
}
