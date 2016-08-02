<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_cb344dbc7e3837c00548e6a2958fe07d04cd841cf938b6d7feae91505f4dc642 extends Twig_Template
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
        $__internal_3c79780074add7dbb26e351719d3c59ca3a042ac7fe23729a6c49d9590b49448 = $this->env->getExtension("native_profiler");
        $__internal_3c79780074add7dbb26e351719d3c59ca3a042ac7fe23729a6c49d9590b49448->enter($__internal_3c79780074add7dbb26e351719d3c59ca3a042ac7fe23729a6c49d9590b49448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3c79780074add7dbb26e351719d3c59ca3a042ac7fe23729a6c49d9590b49448->leave($__internal_3c79780074add7dbb26e351719d3c59ca3a042ac7fe23729a6c49d9590b49448_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
