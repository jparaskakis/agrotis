<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_c5e4dd7bb0943c9dbfbd4345c4c2cc2a4872f354019d49e1c4829b24d6cf596c extends Twig_Template
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
        $__internal_0ad0a9f3761eb5e1915a7689c572066f9710480cb7c917e3b323e2d641dbd04e = $this->env->getExtension("native_profiler");
        $__internal_0ad0a9f3761eb5e1915a7689c572066f9710480cb7c917e3b323e2d641dbd04e->enter($__internal_0ad0a9f3761eb5e1915a7689c572066f9710480cb7c917e3b323e2d641dbd04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_0ad0a9f3761eb5e1915a7689c572066f9710480cb7c917e3b323e2d641dbd04e->leave($__internal_0ad0a9f3761eb5e1915a7689c572066f9710480cb7c917e3b323e2d641dbd04e_prof);

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
