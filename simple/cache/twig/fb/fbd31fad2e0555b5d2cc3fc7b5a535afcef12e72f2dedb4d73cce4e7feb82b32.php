<?php

/* layouts/interests.html.twig */
class __TwigTemplate_7e5db00728c3ae7eb5c0099c32cd609c27fbd0b34181fdc7448e2517f4dc76d7 extends Twig_Template
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

  <div class=\"row interests\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "header", array()), "interests", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "    <div class=\"large-3 small-6 medium-3 columns ";
            if ($this->getAttribute($context["loop"], "last", array())) {
                echo "end";
            }
            echo " ";
            if ($this->getAttribute($context["item"], "animation", array())) {
                echo "animated ";
                echo $this->getAttribute($context["item"], "animation", array());
            }
            echo "\">
      <div class=\"int_icon\">
        <i class=\"fi-";
            // line 10
            echo $this->getAttribute($context["item"], "icon", array());
            echo "\"></i>
        <div class=\"activity\">";
            // line 11
            echo $this->getAttribute($context["item"], "activity", array());
            echo "</div>
      </div>
    </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "layouts/interests.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 15,  67 => 11,  63 => 10,  50 => 8,  33 => 7,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="avoid_pagebreak">*/
/*   <h4>{{ module.header.title }}</h4>*/
/* */
/*   {{ module.content }}*/
/* */
/*   <div class="row interests">*/
/*     {% for item in module.header.interests %}*/
/*     <div class="large-3 small-6 medium-3 columns {% if loop.last %}end{% endif %} {% if item.animation %}animated {{ item.animation }}{% endif %}">*/
/*       <div class="int_icon">*/
/*         <i class="fi-{{ item.icon }}"></i>*/
/*         <div class="activity">{{ item.activity }}</div>*/
/*       </div>*/
/*     </div>*/
/*     {% endfor %}*/
/*   </div>*/
/* </div>*/
/* */
