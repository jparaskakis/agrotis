<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_5b050457012cb5d73d657b23ee41f2787b9d49fe033a87301ff10011892564a3 extends Twig_Template
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
        $__internal_b1a208bfcb46a3fdc13f470b0a2274b6d0333848a26e5d3c7462a55a051fd976 = $this->env->getExtension("native_profiler");
        $__internal_b1a208bfcb46a3fdc13f470b0a2274b6d0333848a26e5d3c7462a55a051fd976->enter($__internal_b1a208bfcb46a3fdc13f470b0a2274b6d0333848a26e5d3c7462a55a051fd976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_b1a208bfcb46a3fdc13f470b0a2274b6d0333848a26e5d3c7462a55a051fd976->leave($__internal_b1a208bfcb46a3fdc13f470b0a2274b6d0333848a26e5d3c7462a55a051fd976_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
