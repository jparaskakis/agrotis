<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_e504e5a877fc496fd81b8b44570d3e978c48acb7f72f8d2ab57ada314df3c6b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_1bb3550c8f6b1f8bf734560466343cfc05a44765fdefef680af890832d3f0412 = $this->env->getExtension("native_profiler");
        $__internal_1bb3550c8f6b1f8bf734560466343cfc05a44765fdefef680af890832d3f0412->enter($__internal_1bb3550c8f6b1f8bf734560466343cfc05a44765fdefef680af890832d3f0412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bb3550c8f6b1f8bf734560466343cfc05a44765fdefef680af890832d3f0412->leave($__internal_1bb3550c8f6b1f8bf734560466343cfc05a44765fdefef680af890832d3f0412_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c1efc490340d3f5c306e5449dd22f9a6376b80b3583cd7fe4ade00c3bb58a58f = $this->env->getExtension("native_profiler");
        $__internal_c1efc490340d3f5c306e5449dd22f9a6376b80b3583cd7fe4ade00c3bb58a58f->enter($__internal_c1efc490340d3f5c306e5449dd22f9a6376b80b3583cd7fe4ade00c3bb58a58f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_c1efc490340d3f5c306e5449dd22f9a6376b80b3583cd7fe4ade00c3bb58a58f->leave($__internal_c1efc490340d3f5c306e5449dd22f9a6376b80b3583cd7fe4ade00c3bb58a58f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
