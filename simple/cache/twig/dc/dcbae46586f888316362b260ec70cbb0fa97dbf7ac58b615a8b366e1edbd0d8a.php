<?php

/* layouts/special.html.twig */
class __TwigTemplate_21c5305d5144c1d9ae038e73727685adf3bd1ae518f020988343fe42ae52ac05 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "header", array()), "specialities", array()), 3));
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
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 7
            echo "  <ul class=\"inline-list special ";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo "first";
            }
            echo " ";
            if ($this->getAttribute($context["loop"], "last", array())) {
                echo "last";
            }
            echo "\">
    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
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
                // line 9
                echo "    <li ";
                if ($this->getAttribute($context["item"], "animation", array())) {
                    echo "class=\"animated ";
                    echo $this->getAttribute($context["item"], "animation", array());
                }
                echo "\">
      <i class=\"fi-";
                // line 10
                echo $this->getAttribute($context["item"], "icon", array());
                echo "\"></i>
      <div class=\"pointer hide-for-small-only ";
                // line 11
                if (($this->getAttribute($context["loop"], "index", array()) == 2)) {
                    echo "second";
                }
                echo "\"></div>
      <div class=\"desc\">";
                // line 12
                echo $this->getAttribute($context["item"], "text", array());
                echo "</div>
    </li>
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
            echo "  </ul>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "layouts/special.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 17,  112 => 15,  95 => 12,  89 => 11,  85 => 10,  77 => 9,  60 => 8,  49 => 7,  32 => 6,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="avoid_pagebreak">*/
/*   <h4>{{ module.header.title }}</h4>*/
/* */
/*   {{ module.content }}*/
/* */
/*   {% for row in module.header.specialities|batch(3) %}*/
/*   <ul class="inline-list special {% if loop.first %}first{% endif %} {% if loop.last %}last{% endif %}">*/
/*     {% for item in row %}*/
/*     <li {% if item.animation %}class="animated {{ item.animation }}{% endif %}">*/
/*       <i class="fi-{{ item.icon }}"></i>*/
/*       <div class="pointer hide-for-small-only {% if loop.index == 2 %}second{% endif %}"></div>*/
/*       <div class="desc">{{ item.text }}</div>*/
/*     </li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* {% endfor %}*/
/* </div>*/
/* */
