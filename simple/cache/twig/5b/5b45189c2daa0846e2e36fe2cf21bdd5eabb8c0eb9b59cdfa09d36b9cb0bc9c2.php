<?php

/* partials/header.html.twig */
class __TwigTemplate_e42e0ebdc906bcde9f341e78db99648839b3731c9a052432855081fd5a715aa7 extends Twig_Template
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
        echo "<div id=\"header\">
    <div class=\"row\">
        <div class=\"large-3 columns\">
            ";
        // line 4
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array())) {
            // line 5
            echo "                <h2>";
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
            echo "</h2>
            ";
        }
        // line 6
        echo "   
            ";
        // line 7
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description", array())) {
            // line 8
            echo "                <h6 class=\"light\">";
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description", array());
            echo "</h6>
            ";
        }
        // line 10
        echo "        </div>
        <div class=\"large-3 columns\">
            <div class=\"row\">
                <div class=\"small-4 columns light2 italic\">
                    Address:
                </div>
                <div class=\"small-8 columns border-left light2 \">
                    <ul class=\"no-bullet\">
                        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "address", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 19
            echo "                            <li>";
            echo $this->getAttribute($context["item"], "line", array());
            echo "</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                    </ul>
                </div>
            </div>
        </div>
        <div class=\"large-3 columns\">
            <div class=\"row\">
                <div class=\"small-4 columns light2 italic\">
                    Contact:
                </div>
                <div class=\"small-8 columns border-left light2\">
                    <ul class=\"no-bullet\">
                        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "contact", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 33
            echo "                            <li>";
            echo $this->getAttribute($context["item"], "line", array());
            echo "</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                    </ul>
                </div>
            </div>
        </div>
        <div class=\"large-2 columns text-right italic website\">
            <a href=\"http://";
        // line 40
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "websiteURL", array());
        echo "\">";
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "website", array());
        echo "</a>
            <br/>
            <a href=\"http://";
        // line 42
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "blogURL", array());
        echo "\">";
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "blog", array());
        echo "</a>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 42,  99 => 40,  92 => 35,  83 => 33,  79 => 32,  66 => 21,  57 => 19,  53 => 18,  43 => 10,  37 => 8,  35 => 7,  32 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="row">*/
/*         <div class="large-3 columns">*/
/*             {% if site.title %}*/
/*                 <h2>{{ site.title }}</h2>*/
/*             {% endif %}   */
/*             {% if site.description %}*/
/*                 <h6 class="light">{{ site.description }}</h6>*/
/*             {% endif %}*/
/*         </div>*/
/*         <div class="large-3 columns">*/
/*             <div class="row">*/
/*                 <div class="small-4 columns light2 italic">*/
/*                     Address:*/
/*                 </div>*/
/*                 <div class="small-8 columns border-left light2 ">*/
/*                     <ul class="no-bullet">*/
/*                         {% for item in site.address %}*/
/*                             <li>{{ item.line }}</li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="large-3 columns">*/
/*             <div class="row">*/
/*                 <div class="small-4 columns light2 italic">*/
/*                     Contact:*/
/*                 </div>*/
/*                 <div class="small-8 columns border-left light2">*/
/*                     <ul class="no-bullet">*/
/*                         {% for item in site.contact %}*/
/*                             <li>{{ item.line }}</li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="large-2 columns text-right italic website">*/
/*             <a href="http://{{ site.websiteURL }}">{{ site.website }}</a>*/
/*             <br/>*/
/*             <a href="http://{{ site.blogURL }}">{{ site.blog }}</a>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
