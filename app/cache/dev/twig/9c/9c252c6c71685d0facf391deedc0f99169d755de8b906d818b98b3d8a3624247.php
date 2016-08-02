<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_a61c63f78a74f168e03e9cfd206de579ca9ec63e3b2433782dada6175cd47def extends Twig_Template
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
        $__internal_d425b02f364a94631bb3563f212b6c5f0ea3a909af078d4d52ed66f3d5414794 = $this->env->getExtension("native_profiler");
        $__internal_d425b02f364a94631bb3563f212b6c5f0ea3a909af078d4d52ed66f3d5414794->enter($__internal_d425b02f364a94631bb3563f212b6c5f0ea3a909af078d4d52ed66f3d5414794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d425b02f364a94631bb3563f212b6c5f0ea3a909af078d4d52ed66f3d5414794->leave($__internal_d425b02f364a94631bb3563f212b6c5f0ea3a909af078d4d52ed66f3d5414794_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1881530c887f57850007eca1e0d45a61ad66a0b15dce5dab1f0a07f47a941e57 = $this->env->getExtension("native_profiler");
        $__internal_1881530c887f57850007eca1e0d45a61ad66a0b15dce5dab1f0a07f47a941e57->enter($__internal_1881530c887f57850007eca1e0d45a61ad66a0b15dce5dab1f0a07f47a941e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_1881530c887f57850007eca1e0d45a61ad66a0b15dce5dab1f0a07f47a941e57->leave($__internal_1881530c887f57850007eca1e0d45a61ad66a0b15dce5dab1f0a07f47a941e57_prof);

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
