<?php

/* layouts/default.html.twig */
class __TwigTemplate_4befb4f99ae2908a416d8b5e1ad63984dd38cd6c3894fa5f903c63dd1198e7a3 extends Twig_Template
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
        echo "<div class=\"avoid_pagebreak\">
  <h4>";
        // line 2
        echo $this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "header", array()), "title", array());
        echo "</h4>

  ";
        // line 4
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "content", array());
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "layouts/default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="avoid_pagebreak">*/
/*   <h4>{{ module.header.title }}</h4>*/
/* */
/*   {{ module.content }}*/
/* </div>*/
/* */
