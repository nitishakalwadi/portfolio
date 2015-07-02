<?php

/* modular/portfolio.html.twig */
class __TwigTemplate_4103baa673c3b3608edac8f29ed722d46c8e84366bd28fc66c417d97df5b30ae extends Twig_Template
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
        echo " <section id=\"portfolio\" class=\"bg-light-gray\">
  <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
            ";
        // line 5
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
        </div>
    </div>
    <div class=\"row\">
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "portfolios", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["portfolio"]) {
            // line 10
            echo "            <div class=\"col-md-4 col-sm-6 portfolio-item\">
                <a href=\"#portfolioModal";
            // line 11
            echo $this->getAttribute($context["portfolio"], "modalid", array());
            echo "\" class=\"portfolio-link\" data-toggle=\"modal\">
                    <div class=\"portfolio-hover\">
                        <div class=\"portfolio-hover-content\">
                            <i class=\"fa fa-plus fa-3x\"></i>
                        </div>
                    </div>
                    <img src=\"";
            // line 17
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($context["portfolio"], "thumbnail", array()), array(), "array"), "url", array());
            echo "\" class=\"img-responsive\" alt=\"\">
                </a>
                <div class=\"portfolio-caption\">
                    <h4>";
            // line 20
            echo $this->getAttribute($context["portfolio"], "title", array());
            echo "</h4>
                    <p class=\"text-muted\">";
            // line 21
            echo $this->getAttribute($context["portfolio"], "subtitle", array());
            echo "</p>
                </div>
            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['portfolio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </div>
</div>
</section>


 ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "portfolios", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["portfolio"]) {
            // line 32
            echo "    <div class=\"portfolio-modal modal fade\" id=\"portfolioModal";
            echo $this->getAttribute($context["portfolio"], "modalid", array());
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-content\">
            <div class=\"close-modal\" data-dismiss=\"modal\">
                <div class=\"lr\">
                    <div class=\"rl\">
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8 col-lg-offset-2\">
                        <div class=\"modal-body\">
                            <h2>";
            // line 44
            echo $this->getAttribute($context["portfolio"], "title", array());
            echo "</h2>
                            <hr class=\"star-primary\">
                            <img src=\"";
            // line 46
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($context["portfolio"], "img", array()), array(), "array"), "url", array());
            echo "\" class=\"img-responsive img-centered\" alt=\"";
            echo $this->getAttribute($context["portfolio"], "alt", array());
            echo "\">
                            <p>";
            // line 47
            echo $this->getAttribute($context["portfolio"], "description", array());
            echo "</p>
                            <ul class=\"list-inline item-details\">
                                <li>Client:
                                    <strong><a href=\"http://startbootstrap.com\">";
            // line 50
            echo $this->getAttribute($context["portfolio"], "client", array());
            echo "</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href=\"http://startbootstrap.com\">";
            // line 54
            echo $this->getAttribute($context["portfolio"], "projectdate", array());
            echo "</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href=\"http://startbootstrap.com\">";
            // line 58
            echo $this->getAttribute($context["portfolio"], "category", array());
            echo "</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['portfolio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "modular/portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 58,  120 => 54,  113 => 50,  107 => 47,  101 => 46,  96 => 44,  80 => 32,  76 => 31,  69 => 26,  58 => 21,  54 => 20,  48 => 17,  39 => 11,  36 => 10,  32 => 9,  25 => 5,  19 => 1,);
    }
}
