<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_e166e373e135dcb460dc1b9636866be3338740d227ddaf1eec1176b0f46e1815 extends Twig_Template
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
        $__internal_5072d4656452207599462a41c42cfeb135a21d0a1ffd7a96cd5ddc4df4b592cf = $this->env->getExtension("native_profiler");
        $__internal_5072d4656452207599462a41c42cfeb135a21d0a1ffd7a96cd5ddc4df4b592cf->enter($__internal_5072d4656452207599462a41c42cfeb135a21d0a1ffd7a96cd5ddc4df4b592cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5072d4656452207599462a41c42cfeb135a21d0a1ffd7a96cd5ddc4df4b592cf->leave($__internal_5072d4656452207599462a41c42cfeb135a21d0a1ffd7a96cd5ddc4df4b592cf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
