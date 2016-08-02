<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_9befb64c3eb28f57f906e44db3b23540c73b4682b134c5e4f6e0377cdab0bdd3 extends Twig_Template
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
        $__internal_691f948876ba4e1163bb2537bef954b6b3f27336505a92bbe81d588ef32e3c3c = $this->env->getExtension("native_profiler");
        $__internal_691f948876ba4e1163bb2537bef954b6b3f27336505a92bbe81d588ef32e3c3c->enter($__internal_691f948876ba4e1163bb2537bef954b6b3f27336505a92bbe81d588ef32e3c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_691f948876ba4e1163bb2537bef954b6b3f27336505a92bbe81d588ef32e3c3c->leave($__internal_691f948876ba4e1163bb2537bef954b6b3f27336505a92bbe81d588ef32e3c3c_prof);

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
