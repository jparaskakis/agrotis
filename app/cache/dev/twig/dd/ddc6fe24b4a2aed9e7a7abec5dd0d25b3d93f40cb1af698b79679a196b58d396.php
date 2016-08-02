<?php

/* @FOSUser/Security/test.html.twig */
class __TwigTemplate_17d52ba1e8816a24a57246f52a2bcb8ac513074398da02f626fecfee5f98af88 extends Twig_Template
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
        $__internal_f27a73ffbd27313f8d649e57cc9e2484fe3af2a5ec7e608dd7405b4bc2726b96 = $this->env->getExtension("native_profiler");
        $__internal_f27a73ffbd27313f8d649e57cc9e2484fe3af2a5ec7e608dd7405b4bc2726b96->enter($__internal_f27a73ffbd27313f8d649e57cc9e2484fe3af2a5ec7e608dd7405b4bc2726b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/test.html.twig"));

        // line 1
        echo "<script>window.location.href = \"/?error=";
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
        echo "&username=";
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"</script>";
        
        $__internal_f27a73ffbd27313f8d649e57cc9e2484fe3af2a5ec7e608dd7405b4bc2726b96->leave($__internal_f27a73ffbd27313f8d649e57cc9e2484fe3af2a5ec7e608dd7405b4bc2726b96_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/test.html.twig";
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
/* <script>window.location.href = "/?error={{ error }}&username={{ last_username }}"</script>*/
