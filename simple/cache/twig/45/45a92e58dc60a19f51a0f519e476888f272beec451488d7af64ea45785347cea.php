<?php

/* layouts/langskills.html.twig */
class __TwigTemplate_8341697cac71deb75932e2dd382c3e4b14a7b6342b71ef2ddffb5ce174d48b7c extends Twig_Template
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

  <div class=\"row lang\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "header", array()), "languages", array()));
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
            echo "    <div class=\"large-4 medium-4 small-6 columns\">
      <ul data-pie-id=\"lang";
            // line 9
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\" class=\"pie_desc\" ";
            if (($this->getAttribute($context["item"], "level", array()) == 100)) {
                echo "data-options='{\"donut_inner_ratio\":\"0.8\"}'";
            }
            echo ">
        <li data-value=\"";
            // line 10
            echo $this->getAttribute($context["item"], "level", array());
            echo "\">
          <div class=\"lang_info\">
            <span class=\"lang_name\">";
            // line 12
            echo $this->getAttribute($context["item"], "name", array());
            echo "</span>
            <span class=\"lang_level\">";
            // line 13
            echo $this->getAttribute($context["item"], "level_name", array());
            echo "</span>
          </div>
        </li>
        ";
            // line 16
            if (($this->getAttribute($context["item"], "level", array()) != 100)) {
                // line 17
                echo "        <li data-value=\"";
                echo (100 - $this->getAttribute($context["item"], "level", array()));
                echo "\"></li>
        ";
            }
            // line 19
            echo "      </ul>
      <div id=\"lang";
            // line 20
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\" class=\"pie ";
            if (($this->getAttribute($context["item"], "level", array()) == 100)) {
                echo "nostroke";
            }
            echo " ";
            if ($this->getAttribute($context["item"], "animation", array())) {
                echo "animated ";
                echo $this->getAttribute($context["item"], "animation", array());
            }
            echo "\"></div>
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
        // line 23
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "layouts/langskills.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 23,  87 => 20,  84 => 19,  78 => 17,  76 => 16,  70 => 13,  66 => 12,  61 => 10,  53 => 9,  50 => 8,  33 => 7,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="avoid_pagebreak">*/
/*   <h4>{{ module.header.title }}</h4>*/
/* */
/*   {{ module.content }}*/
/* */
/*   <div class="row lang">*/
/*     {% for item in module.header.languages %}*/
/*     <div class="large-4 medium-4 small-6 columns">*/
/*       <ul data-pie-id="lang{{loop.index}}" class="pie_desc" {% if item.level == 100 %}data-options='{"donut_inner_ratio":"0.8"}'{% endif %}>*/
/*         <li data-value="{{ item.level }}">*/
/*           <div class="lang_info">*/
/*             <span class="lang_name">{{ item.name }}</span>*/
/*             <span class="lang_level">{{ item.level_name }}</span>*/
/*           </div>*/
/*         </li>*/
/*         {% if item.level != 100 %}*/
/*         <li data-value="{{ 100 - item.level }}"></li>*/
/*         {% endif %}*/
/*       </ul>*/
/*       <div id="lang{{loop.index}}" class="pie {% if item.level == 100 %}nostroke{% endif %} {% if item.animation %}animated {{ item.animation }}{% endif %}"></div>*/
/*     </div>*/
/*     {% endfor %}*/
/*   </div>*/
/* </div>*/
/* */
