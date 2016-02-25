<?php

/* partials/base.html.twig */
class __TwigTemplate_e053686b7b8a06c02e49825013cbb8487b85084c67d28baaa76d4261dc53eaa9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 9]><html class=\"lt-ie10\" lang=\"en\" > <![endif]-->
<html class=\"no-js\" lang=\"en\" >
<head>
    ";
        // line 5
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 6
        echo "        ";
        $this->displayBlock('head', $context, $blocks);
        // line 29
        echo "    </head>

    <body>
        ";
        // line 32
        $this->displayBlock('header', $context, $blocks);
        // line 35
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "
         ";
        // line 42
        $this->displayBlock('footer', $context, $blocks);
        // line 45
        echo "
        ";
        // line 46
        $this->displayBlock('javascripts', $context, $blocks);
        // line 52
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

        <script type=\"text/javascript\">
        Pizza.init(document.body, {
            donut: true,
            donut_inner_ratio: 0.7,
        });
        </script>

    </body>
    </html>
";
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "            <meta charset=\"utf-8\" />
            <title>";
        // line 8
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>
            ";
        // line 9
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 9)->display($context);
        // line 10
        echo "            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
            <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://img/favicon.png");
        echo "\" />

            <script type='text/javascript' src='";
        // line 13
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://js/vendor/modernizr.js");
        echo "'></script>
            <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600,400italic,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

            ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "            ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

            <link href=\"";
        // line 26
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://css/print.css");
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"print\" />

        ";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/normalize.css"), "method");
        // line 18
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/foundation.css"), "method");
        // line 19
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://icons/foundation-icons.css"), "method");
        // line 20
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/animate.css"), "method");
        // line 21
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/pizza.css"), "method");
        // line 22
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/app.css"), "method");
        // line 23
        echo "            ";
    }

    // line 32
    public function block_header($context, array $blocks = array())
    {
        // line 33
        echo "            ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 33)->display($context);
        // line 34
        echo "        ";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        // line 36
        echo "            <div class=\"row main\">
                ";
        // line 37
        $this->displayBlock('content', $context, $blocks);
        // line 39
        echo "            </div>
        ";
    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
        // line 38
        echo "                ";
    }

    // line 42
    public function block_footer($context, array $blocks = array())
    {
        // line 43
        echo "            ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 43)->display($context);
        // line 44
        echo "        ";
    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        // line 47
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 48
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/foundation.min.js"), "method");
        // line 49
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/vendor/snap.svg.js"), "method");
        // line 50
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/pizza.js"), "method");
        // line 51
        echo "        ";
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
        return array (  199 => 51,  196 => 50,  193 => 49,  190 => 48,  187 => 47,  184 => 46,  180 => 44,  177 => 43,  174 => 42,  170 => 38,  167 => 37,  162 => 39,  160 => 37,  157 => 36,  154 => 35,  150 => 34,  147 => 33,  144 => 32,  140 => 23,  137 => 22,  134 => 21,  131 => 20,  128 => 19,  125 => 18,  122 => 17,  119 => 16,  112 => 26,  106 => 24,  104 => 16,  98 => 13,  93 => 11,  90 => 10,  88 => 9,  80 => 8,  77 => 7,  74 => 6,  57 => 52,  55 => 46,  52 => 45,  50 => 42,  47 => 41,  44 => 35,  42 => 32,  37 => 29,  34 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->*/
/* <html class="no-js" lang="en" >*/
/* <head>*/
/*     {% set theme_config = attribute(config.themes, config.system.pages.theme) %}*/
/*         {% block head %}*/
/*             <meta charset="utf-8" />*/
/*             <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>*/
/*             {% include 'partials/metadata.html.twig' %}*/
/*             <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*             <link rel="icon" type="image/png" href="{{ url('theme://img/favicon.png') }}" />*/
/* */
/*             <script type='text/javascript' src='{{ url('theme://js/vendor/modernizr.js') }}'></script>*/
/*             <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600,400italic,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>*/
/* */
/*             {% block stylesheets %}*/
/*                 {% do assets.addCss('theme://css/normalize.css') %}*/
/*                 {% do assets.addCss('theme://css/foundation.css') %}*/
/*                 {% do assets.addCss('theme://icons/foundation-icons.css') %}*/
/*                 {% do assets.addCss('theme://css/animate.css') %}*/
/*                 {% do assets.addCss('theme://css/pizza.css') %}*/
/*                 {% do assets.addCss('theme://css/app.css') %}*/
/*             {% endblock %}*/
/*             {{ assets.css() }}*/
/* */
/*             <link href="{{ url('theme://css/print.css') }}" rel="stylesheet" type="text/css" media="print" />*/
/* */
/*         {% endblock %}*/
/*     </head>*/
/* */
/*     <body>*/
/*         {% block header %}*/
/*             {% include 'partials/header.html.twig' %}*/
/*         {% endblock %}*/
/*         {% block body %}*/
/*             <div class="row main">*/
/*                 {% block content %}*/
/*                 {% endblock %}*/
/*             </div>*/
/*         {% endblock %}*/
/* */
/*          {% block footer %}*/
/*             {% include 'partials/footer.html.twig' %}*/
/*         {% endblock %}*/
/* */
/*         {% block javascripts %}*/
/*             {% do assets.add('jquery',101) %}*/
/*             {% do assets.addJs('theme://js/foundation.min.js') %}*/
/*             {% do assets.addJs('theme://js/vendor/snap.svg.js') %}*/
/*             {% do assets.addJs('theme://js/pizza.js') %}*/
/*         {% endblock %}*/
/*         {{ assets.js() }}*/
/* */
/*         <script type="text/javascript">*/
/*         Pizza.init(document.body, {*/
/*             donut: true,*/
/*             donut_inner_ratio: 0.7,*/
/*         });*/
/*         </script>*/
/* */
/*     </body>*/
/*     </html>*/
/* */
