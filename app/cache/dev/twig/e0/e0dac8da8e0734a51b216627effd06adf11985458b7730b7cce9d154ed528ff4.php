<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_7db5e8c2a96d5a1e9fc5f626dac1c7d9c34872ea9b1baf214596a4a379b1adc6 extends Twig_Template
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
        $__internal_8f30476f96e2829159826a2c16a79332acfa1c423b8b2658b8c337a513a1be55 = $this->env->getExtension("native_profiler");
        $__internal_8f30476f96e2829159826a2c16a79332acfa1c423b8b2658b8c337a513a1be55->enter($__internal_8f30476f96e2829159826a2c16a79332acfa1c423b8b2658b8c337a513a1be55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_8f30476f96e2829159826a2c16a79332acfa1c423b8b2658b8c337a513a1be55->leave($__internal_8f30476f96e2829159826a2c16a79332acfa1c423b8b2658b8c337a513a1be55_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
