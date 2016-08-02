<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_f6a3743449f9ce8d40e9c63bbc0cc1407aefbc68a9af5086d8f6112446f6380d extends Twig_Template
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
        $__internal_15ccaf85b0c7a554288143c0d29b25d953c8193f397f5a344a547ce74b4a3640 = $this->env->getExtension("native_profiler");
        $__internal_15ccaf85b0c7a554288143c0d29b25d953c8193f397f5a344a547ce74b4a3640->enter($__internal_15ccaf85b0c7a554288143c0d29b25d953c8193f397f5a344a547ce74b4a3640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_15ccaf85b0c7a554288143c0d29b25d953c8193f397f5a344a547ce74b4a3640->leave($__internal_15ccaf85b0c7a554288143c0d29b25d953c8193f397f5a344a547ce74b4a3640_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
