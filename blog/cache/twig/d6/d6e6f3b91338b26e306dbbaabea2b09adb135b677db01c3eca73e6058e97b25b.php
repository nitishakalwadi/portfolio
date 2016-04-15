<?php

/* partials/relatedpages.html.twig */
class __TwigTemplate_c2252545be6309cdf24a64f9d9d460ef520ff8929c0a13fd4d0d628ce27734a8 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["related_pages"]) ? $context["related_pages"] : null));
        foreach ($context['_seq'] as $context["related_path"] => $context["score"]) {
            // line 2
            $context["related"] = $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "pages", array(), "array"), "get", array(0 => $context["related_path"]), "method");
            // line 3
            if ((isset($context["related"]) ? $context["related"] : null)) {
                // line 4
                echo "  <div class=\"item-img\">
    ";
                // line 5
                if (twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["related"]) ? $context["related"] : null), "media", array()), "images", array()))) {
                    // line 6
                    echo "    <a href=\"";
                    echo $this->getAttribute((isset($context["related"]) ? $context["related"] : null), "url", array());
                    echo "\" title=\"";
                    echo $this->getAttribute((isset($context["related"]) ? $context["related"] : null), "title", array());
                    echo "\">
      ";
                    // line 7
                    echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["related"]) ? $context["related"] : null), "media", array()), "images", array())), "forceResize", array(0 => 230, 1 => 160), "method"), "html", array());
                    echo "
    </a>
    ";
                } else {
                    // line 10
                    echo "    <a href=\"";
                    echo $this->getAttribute((isset($context["related"]) ? $context["related"] : null), "url", array());
                    echo "\" title=\"";
                    echo $this->getAttribute((isset($context["related"]) ? $context["related"] : null), "title", array());
                    echo "\">
      <img src='' title=\"";
                    // line 11
                    echo $this->getAttribute((isset($context["related"]) ? $context["related"] : null), "title", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute((isset($context["related"]) ? $context["related"] : null), "title", array());
                    echo "\" style=\"width:222px;height:154px;\">
    </a>
    ";
                }
                // line 14
                echo "</div>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['related_path'], $context['score'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "partials/relatedpages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  52 => 11,  45 => 10,  39 => 7,  32 => 6,  30 => 5,  27 => 4,  25 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% for related_path, score in related_pages %}*/
/* {% set related = grav['pages'].get(related_path) %}*/
/* {% if related %}*/
/*   <div class="item-img">*/
/*     {% if related.media.images|first %}*/
/*     <a href="{{ related.url }}" title="{{ related.title }}">*/
/*       {{ related.media.images|first.forceResize(230,160).html }}*/
/*     </a>*/
/*     {% else %}*/
/*     <a href="{{ related.url }}" title="{{ related.title }}">*/
/*       <img src='' title="{{ related.title }}" alt="{{ related.title }}" style="width:222px;height:154px;">*/
/*     </a>*/
/*     {% endif %}*/
/* </div>*/
/* {% endif %}*/
/* {% endfor %}*/
/* */
