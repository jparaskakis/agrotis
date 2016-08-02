<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_af286fcd21e814c367380f016c1a50817a3767dc2d9087487aae8a970a0abbaa extends Twig_Template
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
        $__internal_15dc4abd175902962a9d7301ea2b2f7ef4165a1753e14e0f02ade585a0aa929f = $this->env->getExtension("native_profiler");
        $__internal_15dc4abd175902962a9d7301ea2b2f7ef4165a1753e14e0f02ade585a0aa929f->enter($__internal_15dc4abd175902962a9d7301ea2b2f7ef4165a1753e14e0f02ade585a0aa929f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_15dc4abd175902962a9d7301ea2b2f7ef4165a1753e14e0f02ade585a0aa929f->leave($__internal_15dc4abd175902962a9d7301ea2b2f7ef4165a1753e14e0f02ade585a0aa929f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
