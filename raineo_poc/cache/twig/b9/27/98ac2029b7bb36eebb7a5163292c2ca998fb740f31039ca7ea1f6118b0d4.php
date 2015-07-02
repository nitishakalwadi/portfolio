<?php

/* partials/base.html.twig */
class __TwigTemplate_b92798ac2029b7bb36eebb7a5163292c2ca998fb740f31039ca7ea1f6118b0d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'header' => array($this, 'block_header'),
            'showcase' => array($this, 'block_showcase'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts_bottom' => array($this, 'block_javascripts_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 28
        echo "    </head>
    <body id=\"page-top\" class=\"index\">

        ";
        // line 31
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 34
        echo "
        ";
        // line 35
        $this->displayBlock('header', $context, $blocks);
        // line 36
        echo "
            ";
        // line 37
        $this->displayBlock('showcase', $context, $blocks);
        // line 38
        echo "
                ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "
                    ";
        // line 43
        $this->displayBlock('footer', $context, $blocks);
        // line 46
        echo "
                    ";
        // line 47
        $this->displayBlock('javascripts_bottom', $context, $blocks);
        // line 54
        echo "                    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

                </body>
                </html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 6
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>
        ";
        // line 7
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 7)->display($context);
        // line 8
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/favicon.png\" />

        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

        ";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
        ";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css-compiled/global.css", 1 => 100), "method");
        // line 13
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/font-awesome/css/font-awesome.min.css", 1 => 100), "method");
        // line 14
        echo "            <link href=\"http://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
            <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
            <link href=\"http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">
            <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
        ";
    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        // line 23
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 24
        echo "
        ";
    }

    // line 31
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 32
        echo "            ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 32)->display($context);
        // line 33
        echo "        ";
    }

    // line 35
    public function block_header($context, array $blocks = array())
    {
    }

    // line 37
    public function block_showcase($context, array $blocks = array())
    {
    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        // line 40
        echo "                    ";
        $this->displayBlock('content', $context, $blocks);
        // line 41
        echo "                    ";
    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
    }

    // line 43
    public function block_footer($context, array $blocks = array())
    {
        // line 44
        echo "                        ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 44)->display($context);
        // line 45
        echo "                    ";
    }

    // line 47
    public function block_javascripts_bottom($context, array $blocks = array())
    {
        // line 48
        echo "                        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/bootstrap.min.js", 1 => 100), "method");
        // line 49
        echo "                        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.easing.min.js"), "method");
        // line 50
        echo "                        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/classie.js"), "method");
        // line 51
        echo "                        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/cbpAnimatedHeader.js"), "method");
        // line 52
        echo "                        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/agency.js"), "method");
        // line 53
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 53,  208 => 52,  205 => 51,  202 => 50,  199 => 49,  196 => 48,  193 => 47,  189 => 45,  186 => 44,  183 => 43,  178 => 40,  174 => 41,  171 => 40,  168 => 39,  163 => 37,  158 => 35,  154 => 33,  151 => 32,  148 => 31,  143 => 24,  140 => 23,  137 => 22,  128 => 14,  125 => 13,  122 => 12,  119 => 11,  112 => 26,  110 => 22,  104 => 20,  102 => 11,  97 => 9,  94 => 8,  92 => 7,  84 => 6,  81 => 5,  78 => 4,  68 => 54,  66 => 47,  63 => 46,  61 => 43,  58 => 42,  56 => 39,  53 => 38,  51 => 37,  48 => 36,  46 => 35,  43 => 34,  41 => 31,  36 => 28,  34 => 4,  29 => 1,);
    }
}
