<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d111ba0eae93aa654393b2f9b40a68001703d6b255a0aeb205e88ace63efed97 extends Twig_Template
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
        $__internal_da5c472b10f7de37eed20908d4ddd85e87b20cd08642fed3311b23fcd273909c = $this->env->getExtension("native_profiler");
        $__internal_da5c472b10f7de37eed20908d4ddd85e87b20cd08642fed3311b23fcd273909c->enter($__internal_da5c472b10f7de37eed20908d4ddd85e87b20cd08642fed3311b23fcd273909c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_da5c472b10f7de37eed20908d4ddd85e87b20cd08642fed3311b23fcd273909c->leave($__internal_da5c472b10f7de37eed20908d4ddd85e87b20cd08642fed3311b23fcd273909c_prof);

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
