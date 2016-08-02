<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_35e4d096df421390c09c517d1be5332aa9f5282452246b349d3021e52f75308d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0c4122543beb8c612a4c68a64153f5b3ab0715f467568917b08da75ead143d0 = $this->env->getExtension("native_profiler");
        $__internal_e0c4122543beb8c612a4c68a64153f5b3ab0715f467568917b08da75ead143d0->enter($__internal_e0c4122543beb8c612a4c68a64153f5b3ab0715f467568917b08da75ead143d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0c4122543beb8c612a4c68a64153f5b3ab0715f467568917b08da75ead143d0->leave($__internal_e0c4122543beb8c612a4c68a64153f5b3ab0715f467568917b08da75ead143d0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_389b370b35a63fc15d5b0d7a680a115ff9ef88fbaf25a0da7839a8f4520b7360 = $this->env->getExtension("native_profiler");
        $__internal_389b370b35a63fc15d5b0d7a680a115ff9ef88fbaf25a0da7839a8f4520b7360->enter($__internal_389b370b35a63fc15d5b0d7a680a115ff9ef88fbaf25a0da7839a8f4520b7360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_389b370b35a63fc15d5b0d7a680a115ff9ef88fbaf25a0da7839a8f4520b7360->leave($__internal_389b370b35a63fc15d5b0d7a680a115ff9ef88fbaf25a0da7839a8f4520b7360_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}*/
/* </p>*/
/* {% endblock %}*/
/* */
