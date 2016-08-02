<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_dba9cf5ce8bc3ce34cd3604ae590c5249668579175f5e59f116feeae7fd44602 extends Twig_Template
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
        $__internal_432b380dbf3ac289d7447c50cc1b738efa36d0a5b1d1b48ef16775cffebbdfc2 = $this->env->getExtension("native_profiler");
        $__internal_432b380dbf3ac289d7447c50cc1b738efa36d0a5b1d1b48ef16775cffebbdfc2->enter($__internal_432b380dbf3ac289d7447c50cc1b738efa36d0a5b1d1b48ef16775cffebbdfc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_432b380dbf3ac289d7447c50cc1b738efa36d0a5b1d1b48ef16775cffebbdfc2->leave($__internal_432b380dbf3ac289d7447c50cc1b738efa36d0a5b1d1b48ef16775cffebbdfc2_prof);

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
