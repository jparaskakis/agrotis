<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_25389104f4c367a80aa2a88713f64fded47b5ceb3392862390e6ede912d3ee74 extends Twig_Template
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
        $__internal_af90a8a175fa1ee302d6eb71aee00516381cbf86c1635363e21fe0473660e527 = $this->env->getExtension("native_profiler");
        $__internal_af90a8a175fa1ee302d6eb71aee00516381cbf86c1635363e21fe0473660e527->enter($__internal_af90a8a175fa1ee302d6eb71aee00516381cbf86c1635363e21fe0473660e527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_af90a8a175fa1ee302d6eb71aee00516381cbf86c1635363e21fe0473660e527->leave($__internal_af90a8a175fa1ee302d6eb71aee00516381cbf86c1635363e21fe0473660e527_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
