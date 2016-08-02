<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_9845b95dcadbb03f190b6fc316f25c0aff0965770baaed5d97fcbed42ff8ae62 extends Twig_Template
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
        $__internal_3119b3e179ee0e9f3584b0afb1635db0f70b56896eca5c63df24d587177b2dee = $this->env->getExtension("native_profiler");
        $__internal_3119b3e179ee0e9f3584b0afb1635db0f70b56896eca5c63df24d587177b2dee->enter($__internal_3119b3e179ee0e9f3584b0afb1635db0f70b56896eca5c63df24d587177b2dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3119b3e179ee0e9f3584b0afb1635db0f70b56896eca5c63df24d587177b2dee->leave($__internal_3119b3e179ee0e9f3584b0afb1635db0f70b56896eca5c63df24d587177b2dee_prof);

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
