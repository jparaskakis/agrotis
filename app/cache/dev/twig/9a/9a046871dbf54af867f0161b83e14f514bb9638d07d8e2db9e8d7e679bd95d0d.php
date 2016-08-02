<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_12866f8ed2a2d9fe96d85b7b590cbba5cce7b01a93a52752938d04da6c506b79 extends Twig_Template
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
        $__internal_5726c855a463264500a8a449c9d3ca335565e654e42ae42d5104bbe5dbbba258 = $this->env->getExtension("native_profiler");
        $__internal_5726c855a463264500a8a449c9d3ca335565e654e42ae42d5104bbe5dbbba258->enter($__internal_5726c855a463264500a8a449c9d3ca335565e654e42ae42d5104bbe5dbbba258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5726c855a463264500a8a449c9d3ca335565e654e42ae42d5104bbe5dbbba258->leave($__internal_5726c855a463264500a8a449c9d3ca335565e654e42ae42d5104bbe5dbbba258_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_abf7250cae6970700b2b8da2ba56a3349425a67a181e9790387dfb4f0d3ebf29 = $this->env->getExtension("native_profiler");
        $__internal_abf7250cae6970700b2b8da2ba56a3349425a67a181e9790387dfb4f0d3ebf29->enter($__internal_abf7250cae6970700b2b8da2ba56a3349425a67a181e9790387dfb4f0d3ebf29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_abf7250cae6970700b2b8da2ba56a3349425a67a181e9790387dfb4f0d3ebf29->leave($__internal_abf7250cae6970700b2b8da2ba56a3349425a67a181e9790387dfb4f0d3ebf29_prof);

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
