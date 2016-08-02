<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_07cfe28687bb0ad32dd9c633671371de7a4f11f464a1ec262bacf9ecda7388ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_19c3b2922dd80ba37f2973f633e6fb7905d148ab237318d037fae273bc5f2fe7 = $this->env->getExtension("native_profiler");
        $__internal_19c3b2922dd80ba37f2973f633e6fb7905d148ab237318d037fae273bc5f2fe7->enter($__internal_19c3b2922dd80ba37f2973f633e6fb7905d148ab237318d037fae273bc5f2fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19c3b2922dd80ba37f2973f633e6fb7905d148ab237318d037fae273bc5f2fe7->leave($__internal_19c3b2922dd80ba37f2973f633e6fb7905d148ab237318d037fae273bc5f2fe7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a2d950399046d2cda4a054367de167a144ab30cc13b05b872ee77b4e780c8d15 = $this->env->getExtension("native_profiler");
        $__internal_a2d950399046d2cda4a054367de167a144ab30cc13b05b872ee77b4e780c8d15->enter($__internal_a2d950399046d2cda4a054367de167a144ab30cc13b05b872ee77b4e780c8d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_a2d950399046d2cda4a054367de167a144ab30cc13b05b872ee77b4e780c8d15->leave($__internal_a2d950399046d2cda4a054367de167a144ab30cc13b05b872ee77b4e780c8d15_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
