<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_ef3a208d93bf72040aac4b1dac473cc1d6fc1e69ec0773c46e64984a5a53fe1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_1a9eb8892b2cf6dd9811fac89862ac30eb2518d61ebbf598b9a4fbdb8b077d0e = $this->env->getExtension("native_profiler");
        $__internal_1a9eb8892b2cf6dd9811fac89862ac30eb2518d61ebbf598b9a4fbdb8b077d0e->enter($__internal_1a9eb8892b2cf6dd9811fac89862ac30eb2518d61ebbf598b9a4fbdb8b077d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a9eb8892b2cf6dd9811fac89862ac30eb2518d61ebbf598b9a4fbdb8b077d0e->leave($__internal_1a9eb8892b2cf6dd9811fac89862ac30eb2518d61ebbf598b9a4fbdb8b077d0e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_10ae2e518f0f7388e0aa4f8f59af9881bfa4dc30e05238ab54591499b5250547 = $this->env->getExtension("native_profiler");
        $__internal_10ae2e518f0f7388e0aa4f8f59af9881bfa4dc30e05238ab54591499b5250547->enter($__internal_10ae2e518f0f7388e0aa4f8f59af9881bfa4dc30e05238ab54591499b5250547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_10ae2e518f0f7388e0aa4f8f59af9881bfa4dc30e05238ab54591499b5250547->leave($__internal_10ae2e518f0f7388e0aa4f8f59af9881bfa4dc30e05238ab54591499b5250547_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
