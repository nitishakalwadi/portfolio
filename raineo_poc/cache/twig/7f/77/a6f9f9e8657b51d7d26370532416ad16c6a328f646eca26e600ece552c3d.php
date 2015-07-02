<?php

/* partials/footer.html.twig */
class __TwigTemplate_7f77a6f9f9e8657b51d7d26370532416ad16c6a328f646eca26e600ece552c3d extends Twig_Template
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
        echo "<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <span class=\"copyright\">Copyright &copy; ";
        // line 5
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo " 2014</span>
            </div>
            <div class=\"col-md-4\">
                <ul class=\"list-inline social-buttons\">
                    ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "social", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["network"]) {
            // line 10
            echo "                        <li><a href=\"";
            echo $this->getAttribute($context["network"], "url", array());
            echo "\"><i class=\"fa fa-";
            echo $this->getAttribute($context["network"], "title", array());
            echo "\"></i></a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['network'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "                </ul>
            </div>
            <div class=\"col-md-4\">
                <ul class=\"list-inline quicklinks\">
                    ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "quicklinks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 18
            echo "                        <li><a href=\"";
            echo $this->getAttribute($context["link"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["link"], "title", array());
            echo "</a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                </ul>
            </div>
        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 21,  58 => 18,  54 => 17,  48 => 13,  36 => 10,  32 => 9,  25 => 5,  19 => 1,);
    }
}
