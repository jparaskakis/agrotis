<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_80bb1edcd5ea4634cbb1357df28bb21f827bf0319968f24dbb001bcbb8dfed0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_a28819e5a1f313fae5cc47a70d86c0dce44af418be846d288c926aea820b0cb1 = $this->env->getExtension("native_profiler");
        $__internal_a28819e5a1f313fae5cc47a70d86c0dce44af418be846d288c926aea820b0cb1->enter($__internal_a28819e5a1f313fae5cc47a70d86c0dce44af418be846d288c926aea820b0cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a28819e5a1f313fae5cc47a70d86c0dce44af418be846d288c926aea820b0cb1->leave($__internal_a28819e5a1f313fae5cc47a70d86c0dce44af418be846d288c926aea820b0cb1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_955dd72740b141b2b31c160c95ecefcfad80112976e3f1a236e72dd6d453d4dc = $this->env->getExtension("native_profiler");
        $__internal_955dd72740b141b2b31c160c95ecefcfad80112976e3f1a236e72dd6d453d4dc->enter($__internal_955dd72740b141b2b31c160c95ecefcfad80112976e3f1a236e72dd6d453d4dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_955dd72740b141b2b31c160c95ecefcfad80112976e3f1a236e72dd6d453d4dc->leave($__internal_955dd72740b141b2b31c160c95ecefcfad80112976e3f1a236e72dd6d453d4dc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
