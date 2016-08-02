<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_e8f5992cbc750ce57153486230a269552378e7c2babe6da2869b833c911e332a extends Twig_Template
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
        $__internal_66bf6bce9cc8594bfc8899b18da131921565d0c48419152391727d790facb47a = $this->env->getExtension("native_profiler");
        $__internal_66bf6bce9cc8594bfc8899b18da131921565d0c48419152391727d790facb47a->enter($__internal_66bf6bce9cc8594bfc8899b18da131921565d0c48419152391727d790facb47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_66bf6bce9cc8594bfc8899b18da131921565d0c48419152391727d790facb47a->leave($__internal_66bf6bce9cc8594bfc8899b18da131921565d0c48419152391727d790facb47a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
