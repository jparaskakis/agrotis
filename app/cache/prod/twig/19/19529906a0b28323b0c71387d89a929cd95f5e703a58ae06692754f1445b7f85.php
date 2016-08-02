<?php

/* FOSUserBundle:Security:test.html.twig */
class __TwigTemplate_4467fd29bf11792fb17198b0ff09980282464ac5a36bc93dd68308550c7f95ef extends Twig_Template
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
        // line 1
        echo "<script>window.location.href = \"/?error=";
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
        echo "&username=";
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\"</script>";
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
        return array (  19 => 1,);
    }
}
/* <script>window.location.href = "/?error={{ error }}&username={{ last_username }}"</script>*/
