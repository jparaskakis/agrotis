<?php

/* @FOSUser/Security/test.html.twig */
class __TwigTemplate_ed461bc7588a9c67838e271d6e2c4931b1313b62bd32bc2b8a15a90ade10b91b extends Twig_Template
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
        $__internal_831f1990192da9e65de8d992d88705270782e4a36ae5216c7522cdc01ad28e55 = $this->env->getExtension("native_profiler");
        $__internal_831f1990192da9e65de8d992d88705270782e4a36ae5216c7522cdc01ad28e55->enter($__internal_831f1990192da9e65de8d992d88705270782e4a36ae5216c7522cdc01ad28e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/test.html.twig"));

        // line 1
        echo "<script>window.location.href = \"/?error=";
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
        echo "&username=";
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"</script>";
        
        $__internal_831f1990192da9e65de8d992d88705270782e4a36ae5216c7522cdc01ad28e55->leave($__internal_831f1990192da9e65de8d992d88705270782e4a36ae5216c7522cdc01ad28e55_prof);

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
