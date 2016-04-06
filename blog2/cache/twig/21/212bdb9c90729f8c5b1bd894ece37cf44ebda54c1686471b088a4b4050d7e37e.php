<?php

/* @Var:{{ grav.language.getLanguage }} */
class __TwigTemplate_7a64a197616c59f24764a6d07e9ca55d0bebc35ef24674075a3ee6cf64e9eacc extends Twig_Template
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
        echo $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array());
    }

    public function getTemplateName()
    {
        return "@Var:{{ grav.language.getLanguage }}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {{ grav.language.getLanguage }}*/
