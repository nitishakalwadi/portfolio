<?php

/* partials/footer.html.twig */
class __TwigTemplate_1c2188323b41051caac95e0f0929b9969b8704b1145924bcffbd213ef07c081e extends Twig_Template
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
        echo "<div class=\"site-footer\" id=\"colophon\" role=\"contentinfo\">
  <footer class=\"footer\" id=\"footer\">
    <div class=\"container1 clearfix\">
      <div class=\"go-top\">
        <a href=\"#\"><i class=\"fa fa-angle-up\"></i></a>
      </div>
      <p></p>
      <div id=\"mycontent\">
        ";
        // line 9
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "copyright", array())) {
            // line 10
            echo "        ";
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "copyright", array());
            echo "
        ";
        }
        // line 12
        echo "      </div>
      <p></p>
    </div>
  </footer>
</div>
";
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
        return array (  37 => 12,  31 => 10,  29 => 9,  19 => 1,);
    }
}
/* <div class="site-footer" id="colophon" role="contentinfo">*/
/*   <footer class="footer" id="footer">*/
/*     <div class="container1 clearfix">*/
/*       <div class="go-top">*/
/*         <a href="#"><i class="fa fa-angle-up"></i></a>*/
/*       </div>*/
/*       <p></p>*/
/*       <div id="mycontent">*/
/*         {% if site.copyright %}*/
/*         {{ site.copyright }}*/
/*         {% endif %}*/
/*       </div>*/
/*       <p></p>*/
/*     </div>*/
/*   </footer>*/
/* </div>*/
/* */
