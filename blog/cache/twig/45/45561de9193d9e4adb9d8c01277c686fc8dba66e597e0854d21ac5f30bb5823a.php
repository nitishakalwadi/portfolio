<?php

/* @Var:{{ grav.page.header.title }} */
class __TwigTemplate_3a824638ea510d731c2f8d783b496ee624302efc91a1321da9c3daad36de183f extends Twig_Template
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
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "page", array()), "header", array()), "title", array());
    }

    public function getTemplateName()
    {
        return "@Var:{{ grav.page.header.title }}";
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
/* {{ grav.page.header.title }}*/
