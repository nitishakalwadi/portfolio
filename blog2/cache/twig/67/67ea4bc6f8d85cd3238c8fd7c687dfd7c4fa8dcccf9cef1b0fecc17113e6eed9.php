<?php

/* partials/base.html.twig */
class __TwigTemplate_20612cacd8cf4aa9ceeae17ac9d5e870a4bccd920b62de2966c49fd714879fd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" class='";
        // line 2
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 7)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 8))) {
        } else {
            echo "v2";
        }
        echo " ";
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 7))) {
            echo "ie ie7 ltie8 ltie9";
        }
        echo " ";
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 8))) {
            echo "ie ie8 ltie9";
        }
        echo "'>
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 46
        echo "</head>
<body>
  <div class=\"firstload-background\">
  </div>
  <script src=\"http://connect.facebook.net/en_US/all.js#xfbml=1\"></script>

  <div class=\"site\" id=\"page\">
    ";
        // line 53
        $this->displayBlock('header', $context, $blocks);
        // line 56
        echo "    <div class=\"clear\"></div>
    ";
        // line 57
        $this->displayBlock('body', $context, $blocks);
        // line 64
        echo "
    ";
        // line 65
        $this->displayBlock('footer', $context, $blocks);
        // line 68
        echo "  </div>

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
        <!--[if IE]> <script> (function() { var html5 = (\"abbr,article,aside,audio,canvas,datalist,details,\" + \"figure,footer,header,hgroup,mark,menu,meter,nav,output,\" + \"progress,section,time,video\").split(','); for (var i = 0; i < html5.length; i++) { document.createElement(html5[i]); } try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {} })(); </script> <![endif]-->
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'/>
        <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'/>
        <link href='//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css' rel='stylesheet'/>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab%3A400%2C700&ver=4.2.2' id='roboto-slab-css' media='all' rel='stylesheet' type='text/css'/>
        <meta name=\"google-translate-customization\" content=\"";
        // line 15
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "google_translate_token", array());
        echo "\">
        ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

        ";
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

        <script>
        \$(document).ready(function(){
          \$(\".widget h2\").wrapInner(\"<span></span>\");
        });
        </script>

        ";
        // line 41
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 42
            echo "            <script src=\"//html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
        ";
        }
        // line 44
        echo "
    ";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/widget.css"), "method");
        // line 18
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/style.css"), "method");
        // line 19
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/content.css"), "method");
        // line 20
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/sidebar.css"), "method");
        // line 21
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/lightbox.css"), "method");
        // line 22
        echo "            ";
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 7)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 8))) {
            // line 23
            echo "                ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/ie.css"), "method");
            // line 24
            echo "            ";
        }
        // line 25
        echo "        ";
    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        // line 29
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 30
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/scripts.js"), "method");
        // line 31
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/video.js"), "method");
        // line 32
        echo "        ";
    }

    // line 53
    public function block_header($context, array $blocks = array())
    {
        // line 54
        echo "      ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 54)->display($context);
        // line 55
        echo "    ";
    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        // line 58
        echo "    <div class='container' id=\"content-wrapper\">
      <div class=\"row\" id=\"primary\">
      ";
        // line 60
        $this->displayBlock('content', $context, $blocks);
        // line 61
        echo "    </div>
    </div>
    ";
    }

    // line 60
    public function block_content($context, array $blocks = array())
    {
    }

    // line 65
    public function block_footer($context, array $blocks = array())
    {
        // line 66
        echo "      ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 66)->display($context);
        // line 67
        echo "    ";
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
        return array (  224 => 67,  221 => 66,  218 => 65,  213 => 60,  207 => 61,  205 => 60,  201 => 58,  198 => 57,  194 => 55,  191 => 54,  188 => 53,  184 => 32,  181 => 31,  178 => 30,  175 => 29,  172 => 28,  168 => 25,  165 => 24,  162 => 23,  159 => 22,  156 => 21,  153 => 20,  150 => 19,  147 => 18,  144 => 17,  141 => 16,  136 => 44,  132 => 42,  130 => 41,  118 => 33,  116 => 28,  110 => 26,  108 => 16,  104 => 15,  95 => 9,  92 => 8,  90 => 7,  82 => 6,  79 => 5,  76 => 4,  68 => 68,  66 => 65,  63 => 64,  61 => 57,  58 => 56,  56 => 53,  47 => 46,  45 => 4,  29 => 2,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en" class='{% if browser.getBrowser == 'msie' and browser.getVersion == 7 and browser.getVersion == 8 %}{% else %}v2{% endif %} {% if browser.getBrowser == 'msie' and browser.getVersion == 7 %}ie ie7 ltie8 ltie9{% endif %} {% if browser.getBrowser == 'msie' and browser.getVersion == 8 %}ie ie8 ltie9{% endif %}'>*/
/* <head>*/
/*     {% block head %}*/
/*         <meta charset="utf-8" />*/
/*         <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>*/
/*         {% include 'partials/metadata.html.twig' %}*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">*/
/*         <link rel="icon" type="image/png" href="{{ theme_url }}/images/favicon.png" />*/
/*         <!--[if IE]> <script> (function() { var html5 = ("abbr,article,aside,audio,canvas,datalist,details," + "figure,footer,header,hgroup,mark,menu,meter,nav,output," + "progress,section,time,video").split(','); for (var i = 0; i < html5.length; i++) { document.createElement(html5[i]); } try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {} })(); </script> <![endif]-->*/
/*         <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'/>*/
/*         <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'/>*/
/*         <link href='//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css' rel='stylesheet'/>*/
/*         <link href='http://fonts.googleapis.com/css?family=Roboto+Slab%3A400%2C700&ver=4.2.2' id='roboto-slab-css' media='all' rel='stylesheet' type='text/css'/>*/
/*         <meta name="google-translate-customization" content="{{ site.google_translate_token }}">*/
/*         {% block stylesheets %}*/
/*             {% do assets.addCss('theme://css/widget.css') %}*/
/*             {% do assets.addCss('theme://css/style.css') %}*/
/*             {% do assets.addCss('theme://css/content.css') %}*/
/*             {% do assets.addCss('theme://css/sidebar.css') %}*/
/*             {% do assets.addCss('theme://css/lightbox.css') %}*/
/*             {% if browser.getBrowser == 'msie' and browser.getVersion >= 7 and browser.getVersion <= 8 %}*/
/*                 {% do assets.addCss('theme://css/ie.css') %}*/
/*             {% endif %}*/
/*         {% endblock %}*/
/*         {{ assets.css() }}*/
/* */
/*         {% block javascripts %}*/
/*             {% do assets.add('jquery',101) %}*/
/*             {% do assets.add('theme://js/scripts.js') %}*/
/*             {% do assets.add('theme://js/video.js') %}*/
/*         {% endblock %}*/
/*         {{ assets.js() }}*/
/* */
/*         <script>*/
/*         $(document).ready(function(){*/
/*           $(".widget h2").wrapInner("<span></span>");*/
/*         });*/
/*         </script>*/
/* */
/*         {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}*/
/*             <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>*/
/*         {% endif %}*/
/* */
/*     {% endblock head %}*/
/* </head>*/
/* <body>*/
/*   <div class="firstload-background">*/
/*   </div>*/
/*   <script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>*/
/* */
/*   <div class="site" id="page">*/
/*     {% block header %}*/
/*       {% include 'partials/header.html.twig' %}*/
/*     {% endblock %}*/
/*     <div class="clear"></div>*/
/*     {% block body %}*/
/*     <div class='container' id="content-wrapper">*/
/*       <div class="row" id="primary">*/
/*       {% block content %}{% endblock %}*/
/*     </div>*/
/*     </div>*/
/*     {% endblock %}*/
/* */
/*     {% block footer %}*/
/*       {% include 'partials/footer.html.twig' %}*/
/*     {% endblock %}*/
/*   </div>*/
/* */
/*     </body>*/
/*     </html>*/
/* */
