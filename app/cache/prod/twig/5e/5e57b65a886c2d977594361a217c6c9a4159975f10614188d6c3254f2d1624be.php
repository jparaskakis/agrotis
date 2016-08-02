<?php

/* @FOSUser/Security/test.html.twig */
class __TwigTemplate_5355cfc190ad0b296a606428dbf4016bf2637c8d941baf73642e6e8de3d4ee1f extends Twig_Template
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
        return "@FOSUser/Security/test.html.twig";
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
