<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_e86968a59a0986201de08e5f69c97d8da994752412938ffdf3153bb5e01e93b4 extends Twig_Template
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
        $__internal_3a1a197639e88b1cf14177a6d6bc8b1c744b4bed2acbf6717192a2817e0dac6a = $this->env->getExtension("native_profiler");
        $__internal_3a1a197639e88b1cf14177a6d6bc8b1c744b4bed2acbf6717192a2817e0dac6a->enter($__internal_3a1a197639e88b1cf14177a6d6bc8b1c744b4bed2acbf6717192a2817e0dac6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3a1a197639e88b1cf14177a6d6bc8b1c744b4bed2acbf6717192a2817e0dac6a->leave($__internal_3a1a197639e88b1cf14177a6d6bc8b1c744b4bed2acbf6717192a2817e0dac6a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
