<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_2f555dc6d8c200bcec4181015027f3cfcc3509e79a1a10e0ffc52fa1c49f0887 extends Twig_Template
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
        $__internal_ad25c5ddb91457c16aa213c13bf11928448e9e66fd83eee99ccd10d749aec2ef = $this->env->getExtension("native_profiler");
        $__internal_ad25c5ddb91457c16aa213c13bf11928448e9e66fd83eee99ccd10d749aec2ef->enter($__internal_ad25c5ddb91457c16aa213c13bf11928448e9e66fd83eee99ccd10d749aec2ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ad25c5ddb91457c16aa213c13bf11928448e9e66fd83eee99ccd10d749aec2ef->leave($__internal_ad25c5ddb91457c16aa213c13bf11928448e9e66fd83eee99ccd10d749aec2ef_prof);

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
