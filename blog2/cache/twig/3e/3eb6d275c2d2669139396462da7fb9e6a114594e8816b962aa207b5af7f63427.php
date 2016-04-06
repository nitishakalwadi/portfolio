<?php

/* @Var:{{ grav.uri.path }} */
class __TwigTemplate_f9aa788bcf07291dfffed4c03054fb53f0aa4cd3a29a843377a37327a4a49812 extends Twig_Template
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
        echo $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "uri", array()), "path", array());
    }

    public function getTemplateName()
    {
        return "@Var:{{ grav.uri.path }}";
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
/* {{ grav.uri.path }}*/
