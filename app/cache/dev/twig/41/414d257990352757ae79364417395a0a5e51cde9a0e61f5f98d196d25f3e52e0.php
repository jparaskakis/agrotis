<?php

/* FOSUserBundle:Security:test.html.twig */
class __TwigTemplate_ec5306a6840b77e455674b4ebeb777f64f886a8d907e8037d82f9e4ddf5df82f extends Twig_Template
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
        $__internal_f9c15b6903f21ca7941daeb25fe5067ab35e3eb1fa6bccf876d86ab6708a9a42 = $this->env->getExtension("native_profiler");
        $__internal_f9c15b6903f21ca7941daeb25fe5067ab35e3eb1fa6bccf876d86ab6708a9a42->enter($__internal_f9c15b6903f21ca7941daeb25fe5067ab35e3eb1fa6bccf876d86ab6708a9a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:test.html.twig"));

        // line 1
        echo "<script>window.location.href = \"/?error=";
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
        echo "&username=";
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"</script>";
        
        $__internal_f9c15b6903f21ca7941daeb25fe5067ab35e3eb1fa6bccf876d86ab6708a9a42->leave($__internal_f9c15b6903f21ca7941daeb25fe5067ab35e3eb1fa6bccf876d86ab6708a9a42_prof);

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
