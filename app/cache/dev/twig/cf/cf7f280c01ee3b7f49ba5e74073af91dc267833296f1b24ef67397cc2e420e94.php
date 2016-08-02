<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_2f7ddfcd19e3d1e4a334b062e317cd5f7cb767ceae8da90bde44f78f9ccebd9f extends Twig_Template
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
        $__internal_5f721f8fd28147e39289152221554a2442218601770d165c8fec2a6e14a41ed7 = $this->env->getExtension("native_profiler");
        $__internal_5f721f8fd28147e39289152221554a2442218601770d165c8fec2a6e14a41ed7->enter($__internal_5f721f8fd28147e39289152221554a2442218601770d165c8fec2a6e14a41ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5f721f8fd28147e39289152221554a2442218601770d165c8fec2a6e14a41ed7->leave($__internal_5f721f8fd28147e39289152221554a2442218601770d165c8fec2a6e14a41ed7_prof);

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
