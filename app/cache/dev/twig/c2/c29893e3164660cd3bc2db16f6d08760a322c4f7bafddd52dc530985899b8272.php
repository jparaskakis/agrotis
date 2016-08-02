<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_17dc9c3c85267414dbff856314d26026fee8fdc01e9fe493711460d44402864c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_fb90d36276fc5b226f79a3de414d80fdf1cd20529543b1c56a0848be3283ba9e = $this->env->getExtension("native_profiler");
        $__internal_fb90d36276fc5b226f79a3de414d80fdf1cd20529543b1c56a0848be3283ba9e->enter($__internal_fb90d36276fc5b226f79a3de414d80fdf1cd20529543b1c56a0848be3283ba9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb90d36276fc5b226f79a3de414d80fdf1cd20529543b1c56a0848be3283ba9e->leave($__internal_fb90d36276fc5b226f79a3de414d80fdf1cd20529543b1c56a0848be3283ba9e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3f794d68e239fc951f9727cf7551a74c97ca93b6e8311183bafab5d29df354a2 = $this->env->getExtension("native_profiler");
        $__internal_3f794d68e239fc951f9727cf7551a74c97ca93b6e8311183bafab5d29df354a2->enter($__internal_3f794d68e239fc951f9727cf7551a74c97ca93b6e8311183bafab5d29df354a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_3f794d68e239fc951f9727cf7551a74c97ca93b6e8311183bafab5d29df354a2->leave($__internal_3f794d68e239fc951f9727cf7551a74c97ca93b6e8311183bafab5d29df354a2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
