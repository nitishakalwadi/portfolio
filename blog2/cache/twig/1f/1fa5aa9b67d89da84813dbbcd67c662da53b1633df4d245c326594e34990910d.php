<?php

/* form.html.twig */
class __TwigTemplate_2b14836430f294e78c0dceca49695f6b4191431ff79af2f6b2836aad5d6c4df3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "form.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        $this->loadTemplate("partials/blog_sidebar_header.html.twig", "form.html.twig", 4)->display($context);
        // line 5
        echo "<div class=\"post\">
  <div class=\"entry-container\">
    <div class=\"entry-content  single\">
      <h1 class=\"entry-title single\">";
        // line 8
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</h1>
      ";
        // line 9
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
      ";
        // line 10
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "form", array()), "enabled", array())) {
            // line 11
            echo "      ";
            $this->loadTemplate("forms/form.html.twig", "form.html.twig", 11)->display($context);
            // line 12
            echo "      ";
        }
        // line 13
        echo "      <div class=\"clear\"></div>
    </div>
  </div>
</div>

";
        // line 18
        $this->loadTemplate("partials/blog_sidebar_footer.html.twig", "form.html.twig", 18)->display($context);
    }

    public function getTemplateName()
    {
        return "form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 18,  54 => 13,  51 => 12,  48 => 11,  46 => 10,  42 => 9,  38 => 8,  33 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% block content %}*/
/* {% include 'partials/blog_sidebar_header.html.twig' %}*/
/* <div class="post">*/
/*   <div class="entry-container">*/
/*     <div class="entry-content  single">*/
/*       <h1 class="entry-title single">{{ page.header.title }}</h1>*/
/*       {{ content }}*/
/*       {% if config.plugins.form.enabled %}*/
/*       {% include "forms/form.html.twig" %}*/
/*       {% endif  %}*/
/*       <div class="clear"></div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* {% include 'partials/blog_sidebar_footer.html.twig' %}*/
/* {% endblock %}*/
/* */
