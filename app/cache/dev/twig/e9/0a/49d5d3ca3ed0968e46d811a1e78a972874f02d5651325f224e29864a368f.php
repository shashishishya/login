<?php

/* LoginLoginBundle:Default:index.html.twig */
class __TwigTemplate_e90a49d5d3ca3ed0968e46d811a1e78a972874f02d5651325f224e29864a368f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'container' => array($this, 'block_container'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/css/login.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
             ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    </head>
    <body>
            ";
        // line 18
        $this->displayBlock('container', $context, $blocks);
        // line 21
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/hello.js"), "html", null, true);
        echo "\"></script>
    
    ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "    </body>
</html>";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "    
              ";
    }

    // line 18
    public function block_container($context, array $blocks = array())
    {
        // line 19
        echo "    
            ";
    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        // line 26
        echo "    
    ";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 26,  93 => 25,  88 => 19,  85 => 18,  80 => 14,  77 => 13,  72 => 28,  70 => 25,  65 => 23,  61 => 22,  56 => 21,  54 => 18,  50 => 16,  48 => 13,  44 => 12,  40 => 11,  36 => 10,  32 => 9,  22 => 1,);
    }
}
