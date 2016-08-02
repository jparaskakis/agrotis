<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_a2086ce9a6ebfeb51a2f06399ed56156a84c225efbb88b0bb95cd0625bf004fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_95b582e5c29fbda711adfbb3ab5b4b953e9d2c30da861b79ec149597a765ba6e = $this->env->getExtension("native_profiler");
        $__internal_95b582e5c29fbda711adfbb3ab5b4b953e9d2c30da861b79ec149597a765ba6e->enter($__internal_95b582e5c29fbda711adfbb3ab5b4b953e9d2c30da861b79ec149597a765ba6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95b582e5c29fbda711adfbb3ab5b4b953e9d2c30da861b79ec149597a765ba6e->leave($__internal_95b582e5c29fbda711adfbb3ab5b4b953e9d2c30da861b79ec149597a765ba6e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_72673db8c1cae93930c8d6a3665e9dc4b3beafb9998a41ada1c633995956f6b0 = $this->env->getExtension("native_profiler");
        $__internal_72673db8c1cae93930c8d6a3665e9dc4b3beafb9998a41ada1c633995956f6b0->enter($__internal_72673db8c1cae93930c8d6a3665e9dc4b3beafb9998a41ada1c633995956f6b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_72673db8c1cae93930c8d6a3665e9dc4b3beafb9998a41ada1c633995956f6b0->leave($__internal_72673db8c1cae93930c8d6a3665e9dc4b3beafb9998a41ada1c633995956f6b0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
