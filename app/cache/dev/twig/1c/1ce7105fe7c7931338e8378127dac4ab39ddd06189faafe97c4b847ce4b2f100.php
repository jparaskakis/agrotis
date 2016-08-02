<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_a38d6bc027d947d705ee14307b10a44235aa2016db3eea84368641467e58e70d extends Twig_Template
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
        $__internal_48f2beb0a0fbe73838566675d825832e634b0d7301ac4f1e9be256a9b87fcc10 = $this->env->getExtension("native_profiler");
        $__internal_48f2beb0a0fbe73838566675d825832e634b0d7301ac4f1e9be256a9b87fcc10->enter($__internal_48f2beb0a0fbe73838566675d825832e634b0d7301ac4f1e9be256a9b87fcc10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_48f2beb0a0fbe73838566675d825832e634b0d7301ac4f1e9be256a9b87fcc10->leave($__internal_48f2beb0a0fbe73838566675d825832e634b0d7301ac4f1e9be256a9b87fcc10_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
