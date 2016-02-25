<?php

/* layouts/education.html.twig */
class __TwigTemplate_7ff226dfef45ff29c363661c41f65ef3fae704322df7ad4df980d8ba79852088 extends Twig_Template
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

";
        // line 6
        if ($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "header", array()), "education", array())) {
            // line 7
            echo "<div class=\"edu_surround\">
  <div class=\"edu animated\">
    ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "header", array()), "education", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 10
                echo "      <div class=\"edu_item\">
        <div class=\"date\">";
                // line 11
                echo $this->getAttribute($context["item"], "date", array());
                echo "</div>
        <div class=\"topic\">";
                // line 12
                echo $this->getAttribute($context["item"], "topic", array());
                echo "</div>
        <div class=\"school\">";
                // line 13
                echo $this->getAttribute($context["item"], "school", array());
                echo "</div>
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "  </div>
</div>
";
        }
        // line 19
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "layouts/education.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 19,  62 => 16,  53 => 13,  49 => 12,  45 => 11,  42 => 10,  38 => 9,  34 => 7,  32 => 6,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="avoid_pagebreak">*/
/* <h4>{{ module.header.title }}</h4>*/
/* */
/* {{ module.content }}*/
/* */
/* {% if module.header.education %}*/
/* <div class="edu_surround">*/
/*   <div class="edu animated">*/
/*     {% for item in module.header.education %}*/
/*       <div class="edu_item">*/
/*         <div class="date">{{ item.date }}</div>*/
/*         <div class="topic">{{ item.topic }}</div>*/
/*         <div class="school">{{ item.school }}</div>*/
/*       </div>*/
/*     {% endfor %}*/
/*   </div>*/
/* </div>*/
/* {% endif %}*/
/* </div>*/
/* */
