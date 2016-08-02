<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_1d7a1bf5e8e73924f1a4a0f62999df52e5e992f9e6fe13431f9280edf8afd3fe extends Twig_Template
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
        $__internal_a1266c9bc58f2955bf1030d8280475f468eae3657b7b6c2b6ce403628199aa5c = $this->env->getExtension("native_profiler");
        $__internal_a1266c9bc58f2955bf1030d8280475f468eae3657b7b6c2b6ce403628199aa5c->enter($__internal_a1266c9bc58f2955bf1030d8280475f468eae3657b7b6c2b6ce403628199aa5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_a1266c9bc58f2955bf1030d8280475f468eae3657b7b6c2b6ce403628199aa5c->leave($__internal_a1266c9bc58f2955bf1030d8280475f468eae3657b7b6c2b6ce403628199aa5c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
