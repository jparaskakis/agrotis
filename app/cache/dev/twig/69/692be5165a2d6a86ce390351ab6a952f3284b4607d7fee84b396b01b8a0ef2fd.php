<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_01078447498f1987e57ec646bb7a8e33cd71cd1bfb289158602ae769a0ca554d extends Twig_Template
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
        $__internal_cf1c0037859d21963ced7344671dc16b74b6d148371592c18c1ed721ecc809ea = $this->env->getExtension("native_profiler");
        $__internal_cf1c0037859d21963ced7344671dc16b74b6d148371592c18c1ed721ecc809ea->enter($__internal_cf1c0037859d21963ced7344671dc16b74b6d148371592c18c1ed721ecc809ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_cf1c0037859d21963ced7344671dc16b74b6d148371592c18c1ed721ecc809ea->leave($__internal_cf1c0037859d21963ced7344671dc16b74b6d148371592c18c1ed721ecc809ea_prof);

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
