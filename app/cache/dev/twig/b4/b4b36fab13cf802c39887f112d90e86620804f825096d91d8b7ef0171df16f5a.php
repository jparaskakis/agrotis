<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_b7e6f6c1bc79ba468ed0ebf540712624794459f5be3ba4bc9eb61521243dc083 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_caaa0990c1ab4cfbdc63f019dc46f72b4d92c6d536b7f8a6467422bd9dd38aa0 = $this->env->getExtension("native_profiler");
        $__internal_caaa0990c1ab4cfbdc63f019dc46f72b4d92c6d536b7f8a6467422bd9dd38aa0->enter($__internal_caaa0990c1ab4cfbdc63f019dc46f72b4d92c6d536b7f8a6467422bd9dd38aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_caaa0990c1ab4cfbdc63f019dc46f72b4d92c6d536b7f8a6467422bd9dd38aa0->leave($__internal_caaa0990c1ab4cfbdc63f019dc46f72b4d92c6d536b7f8a6467422bd9dd38aa0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9cce15f7beeb5f40f0d594c6e7d6da15844df7e85e7d688abe6be9d7ba3027b7 = $this->env->getExtension("native_profiler");
        $__internal_9cce15f7beeb5f40f0d594c6e7d6da15844df7e85e7d688abe6be9d7ba3027b7->enter($__internal_9cce15f7beeb5f40f0d594c6e7d6da15844df7e85e7d688abe6be9d7ba3027b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_9cce15f7beeb5f40f0d594c6e7d6da15844df7e85e7d688abe6be9d7ba3027b7->leave($__internal_9cce15f7beeb5f40f0d594c6e7d6da15844df7e85e7d688abe6be9d7ba3027b7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}, 'FOSUserBundle') }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
