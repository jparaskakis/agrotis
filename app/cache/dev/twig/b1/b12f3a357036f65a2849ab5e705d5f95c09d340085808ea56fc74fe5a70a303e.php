<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_9102303bdb4dc1b476fc0e4b5b75c68e5c392dda206855c800014d556bbce080 extends Twig_Template
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
        $__internal_b7f172f4a876bc38d4fafa6cda5e6fe0ce32a0be7ddc423802eed6a8879f7b5d = $this->env->getExtension("native_profiler");
        $__internal_b7f172f4a876bc38d4fafa6cda5e6fe0ce32a0be7ddc423802eed6a8879f7b5d->enter($__internal_b7f172f4a876bc38d4fafa6cda5e6fe0ce32a0be7ddc423802eed6a8879f7b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7f172f4a876bc38d4fafa6cda5e6fe0ce32a0be7ddc423802eed6a8879f7b5d->leave($__internal_b7f172f4a876bc38d4fafa6cda5e6fe0ce32a0be7ddc423802eed6a8879f7b5d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7f4738f170e0592d3137a2c007ecbdc61b00f5f9fa6ad33f645638694da66ec0 = $this->env->getExtension("native_profiler");
        $__internal_7f4738f170e0592d3137a2c007ecbdc61b00f5f9fa6ad33f645638694da66ec0->enter($__internal_7f4738f170e0592d3137a2c007ecbdc61b00f5f9fa6ad33f645638694da66ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_7f4738f170e0592d3137a2c007ecbdc61b00f5f9fa6ad33f645638694da66ec0->leave($__internal_7f4738f170e0592d3137a2c007ecbdc61b00f5f9fa6ad33f645638694da66ec0_prof);

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
