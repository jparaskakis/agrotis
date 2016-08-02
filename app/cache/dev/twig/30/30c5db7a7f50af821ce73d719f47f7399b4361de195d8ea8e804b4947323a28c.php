<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_b12808a5890c9ad90004374bd6537dd7cadd45ed9fe3b2b034fb19daaf29e645 extends Twig_Template
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
        $__internal_435b455d98de6a30938611512a6e807315605e56c2e83d81ac6a67ae7de79b24 = $this->env->getExtension("native_profiler");
        $__internal_435b455d98de6a30938611512a6e807315605e56c2e83d81ac6a67ae7de79b24->enter($__internal_435b455d98de6a30938611512a6e807315605e56c2e83d81ac6a67ae7de79b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_435b455d98de6a30938611512a6e807315605e56c2e83d81ac6a67ae7de79b24->leave($__internal_435b455d98de6a30938611512a6e807315605e56c2e83d81ac6a67ae7de79b24_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
