<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_23c4dd3f2067a65a4105714325607070652ca0798f4da3516c8026e7c0a7c00c extends Twig_Template
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
        $__internal_1e023354199bdb2cb7a47cc1eee9df41280180a367ed100a30e4d836036c82ca = $this->env->getExtension("native_profiler");
        $__internal_1e023354199bdb2cb7a47cc1eee9df41280180a367ed100a30e4d836036c82ca->enter($__internal_1e023354199bdb2cb7a47cc1eee9df41280180a367ed100a30e4d836036c82ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1e023354199bdb2cb7a47cc1eee9df41280180a367ed100a30e4d836036c82ca->leave($__internal_1e023354199bdb2cb7a47cc1eee9df41280180a367ed100a30e4d836036c82ca_prof);

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
