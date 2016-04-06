<?php

/* default.html.twig */
class __TwigTemplate_3dbd1ae82ad00230cca278a271e89320949b0a6ab1d4fc1e7c8ff2402408eea3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
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
        $this->loadTemplate("partials/blog_sidebar_header.html.twig", "default.html.twig", 4)->display($context);
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
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
      <div class=\"clear\"></div>
    </div>
  </div>
</div>
";
        // line 14
        $this->loadTemplate("partials/blog_sidebar_footer.html.twig", "default.html.twig", 14)->display($context);
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 14,  42 => 9,  38 => 8,  33 => 5,  31 => 4,  28 => 3,  11 => 1,);
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
/*       {{ page.content }}*/
/*       <div class="clear"></div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {% include 'partials/blog_sidebar_footer.html.twig' %}*/
/* {% endblock %}*/
/* */
