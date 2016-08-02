<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_a47922368138d997868eb36ab509b7e2b68eb40d96c5ae5eb7f2ed00e043ee08 extends Twig_Template
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
        $__internal_c0d6b5edaa80a301cc54c67764eb0d3255ac8a756aa1d9273aadf3eb4f919916 = $this->env->getExtension("native_profiler");
        $__internal_c0d6b5edaa80a301cc54c67764eb0d3255ac8a756aa1d9273aadf3eb4f919916->enter($__internal_c0d6b5edaa80a301cc54c67764eb0d3255ac8a756aa1d9273aadf3eb4f919916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0d6b5edaa80a301cc54c67764eb0d3255ac8a756aa1d9273aadf3eb4f919916->leave($__internal_c0d6b5edaa80a301cc54c67764eb0d3255ac8a756aa1d9273aadf3eb4f919916_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9e70329b6a99c99ad86335ae80d1fa95b808e2ad57ebc61d8f65a36ac3d7421a = $this->env->getExtension("native_profiler");
        $__internal_9e70329b6a99c99ad86335ae80d1fa95b808e2ad57ebc61d8f65a36ac3d7421a->enter($__internal_9e70329b6a99c99ad86335ae80d1fa95b808e2ad57ebc61d8f65a36ac3d7421a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_9e70329b6a99c99ad86335ae80d1fa95b808e2ad57ebc61d8f65a36ac3d7421a->leave($__internal_9e70329b6a99c99ad86335ae80d1fa95b808e2ad57ebc61d8f65a36ac3d7421a_prof);

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
