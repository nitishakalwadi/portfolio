<?php

/* item.html.twig */
class __TwigTemplate_910e2df191bb4f1f3d23c7fdadc51dbb8926f6ac571ff21440cd6c31a791c25b extends Twig_Template
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
        $this->loadTemplate("item.html.twig", "item.html.twig", 1, "665352630")->display($context);
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}


/* item.html.twig */
class __TwigTemplate_910e2df191bb4f1f3d23c7fdadc51dbb8926f6ac571ff21440cd6c31a791c25b_665352630 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["base_url"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()), "url", array());
        // line 4
        $context["feed_url"] = (isset($context["base_url"]) ? $context["base_url"] : null);
        // line 5
        if (((isset($context["base_url"]) ? $context["base_url"] : null) == "/")) {
            // line 6
            $context["base_url"] = "";
        }
        // line 9
        if (((isset($context["base_url"]) ? $context["base_url"] : null) == (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null))) {
            // line 10
            $context["feed_url"] = (((isset($context["base_url"]) ? $context["base_url"] : null) . "/") . $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()), "slug", array()));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "<div class=\"span9\" id=\"content\" role=\"main\">
  <div class=\"main section\" id=\"main\">
    <div class=\"widget Blog\" id=\"Blog1\">
      ";
        // line 17
        $this->loadTemplate("partials/blog_item.html.twig", "item.html.twig", 17)->display(array_merge($context, array("truncate" => false, "big_header" => true)));
        // line 18
        echo "    </div>
  </div>
</div>

<div class=\"span3\" id=\"side-bar\">
  ";
        // line 23
        $this->loadTemplate("partials/sidebar.html.twig", "item.html.twig", 23)->display($context);
        // line 24
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 24,  90 => 23,  83 => 18,  81 => 17,  76 => 14,  73 => 13,  69 => 1,  66 => 10,  64 => 9,  61 => 6,  59 => 5,  57 => 4,  55 => 3,  19 => 1,);
    }
}
/* {% embed 'partials/base.html.twig' %}*/
/* */
/* {% set base_url = page.parent.url %}*/
/* {% set feed_url = base_url %}*/
/* {% if base_url == '/' %}*/
/* {% set base_url = '' %}*/
/* {% endif %}*/
/* */
/* {% if base_url == base_url_relative %}*/
/* {% set feed_url = base_url~'/'~page.parent.slug %}*/
/* {% endif  %}*/
/* */
/* {% block content %}*/
/* <div class="span9" id="content" role="main">*/
/*   <div class="main section" id="main">*/
/*     <div class="widget Blog" id="Blog1">*/
/*       {% include 'partials/blog_item.html.twig' with {'truncate':false,'big_header':true} %}*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="span3" id="side-bar">*/
/*   {% include 'partials/sidebar.html.twig' %}*/
/* </div>*/
/* {% endblock %}*/
/* {% endembed %}*/
/* */
