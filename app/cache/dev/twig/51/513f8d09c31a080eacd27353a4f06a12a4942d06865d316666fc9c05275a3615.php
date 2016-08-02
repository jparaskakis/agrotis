<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_fed53a607e75d137d5bf4af61e7b2f55f213c2c393fd7bc8dc5d1b21507e4e0b extends Twig_Template
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
        $__internal_2b96e4ef5e10e208cd4430fdcc9c15c5ca1556da06510f64bab6c98a2bfe14ff = $this->env->getExtension("native_profiler");
        $__internal_2b96e4ef5e10e208cd4430fdcc9c15c5ca1556da06510f64bab6c98a2bfe14ff->enter($__internal_2b96e4ef5e10e208cd4430fdcc9c15c5ca1556da06510f64bab6c98a2bfe14ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2b96e4ef5e10e208cd4430fdcc9c15c5ca1556da06510f64bab6c98a2bfe14ff->leave($__internal_2b96e4ef5e10e208cd4430fdcc9c15c5ca1556da06510f64bab6c98a2bfe14ff_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
