<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_a22b4bf9a65ec6235ff06eb6ad8f36e3abe0a23c3728a93ba6491360263ab249 extends Twig_Template
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
        $__internal_cc3dfc84a9d7486c811eed99b38b9def6ab0b175e589fcca02dc162378f07636 = $this->env->getExtension("native_profiler");
        $__internal_cc3dfc84a9d7486c811eed99b38b9def6ab0b175e589fcca02dc162378f07636->enter($__internal_cc3dfc84a9d7486c811eed99b38b9def6ab0b175e589fcca02dc162378f07636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_cc3dfc84a9d7486c811eed99b38b9def6ab0b175e589fcca02dc162378f07636->leave($__internal_cc3dfc84a9d7486c811eed99b38b9def6ab0b175e589fcca02dc162378f07636_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
