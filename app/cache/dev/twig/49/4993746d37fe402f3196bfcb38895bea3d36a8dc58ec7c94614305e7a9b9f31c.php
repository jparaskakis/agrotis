<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_fe54b224b5b6ec9010c80af90b16cecb6b8ae703b0ac04d08f70ca61646e2c85 extends Twig_Template
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
        $__internal_ddcf706bb9cf4d18a4e33c4a2113be34d6da5ae8384be85fbeb1dcf490f33f0b = $this->env->getExtension("native_profiler");
        $__internal_ddcf706bb9cf4d18a4e33c4a2113be34d6da5ae8384be85fbeb1dcf490f33f0b->enter($__internal_ddcf706bb9cf4d18a4e33c4a2113be34d6da5ae8384be85fbeb1dcf490f33f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_ddcf706bb9cf4d18a4e33c4a2113be34d6da5ae8384be85fbeb1dcf490f33f0b->leave($__internal_ddcf706bb9cf4d18a4e33c4a2113be34d6da5ae8384be85fbeb1dcf490f33f0b_prof);

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
