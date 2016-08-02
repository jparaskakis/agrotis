<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_f6e5c0aff86cabca20e96e7e64c3fba28e2b2978cf4c8f1d63f6c163ea90b22e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_88cbec263e596023b1ad8f5f6fd82d94ee949ed9cc6bfbd6c812b2478ca1e050 = $this->env->getExtension("native_profiler");
        $__internal_88cbec263e596023b1ad8f5f6fd82d94ee949ed9cc6bfbd6c812b2478ca1e050->enter($__internal_88cbec263e596023b1ad8f5f6fd82d94ee949ed9cc6bfbd6c812b2478ca1e050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88cbec263e596023b1ad8f5f6fd82d94ee949ed9cc6bfbd6c812b2478ca1e050->leave($__internal_88cbec263e596023b1ad8f5f6fd82d94ee949ed9cc6bfbd6c812b2478ca1e050_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f74d663a7a713d7569a60bbc3c5aa54eaf69a4cea1e4018bd03984205dce02b4 = $this->env->getExtension("native_profiler");
        $__internal_f74d663a7a713d7569a60bbc3c5aa54eaf69a4cea1e4018bd03984205dce02b4->enter($__internal_f74d663a7a713d7569a60bbc3c5aa54eaf69a4cea1e4018bd03984205dce02b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_f74d663a7a713d7569a60bbc3c5aa54eaf69a4cea1e4018bd03984205dce02b4->leave($__internal_f74d663a7a713d7569a60bbc3c5aa54eaf69a4cea1e4018bd03984205dce02b4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
