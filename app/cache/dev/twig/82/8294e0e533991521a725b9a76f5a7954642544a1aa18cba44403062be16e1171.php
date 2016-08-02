<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_df1dcd2d7baee2b1d0111702fe1a81b04e758bbdc60075e3a73865c109daaba3 extends Twig_Template
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
        $__internal_3ed6fff7e6a90ecd5e0c3ec920f067215ed8088cac15d7851ca1ec676b48ee2e = $this->env->getExtension("native_profiler");
        $__internal_3ed6fff7e6a90ecd5e0c3ec920f067215ed8088cac15d7851ca1ec676b48ee2e->enter($__internal_3ed6fff7e6a90ecd5e0c3ec920f067215ed8088cac15d7851ca1ec676b48ee2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_3ed6fff7e6a90ecd5e0c3ec920f067215ed8088cac15d7851ca1ec676b48ee2e->leave($__internal_3ed6fff7e6a90ecd5e0c3ec920f067215ed8088cac15d7851ca1ec676b48ee2e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
