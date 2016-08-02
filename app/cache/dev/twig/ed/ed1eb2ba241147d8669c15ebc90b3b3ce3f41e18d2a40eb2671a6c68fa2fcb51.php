<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_9f45c42543967ea347a9416cbf3099f3acabb2c56941460c836d9b0025b0f0ac extends Twig_Template
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
        $__internal_ead4767cfda55023112d3ad6912041f4276961ae4c10579d2a7bbd52db574dd7 = $this->env->getExtension("native_profiler");
        $__internal_ead4767cfda55023112d3ad6912041f4276961ae4c10579d2a7bbd52db574dd7->enter($__internal_ead4767cfda55023112d3ad6912041f4276961ae4c10579d2a7bbd52db574dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_ead4767cfda55023112d3ad6912041f4276961ae4c10579d2a7bbd52db574dd7->leave($__internal_ead4767cfda55023112d3ad6912041f4276961ae4c10579d2a7bbd52db574dd7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
