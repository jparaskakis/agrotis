<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_04167fd8d5505675122e3459ecbf4866d9cb1e15cc99a3f1233e7fde07965a32 extends Twig_Template
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
        $__internal_9071256235dd3fd3fc98a2ec9bb925f2ae0918a9856eab029e871ca949d0366f = $this->env->getExtension("native_profiler");
        $__internal_9071256235dd3fd3fc98a2ec9bb925f2ae0918a9856eab029e871ca949d0366f->enter($__internal_9071256235dd3fd3fc98a2ec9bb925f2ae0918a9856eab029e871ca949d0366f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_9071256235dd3fd3fc98a2ec9bb925f2ae0918a9856eab029e871ca949d0366f->leave($__internal_9071256235dd3fd3fc98a2ec9bb925f2ae0918a9856eab029e871ca949d0366f_prof);

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
