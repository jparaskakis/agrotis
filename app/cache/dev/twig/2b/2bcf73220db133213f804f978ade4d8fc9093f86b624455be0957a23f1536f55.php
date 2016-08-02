<?php

/* FOSUserBundle:Security:test.html.twig */
class __TwigTemplate_9141b19f184968d7cd8e14ef22db14c6e617ac70471cfd0c552983a51f2d6d03 extends Twig_Template
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
        $__internal_5f35cba9691127cd57fff6d327fb9dcf98a05334970f914c267e85b19444c9c5 = $this->env->getExtension("native_profiler");
        $__internal_5f35cba9691127cd57fff6d327fb9dcf98a05334970f914c267e85b19444c9c5->enter($__internal_5f35cba9691127cd57fff6d327fb9dcf98a05334970f914c267e85b19444c9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:test.html.twig"));

        // line 1
        echo "<script>window.location.href = \"/?error=";
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
        echo "&username=";
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"</script>";
        
        $__internal_5f35cba9691127cd57fff6d327fb9dcf98a05334970f914c267e85b19444c9c5->leave($__internal_5f35cba9691127cd57fff6d327fb9dcf98a05334970f914c267e85b19444c9c5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:test.html.twig";
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
