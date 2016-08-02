<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_47c7be4cae564d071c84e7fa3995a4b7e3eadecfb110bc773e49bfeccf34c6e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_3d59fcc72dcf173c9d3c73e376342a29661ba6970692ebb06c9773480f3c7598 = $this->env->getExtension("native_profiler");
        $__internal_3d59fcc72dcf173c9d3c73e376342a29661ba6970692ebb06c9773480f3c7598->enter($__internal_3d59fcc72dcf173c9d3c73e376342a29661ba6970692ebb06c9773480f3c7598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d59fcc72dcf173c9d3c73e376342a29661ba6970692ebb06c9773480f3c7598->leave($__internal_3d59fcc72dcf173c9d3c73e376342a29661ba6970692ebb06c9773480f3c7598_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bef2ff5d93f3e098adc0b38312fd39d0bba0f0dbd4f61a2302f9b312ed9a32c6 = $this->env->getExtension("native_profiler");
        $__internal_bef2ff5d93f3e098adc0b38312fd39d0bba0f0dbd4f61a2302f9b312ed9a32c6->enter($__internal_bef2ff5d93f3e098adc0b38312fd39d0bba0f0dbd4f61a2302f9b312ed9a32c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_bef2ff5d93f3e098adc0b38312fd39d0bba0f0dbd4f61a2302f9b312ed9a32c6->leave($__internal_bef2ff5d93f3e098adc0b38312fd39d0bba0f0dbd4f61a2302f9b312ed9a32c6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
