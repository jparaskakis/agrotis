<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_5f06e23ab02c3dc52c0bb432e09e08698bbb10a8a4b8ecd11a5f080b44b37b72 extends Twig_Template
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
        $__internal_018c21b6756fb5ed782a8105ff10f525d565af7981bda4866e38604c52bd64ae = $this->env->getExtension("native_profiler");
        $__internal_018c21b6756fb5ed782a8105ff10f525d565af7981bda4866e38604c52bd64ae->enter($__internal_018c21b6756fb5ed782a8105ff10f525d565af7981bda4866e38604c52bd64ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_018c21b6756fb5ed782a8105ff10f525d565af7981bda4866e38604c52bd64ae->leave($__internal_018c21b6756fb5ed782a8105ff10f525d565af7981bda4866e38604c52bd64ae_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
