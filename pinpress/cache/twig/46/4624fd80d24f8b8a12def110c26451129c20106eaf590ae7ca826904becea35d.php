<?php

/* pagination.html.twig */
class __TwigTemplate_723ea10bca36e0bb1dd4e3dfc1ef4f77d44e275209152b6c43e99b2961809a36 extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : null)) > 1)) {
            // line 2
            echo "<div class=\"blog-pager\" id=\"blog-pager\">
    <div class=\"pagenavi\">
    ";
            // line 4
            if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "hasPrev", array())) {
                // line 5
                echo "        <a rel=\"prev\" href=\"";
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "params", array());
                echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "prevUrl", array());
                echo "\">&laquo;</a>
    ";
            }
            // line 7
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["paginate"]) {
                // line 8
                echo "        ";
                if ($this->getAttribute($context["paginate"], "isCurrent", array())) {
                    // line 9
                    echo "            <span class=\"current\">";
                    echo $this->getAttribute($context["paginate"], "number", array());
                    echo "</span>
        ";
                } elseif ($this->getAttribute(                // line 10
$context["paginate"], "isInDelta", array())) {
                    // line 11
                    echo "            <a href=\"";
                    echo (isset($context["base_url"]) ? $context["base_url"] : null);
                    echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "params", array());
                    echo $this->getAttribute($context["paginate"], "url", array());
                    echo "\">";
                    echo $this->getAttribute($context["paginate"], "number", array());
                    echo "</a>
        ";
                }
                // line 13
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paginate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "    ";
            if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "hasNext", array())) {
                // line 15
                echo "        <a rel=\"next\" href=\"";
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "params", array());
                echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "nextUrl", array());
                echo "\">&raquo;</a>
    ";
            }
            // line 17
            echo "    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 17,  69 => 15,  66 => 14,  60 => 13,  50 => 11,  48 => 10,  43 => 9,  40 => 8,  35 => 7,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if pagination|length > 1 %}*/
/* <div class="blog-pager" id="blog-pager">*/
/*     <div class="pagenavi">*/
/*     {% if pagination.hasPrev %}*/
/*         <a rel="prev" href="{{ base_url }}{{ pagination.params }}{{ pagination.prevUrl }}">&laquo;</a>*/
/*     {% endif %}*/
/*     {% for paginate in pagination %}*/
/*         {% if paginate.isCurrent %}*/
/*             <span class="current">{{ paginate.number }}</span>*/
/*         {% elseif paginate.isInDelta %}*/
/*             <a href="{{ base_url }}{{ pagination.params }}{{ paginate.url }}">{{ paginate.number }}</a>*/
/*         {% endif %}*/
/*     {% endfor %}*/
/*     {% if pagination.hasNext %}*/
/*         <a rel="next" href="{{ base_url }}{{ pagination.params }}{{ pagination.nextUrl }}">&raquo;</a>*/
/*     {% endif %}*/
/*     </div>*/
/* </div>*/
/* {% endif %}*/
/* */
